<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //第一引数は必ずログインユーザなので注意！
    public function update(User $auth_user, User $edited_user)
    {
        return $edited_user == $auth_user;
    }
}
