<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Mbcraft\Laravel\Models\INameable;

class Config extends Model implements INameable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_configs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['key', 'value', 'context'];

    protected $dates = ['created_at','updated_at'];
    
    /**
     * Metodo statico per controllare che una determinata chiave sia presente.
     * 
     * @param string $key La chiave cercata
     * @return boolean true se è presente, false altrimenti
     */
    public static function hasKey($key,$context="") {
        return Config::where("key",$key)->where("context",$context)->count()==1;
    }
    
    /**
     * Ritorna un valore di configurazione salvato nel database
     * 
     * @param string $key La chiave cercata
     * @return string il valore corrispondente
     */
    public static function get($key,$context="") {
        try {
            return Config::where("key",$key)->where("context",$context)->firstOrFail()->value;
        } catch(ModelNotFoundException $ex) {
            throw new \Exception("Configuration key not found : ".$key." [".$context."].");
        }
    }
    
    /**
     * Ritorna un insieme di chiavi raggruppate per contesto.
     * 
     * @param string $context Il contesto che raggruppa le chiavi
     * @return array l'array dei valori indicizzato con le chiavi 
     */
    public static function getByContext($context) {
        $entries = Config::where("context",$context)->get();
        $result = [];
        foreach ($entries as $entry) {
            $result[$entry->key] = $entry->value;
        }
        return $result;
    }
    /**
     * Imposta un valore di configurazione nel database
     * 
     * @param string $key La chiave con cui memorizzare il valore
     * @param string $value Il valore a essa associato
     */
    public static function set($key,$value,$context="") {
        if (self::hasKey($key)) {
            $cfg = Config::where("key",$key)->where("context",$context)->firstOrFail();
            $cfg->value = $value;
            $cfg->context = $context;
            $cfg->save();
        } else {
            Config::create(["key"=>$key,"value"=>$value,"context"=>$context]);
        }
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "setting";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "settings";
    }
     
}
