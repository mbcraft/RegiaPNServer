<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;
use App\Models\Player;

/**
 * Class PlayerPolicy
 * @package App\Policies
 *
 * Questa classe contiene le autorizzazioni sul model Player
 */
class PlayerPolicy
{
    
    public function before(User $user, $ability) {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can edit, show or delete a player.
     *
     * @param User $user
     * @param Player $player
     */
    public function manage(User $user,Player $player) {
        $cliente = $player->cliente;

        if ($user->id==$cliente->owner_id && $user->isCustomerManager()) return true;
        if ($user->id==$cliente->manager_id && $user->isCustomerManager()) return true;
        return false;
    }

    /**
     * Called to check if an user can list the playlists of this player.
     *
     * @param User $user
     * @param Player $player
     * @return bool
     */
    public function indexPlaylists(User $user,Player $player) {
        if ($player->playlists_dj_id==$user->id) return true;
        if ($player->playlists_dj_id==null && $user->isPlaylistEditor()) return true;
        return false;
    }

    /**
     * Called to check if a user can create a the playlist for this player.
     *
     * @param User $user
     * @param Player $player
     * @return bool
     */
    public function createPlaylist(User $user,Player $player) {
        if ($player->playlists_dj_id==$user->id) return true;
        if ($player->playlists_dj_id==null && $user->isPlaylistEditor()) return true;
        return false;
    }
}
