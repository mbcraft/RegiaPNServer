<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Auth\User;
use App\Models\Spot;

use Sentinel;

/**
 * Class SpotPolicy
 * @package App\Policies
 *
 * Questa classe contiene le verifiche per le operazioni sul model Spot.
 *
 * - delete
 */
class SpotPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can delete a spot
     *
     * @param User $user
     * @param Spot $spot
     * @return bool
     */
    public function delete(User $user,Spot $spot) {

        return $user->isSysAdmin();
    }
}
