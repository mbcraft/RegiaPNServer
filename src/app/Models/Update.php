<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 10/05/16
 * Time: 12.15
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;
use Mbcraft\Laravel\Models\INameable;

class Update extends Model implements INameable
{
    protected $table = 'tab_updates';

    protected $fillable = [
        "player_id"
    ];

    protected $dates = ['created_at','updated_at'];

    /**
     * Ritorna il player associato a questo aggiornamento.
     * Non è necessario specificare il nome della colonna della chiave esterna
     * in quanto è già uguale a "<nome_metodo>_id"
     *
     * @return mixed Il player associato a questo aggiornamento
     */
    public function player() {
        return $this->belongsTo('App\Models\Player');
    }

    /**
     * Returns the relation pointing to the UpdateDownloads linked to this Update
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getDownloads() {
        return $this->hasMany('App\Models\UpdateDownload');
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity()
    {
        return "updates";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities()
    {
        return "updates";
    }
}