<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;

/**
 * Class ElemPlaylistPolicy
 * @package App\Policies
 *
 *
 */
class ElemPlaylistPolicy
{
    
    public function before(User $user, $ability) {
        if ($user->isAdmin()) {
            return true;
        }
    }
}
