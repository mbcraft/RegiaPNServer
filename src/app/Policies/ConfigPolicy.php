<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;
use App\Models\Config;

/**
 * Class ConfigPolicy
 * @package App\Policies
 *
 * Questa classe contiene le autorizzazioni del model Config
 */
class ConfigPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can manage a configuration.
     *
     * @param User $user
     * @param Config $config
     * @return mixed
     */
    public function manage(User $user,Config $config) {
        return $user->isSysAdmin();
    }
}
