<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mbcraft\Laravel\Models\INameable;

class ElemPlaylist extends Model implements INameable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tab_elem_playlist';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['playlist_id','playable_id', 'playable_type', 'ordine'];

    protected $dates = ['created_at','updated_at'];
    
    function playable() {
        return $this->morphTo();
    }
    
    /**
     * Ritorna la playlist associata a questo elemento
     * 
     * @return Playlist
     */
    function playlist() {
        return $this->belongsTo('App\Models\Playlist');
    }


    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity() {
        return "elem_playlist";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities() {
        return "elems_playlist";
    }
}
