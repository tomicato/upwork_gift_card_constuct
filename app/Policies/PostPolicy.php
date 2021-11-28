<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, Post $post)
    {
        //
    }


    public function create(User $user)
    {
        $roles = $user->roles()->pluck('name')->toArray();
        return in_array('Admin', $roles);
    }


    public function update(User $user, Post $post)
    {
        $roles = $user->roles()->pluck('name')->toArray();
        return $user->hasAnyRoles(['Admin', 'Manager']) || $post->user_id == auth()->id();
    }


    public function delete(User $user, Post $post)
    {
        $roles = $user->roles()->pluck('name')->toArray();
        return in_array('Admin', $roles);
    }


    public function restore(User $user, Post $post)
    {
        //
    }


    public function forceDelete(User $user, Post $post)
    {
        //
    }
}
