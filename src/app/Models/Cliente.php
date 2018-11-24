<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Mbcraft\Laravel\Database\SoftDeletesCascade;
use Mbcraft\Laravel\Models\INameable;

class Cliente extends Model implements INameable
{    
    use SoftDeletes;
    use SoftDeletesCascade;

    use WithDefaultCountryTrait;
    
    protected $softCascades = ["players"];

    protected $dates = ['deleted_at','created_at','updated_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_clienti';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    
    /**
     * Ritorna una breve descrizione del cliente dato il suo id
     * 
     * @param int $cliente_id L'id del cliente
     */
    public static function getShortDescriptionById($cliente_id) {
        $c = Cliente::findOrFail($cliente_id);
        return $c->unique_label." [".$c->ragione_sociale."]";
    }
    
    /**
     * Ritorna i players acquistati/affittati da questo cliente.
     * 
     * @return mixed L'elenco dei player
     */
    public function players() {
        return $this->hasMany('App\Models\Player');
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "customer";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "customers";
    }
        
}
