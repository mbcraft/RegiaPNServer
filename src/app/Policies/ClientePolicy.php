<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\Models\Auth\User;
use App\Models\Cliente;
/**
 *
 * Class ClientePolicy
 * @package App\Policies
 *
 * Questa classe contiene le verifiche sul model Cliente
 */
class ClientePolicy
{
    
    public function before(User $user, $ability) {
        if ($user->isSysAdmin()) {
            return true;
        }
    }

    /**
     * Called to check if an user can manage a customer.
     *
     * @param User $user
     * @param Cliente $cliente
     */
    public function manage(User $user,Cliente $cliente) {
        if ($user->isCustomerManager()) {
            if ($cliente->owner_id==$user->id) return true;
            if ($cliente->manager_id==$user->id) return true;
        }
        return false;
    }

    /**
     * Called to check if an user create a players for this customer.
     *
     * @param User $user
     * @param Cliente $cliente
     */
    public function createCustomerPlayers(User $user,Cliente $cliente) {
        if ($user->isCustomerManager() || $user->isPlaylistEditor()) {
            if ($cliente->owner_id==$user->id) return true;
            if ($cliente->manager_id==$user->id) return true;
            if ($cliente->manager_id==null) return true;
        }
        return false;
    }

}
