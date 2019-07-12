<?php

namespace App\Policies;

use App\User;
use App\Assignment;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssignmentPolicy
{

    use HandlesAuthorization;

    public function view(User $user, Assignment $assignment)
    {
        if ($assignment->visibility == 'public') {
            return true;
        }
        if ($user->can('view assignments')) {
            return true;
        }
        if ($user->can('view own assignments')) {
            return $user->id == $assignment->user_id;
        }
        return false;
    }

    public function create(User $user)
    {
        $lab = request()->lab;

        if ($user->can('create assignments')) {
            if ($lab->hasExpired()) {
                // if ($user->can('override deadlines')) {  // not implemented.
                //     return true;
                // }
                return false;
            }
            return true;
        }
        return false;
    }

    public function update(User $user, Assignment $assignment)
    {
        if ($user->can('edit assignments')) {
            return true;
        }
        if ($assignment->mark == null) {
            return true;
        }
        if ($user->can('edit own assignments')) {
            if (!$assignment->lab->hasExpired()) {
                return true;
            }
            return $user->id == $assignment->user_id;
        }
        return false;
    }

    public function delete(User $user, Assignment $assignment)
    {
        if ($user->can('delete assignments')) {
            return true;
        }
        if ($assignment->status == 'pending') {
            if ($user->can('delete own assignments')) {
                return $user->id == $assignment->user_id;
            }
        }
        return false;
    }
}
