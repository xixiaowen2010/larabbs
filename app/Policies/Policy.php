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
	}
}
