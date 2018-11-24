<?php

namespace App\Models;

use App\Services\Music\IGlobalConfiguration;

/**
 * Created by PhpStorm.
 * User: marco
 * Date: 26/07/16
 * Time: 12.32
 */

trait WithDefaultCountryTrait {
    /**
     * Sets the default country if one is set in the global config
     */
    public function withDefaultCountry() {
        if (Config::hasKey(IGlobalConfiguration::DEFAULT_COUNTRY_KEY,IGlobalConfiguration::CONTEXT)) {
            $default_stato = Config::get(IGlobalConfiguration::DEFAULT_COUNTRY_KEY,IGlobalConfiguration::CONTEXT);
            $this->stato = $default_stato;
            \Log::debug("Setting default country to : ".$default_stato);
        }
        return $this;
    }
}