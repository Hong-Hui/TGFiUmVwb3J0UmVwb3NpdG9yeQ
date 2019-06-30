<?php

namespace App\Policies;

use App\User;
use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{

    use HandlesAuthorization;

    public function view(User $user, Course $course)
    {
        if ($user->can('view courses')) {
            return true;
        }
        if ($user->can('view own courses')) {
            return $user->id == $course->user_id;
        }
        return false;
    }

    public function create(User $user)
    {
        return $user->can('create courses');
    }

    public function update(User $user, Course $course)
    {
        if ($user->can('edit courses')) {
            return true;
        }
        if ($user->can('edit own courses')) {
            return $user->id == $course->user_id;
        }
        return false;
    }

    public function delete(User $user, Course $course)
    {
        if ($user->can('delete courses')) {
            return true;
        }
        if ($user->can('delete own courses')) {
            return $user->id == $course->user_id;
        }
        return false;
    }

}
