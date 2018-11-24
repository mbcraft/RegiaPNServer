<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;
use App\Models\PlayerNotification;

/**
 * Class PlayerNotificationPolicy
 * @package App\Policies
 *
 * Questa classe contiene le verifiche sulle operazioni del model PlayerNotification
 */
class PlayerNotificationPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can manage the player notifications.
     *
     * @param User $user
     * @param PlayerNotification $notification
     */
    public function manage(User $user,PlayerNotification $notification) {
        $player = $notification->player;
        $cliente = $player->cliente;

        if ($user->id==$cliente->owner_id && $user->isCustomerManager()) return true;
        if ($user->id==$cliente->manager_id && $user->isCustomerManager()) return true;
        return false;
    }


}
