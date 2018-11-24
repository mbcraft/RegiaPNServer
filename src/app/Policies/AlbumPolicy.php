<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Auth\User;
use App\Models\Album;

use Sentinel;

/**
 * Class AlbumPolicy
 * @package App\Policies
 *
 * Questa classe contiene le verifiche delle operazioni sul model Album
 *
 * - delete
 */
class AlbumPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can delete an album.
     *
     * @param User $user
     * @param Album $album
     * @return bool
     */
     public function delete(User $user,Album $album) {

         return $user->isSysAdmin();

     }
}
