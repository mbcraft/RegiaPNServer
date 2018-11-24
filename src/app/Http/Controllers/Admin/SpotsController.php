<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Delete;
use Mbcraft\Laravel\Http\Controllers\QueryFilters\QueryFilterFactory;

use Sentinel;

class SpotsController extends EntityController {

    const MODEL_CLASS = 'App\Models\Spot';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";
    
    protected $import_select_filters = array("player_id" => QueryFilterFactory::EQUAL);
    
    use Index;
    use Show;
    use Delete;
    
    function __construct() {
        $this->LMessage = new \App\Lang\Spots\LMessage();
    }
    
    protected $LMessage;
    
    private $select_from_index = true;
    private $select_from_show = true;
    
    protected function getSummaryCustomQuery($model_class,$filters) {
        if (Sentinel::hasAccess('sys-admin')) {
            //\Log::debug("As sys-admin");
            return $model_class::query();
        }
        if (Sentinel::hasAccess('playlist-editor')) {
            //\Log::debug("As playlist-editor");
            return $model_class::whereHas('player',function($query){
                $query->whereHas('cliente',function($nested_query){
                    $user_id = Sentinel::getUser()->getUserId();
                    $nested_query->where('owner_id',$user_id);
                });
            })->orWhereHas('player',function($query){
                $query->whereHas('cliente',function($nested_query){
                    $user_id = Sentinel::getUser()->getUserId();
                    $nested_query->where('manager_id',$user_id);
                });
            });
        }
        return $model_class::where('id',-1);
    }
    
}