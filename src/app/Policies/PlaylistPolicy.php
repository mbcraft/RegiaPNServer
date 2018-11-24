<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;
use App\Models\Playlist;

/**
 * Class PlaylistPolicy
 * @package App\Policies
 *
 * Questa classe contiene le autorizzazioni sul model Playlist
 */
class PlaylistPolicy
{
    
    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can edit the playlist
     *
     * @param User $user
     * @param Playlist $playlist
     */
    public function manage(User $user,Playlist $playlist) {
        $player = $playlist->player;
        if ($player->playlists_dj_id==$user->id) return true;
        if ($player->playlists_dj_id==null && $user->isPlaylistEditor()) return true;
        return false;
    }
}
