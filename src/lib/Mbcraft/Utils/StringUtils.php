<?php

namespace \Mbcraft\Utils;

/**
 * Questa classe contiene alcuni metodi di utilità per l'elaborazione di stringhe.
 */

class StringUtils {
    
    /**
     * Elabora un percorso effettuando le sostituzioni delle variabili in
     * esso presenti.
     * 
     * @param string $pattern_path Il percorso con variabili all'interno
     * @param array $params I parametri da utilizzare per eventuali sostituzioni
     * @return string Il percorso effettivo
     */
    public static function getComputedString($pattern_path,$params = array()) {
        
        foreach ($params as $key => $value) {
            $pattern_path = str_replace("{".$key."}", $value, $pattern_path);
        }
        
        return $pattern_path;
        
    }
}