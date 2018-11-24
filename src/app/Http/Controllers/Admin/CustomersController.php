<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;

use Mbcraft\Laravel\Http\Controllers\Behaviours\ImportedIndex;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Create;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Edit;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete; 
use Mbcraft\Laravel\Http\Controllers\Behaviours\Restore; 
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;

use Mbcraft\Laravel\Http\Controllers\QueryFilters\QueryFilterFactory;
use Mbcraft\Piol\Dir;
use App\Services\Music\IServerPaths;
use App\Models\Auth\User;

use Sentinel;


class CustomersController extends EntityController {
    
    function __construct() {
        $this->LMessage = new \App\Lang\Customers\LMessage();
    }
    
    protected $LMessage;
    /**
     * Declare the rules for the form validation
     *
     * @var array
     */
    protected $validationRules = array(
        'unique_label' => 'required|min:3|max:64|string|unique:tab_clienti,unique_label,{id}',
        'security_token' => 'required|string|unique:tab_clienti,security_token,{id}|max:64',
        'owner_id' => 'required|integer|exists:SENTINEL_users,id',
        'manager_id' => 'required|integer|exists:SENTINEL_users,id',
        'nome' => 'min:3|max:64|string',
        'cognome' => 'min:3|max:64|string',
        'ragione_sociale' => 'min:3|max:255|string',
        'indirizzo' => 'required|min:3|max:255|string',
        'cap' => 'required|min:3|max:8|string',
        'citta' => 'required|min:3|max:64|string',
        'provincia' => 'required|min:3|max:64|string',
        'stato' => 'required|string|max:2',
        'telefono' => 'max:16|string',
        'email' => 'max:32|email|unique:tab_clienti,id',
        'sito_web' => 'max:32|url',
        'p_iva' => 'max:16|string',
        'codice_fiscale' => 'max:16|string',
        'note' => 'string'      
    );
    
    const MODEL_CLASS = 'App\Models\Cliente';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";

    use ImportedIndex;
    use Index;
    use Create;
    use Edit;
    use Show;
    use Delete;
    use Restore;
    
    public function getPlayers($id) {
        $parameters = array(QueryFilterFactory::equal("cliente_id",$id));
        
        return $this->getImportedIndex('App\Http\Controllers\Admin\PlayersController',$parameters);
    }
    
    protected function beforeEntityCreate($create_data) {
        
        $create_data["security_token"] = md5(time());
        
        return $this->defaultBeforeEntityCreate($create_data);
    }
    
    protected function afterEntityCreate($entity) {
        //creo le cartelle relative al cliente
        
        //upload
        $c_u = new Dir(IServerPaths::CLIENTI_UPLOAD_DIR);
        $c_u->touch();
        //creo la cartella per gli upload
        $c_u_root = $c_u->newDir($entity->unique_label);
        $c_u_root->touch();
        
        //download
        $c_d = new Dir(IServerPaths::CLIENTI_DOWNLOAD_DIR);
        $c_d->touch();
        //creo la cartella per i download
        $c_d_root = $c_d->newDir($entity->id);
        $c_d_root->touch();
        
        return $this->defaultAfterEntityCreate($entity);
    }
    
    protected function beforeEntityEdit($edit_data, $entity) {
        //se la label viene modificata rinomino la cartella del cliente in upload
        if ($edit_data["unique_label"]!=$entity->unique_label) {
            //rinomino la cartella 
            $c_u = new Dir(IServerPaths::CLIENTI_UPLOAD_DIR);
            $c_u_root = $c_u->newDir($entity->unique_label);
            $c_u_root->rename($edit_data["unique_label"]);
        }
        
        return $this->defaultBeforeEntityEdit($edit_data,$entity);
    }
    
    protected function getDetailsAdditionalEntities() {
        return array(
            "countries" => \Mbcraft\Form\FormHelper::countries(),
            "users" => User::all());
    }
    
    protected function getSummaryCustomQuery($model_class,$filters) {
        if (Sentinel::hasAccess('manage-users')) {
            \Log::debug("User has manage-users permission : returning all objects query");
            return $model_class::query();
        }
        if (Sentinel::hasAccess('manage-customers')) {
            $user_id = Sentinel::getUser()->getUserId();
            return $model_class::where('owner_id',$user_id)->orWhere('manager_id',$user_id);
        }
        \Log::debug("User has not manage-users and manage-customers permissions.");
        return $model_class::where('id',-1); //no objects
    }
    
}