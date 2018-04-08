<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Topic;

class Policy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
    public function update(User $user, Topic $topic)
    {
        return $topic->user_id == $user->id;
    }
    public function before($user, $ability)
	{
	    // if ($user->isSuperAdmin()) {
	    // 		return true;
	    // }
        // 如果用户拥有管理内容的权限的话，即授权通过
        if ($user->can('manage_contents')) {
            return true;
        }
	}
}
