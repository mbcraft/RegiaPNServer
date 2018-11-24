<?php

namespace App\Http\Controllers\Admin;

use Mbcraft\Laravel\Http\Controllers\EntityController;

use Mbcraft\Laravel\Http\Controllers\Behaviours\Index;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Edit;
use Mbcraft\Laravel\Http\Controllers\Behaviours\Show;

use Sentinel;

class SettingsController extends EntityController {
    
    function __construct() {
        $this->LMessage = new \App\Lang\Settings\LMessage();
    }
    
    protected $LMessage;
    
    /**
     * Declare the rules for the form validation
     *
     * @var array
     */
    protected $validationRules = array(
        'value' => 'required|string',
        'context' => 'required|string',
    );
    
    const MODEL_CLASS = 'App\Models\Config';
    const VIEW_PREFIX = "admin.";
    const ROUTE_PREFIX = "admin.";
    
    function getSummaryCustomQuery($model_class, $filters) {
        if (Sentinel::hasAccess('sys-admin')) {
            return $model_class::query();
        }
        
        return $model_class::where('id',-1);
        
    }
    
    function getDetailsCustomQuery($deleted, $model_class, $id) {
        if (Sentinel::hasAccess('sys-admin')) {
            return parent::getDetailsCustomQuery($deleted, $model_class, $id);
        }
        
        return $model_class::where('id',-1);
    }
    
    use Index;
    use Edit;
    use Show;
}