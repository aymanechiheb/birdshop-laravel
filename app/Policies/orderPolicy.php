<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class orderPolicy
{

    public function view(User $user, Order $order): bool
    {
//ss
    }

}
