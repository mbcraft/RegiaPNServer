<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Auth\User;
use App\Models\Song;

use Sentinel;

/**
 * Class SongPolicy
 * @package App\Policies
 *
 * Questa classe contiene le verifiche sulle operazioni sul model Song.
 *
 * - delete
 */
class SongPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can delete a song
     *
     * @param User $user
     * @param Song $song
     * @return bool
     */
    public function delete(User $user,Song $song) {
        
        return $user->isSysAdmin();
    }
}
