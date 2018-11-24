<?php

namespace App\Policies\Auth;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;

/**
 * Class UserPolicy
 * @package App\Policies
 *
 * Questa classe contiene le autorizzazioni sul model User
 */
class UserPolicy
{

    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can edit the roles of a target user
     *
     * @param User $user
     * @param User $target
     * @return bool
     */
    public function editRoles(User $user,User $target) {
        if ($user->isSysAdmin()) return true;
        if ($user->isUserManager() && !$target->isSysAdmin()) return true;
    }

    /**
     * Called to check if an user can edit the sys admin role when editing roles
     *
     * @param User $user
     * @return bool
     */
    public function canEditSysAdminRole(User $user) {
        return $user->isSysAdmin();
    }

    /**
     * Called to check if a user can index all the app users.
     *
     * @param User $user
     * @return bool
     */
    public function indexOrCreateUsers(User $user) {
        return $user->isUserManager();
    }

    /**
     * Called to check if an user can edit a target user.
     *
     * @param User $user
     * @param User $target
     * @return bool
     */
    public function editUser(User $user,User $target) {
        if ($user->isSysAdmin()) return true;
        if ($user->isUserManager() && !$target->isSysAdmin() && !$target->isUserManager()) return true;
        return false;
    }

    /**
     * Called to check if a user can delete or restore another user
     *
     * @param User $user
     * @param User $target
     * @return bool
     */
    public function deleteOrRestoreUser(User $user,User $target) {
        return $user->isSysAdmin() && $user->id!=$target->id;
    }

    /**
     * Called to check if an user can show another one
     *
     * @param User $user
     * @param User $target
     * @return bool
     */
    public function showUser(User $user,User $target) {
        return $user->isSysAdmin() || $user->isUserManager();
    }

    /**
     * Called to check if an user can list the system notifications
     *
     * @param User $user
     * @return bool
     */
    public function indexSystemNotifications(User $user) {
        return $user->isSysAdmin();
    }

    /**
     * Called to check if an user can show the list of the available players.
     *
     * @param User $user
     * @return bool
     */
    public function indexPlayers(User $user) {
        if ($user->isCustomerManager() || $user->isPlaylistEditor()) return true;
        return false;
    }

    /**
     * Called to check if an user can show the list of the available playlists.
     *
     * @param User $user
     * @return bool
     */
    public function indexPlaylists(User $user) {
        if ($user->isCustomerManager() || $user->isPlaylistEditor()) return true;
        return false;
    }

    /**
     * Called to check if an user can execute maintenance operations.
     *
     * @param User $user
     * @return bool
     */
    public function executeMaintenanceOperations(User $user) {
        \Log::debug("Check if can executeMaintenanceOperations from policy ...");
        return $user->isSysAdmin();
    }

    /**
     * Called to check if an user can list system configurations.
     *
     * @param User $user
     * @return bool
     */
    public function indexConfigs(User $user) {
        return $user->isSysAdmin();
    }

    /**
     * Called to check if an user can index the customers.
     *
     * @param User $user
     * @return bool
     */
    public function indexOrCreateCustomers(User $user) {
        if ($user->isCustomerManager() || $user->isUserManager()) return true;
        return false;
    }

}
