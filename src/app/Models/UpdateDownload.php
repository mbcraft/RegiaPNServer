<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 10/05/16
 * Time: 12.16
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;
use Mbcraft\Laravel\Models\INameable;

class UpdateDownload extends Model implements INameable
{
    protected $table = 'tab_update_downloads';

    protected $fillable = [
        "update_id",
        "ip",
        "user_agent"
    ];

    protected $dates = ['created_at','updated_at'];

    /**
     * Returns the relation pointing to the Update model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The relation pointing to the Update model.
     */
    public function getUpdate() {
        return $this->belongsTo('App\Models\Update','update_id');
    }

    /**
     * @see INameable::one_entity()
     *
     */
    public static function one_entity()
    {
        return "update_download";
    }

    /**
     * @see INameable::many_entities()
     *
     */
    public static function many_entities()
    {
        return "update_downloads";
    }
}