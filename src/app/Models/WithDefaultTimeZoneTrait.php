<?php

namespace App\Models;

use App\Services\Music\IGlobalConfiguration;
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 26/07/16
 * Time: 12.33
 */

trait WithDefaultTimeZoneTrait {
    /**
     * Sets the default time zone on this model
     */
    public function withDefaultTimeZone() {
        if (Config::hasKey(IGlobalConfiguration::DEFAULT_TIME_ZONE_KEY,IGlobalConfiguration::CONTEXT)) {
            $default_time_zone = Config::get(IGlobalConfiguration::DEFAULT_TIME_ZONE_KEY,IGlobalConfiguration::CONTEXT);
            $this->time_zone = $default_time_zone;
            \Log::debug("Setting default time_zone to : ".$default_time_zone);
        }
        return $this;
    }
}