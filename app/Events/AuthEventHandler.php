<?php

namespace App\Events;

use App\Models\History;
use App\Models\User;
use Illuminate\Support\Carbon;

class AuthEventHandler
{

    public function handleUserLogin($events)
    {
        $user = $events->user;
        History::create([
            'id_user' => $user->id,
            'connected_at' => Carbon::now()
        ]);
    }

    public function handleUserLogout($events)
    {
        $user = $events->user;
        $last = History::where('id_user', $user->id)->orderBy('connected_at', 'asc')->first();
        $last->disconnected_at = Carbon::now();
        $last->save();
    }

    public function subscribe($events)
    {
        $events->listen(
            'Illuminate\Auth\Events\Login',
            [AuthEventHandler::class, 'handleUserLogin']
        );

        $events->listen(
            'Illuminate\Auth\Events\Logout',
            [AuthEventHandler::class, 'handleUserLogout']
        );
    }
}
