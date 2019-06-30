<?php

namespace App\Policies;

use App\User;
use App\Lab;
use Illuminate\Auth\Access\HandlesAuthorization;

class LabPolicy
{

    use HandlesAuthorization;

    public function view(User $user, Lab $lab)
    {
        if ($user->can('view labs')) {
            return true;
        }
        if ($user->can('view own labs')) {
            return $user->id == $lab->user_id;
        }
        return false;
    }

    public function create(User $user)
    {
        return $user->can('create labs');
    }

    public function update(User $user, Lab $lab)
    {
        if ($user->can('edit labs')) {
            return true;
        }
        if ($user->can('edit own labs')) {
            return $user->id == $lab->user_id;
        }
        return false;
    }

    public function delete(User $user, Lab $lab)
    {
        if ($user->can('delete labs')) {
            return true;
        }
        if ($user->can('delete own labs')) {
            return $user->id == $lab->user_id;
        }
        return false;
    }

}
