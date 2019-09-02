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
    public function isAdmin()
    {
        return auth()->user()->isAdmin();
    }
    public function isAdvisor()
    {
        return auth()->user()->isAdvisor();
    }
    public function isNormal()
    {
        return auth()->user()->isNormal();
    }
}
