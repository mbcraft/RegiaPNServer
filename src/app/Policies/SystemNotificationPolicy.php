<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;
use App\Models\SystemNotification;

/**
 * Class SystemNotificationPolicy
 * @package App\Policies
 *
 * Questa classe contiene le autorizzazioni sul model SystemNotification
 *
 */
class SystemNotificationPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can manage the system notifications
     *
     * @param User $user
     * @param SystemNotification $not
     * @return bool
     */
    public function manage(User $user, SystemNotification $not) {
        return $user->isSysAdmin();
    }

}
