<?php

namespace Mbcraft\Utils;

use App\Lang\LPagination;

class HtmlHelper {
    
    public static function trashedButtons($index_route,$entity_class,$plural_entity_name) {
        $class_methods = get_class_methods($entity_class);
        
        $has_soft_deletes = array_search("trashed",$class_methods)!==FALSE;
        
        if ($has_soft_deletes) {
            $buttons = "";
            $buttons.="<a class='btn btn-default btn-sm' href='$index_route' role='button'>".LPagination::allEntitiesPrefix().$plural_entity_name.LPagination::allEntitiesSuffix()."</a>";     
            $buttons.="<a class='btn btn-success btn-sm' href='$index_route?withDeleted=true' role='button'>".LPagination::allWithDeletedPrefix().$plural_entity_name.LPagination::allWithDeletedSuffix()."</a>";
            $buttons.="<a class='btn btn-danger btn-sm' href='$index_route?onlyDeleted=true' role='button'>".LPagination::onlyDeletedPrefix().$plural_entity_name.LPagination::onlyDeletedSuffix()."</a>";
            
            return $buttons;
        } else { 
            return "";
        }
    }
    
}