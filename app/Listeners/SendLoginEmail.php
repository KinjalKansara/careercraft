<?php

namespace App\Listeners;

use App\Events\UserLoggedin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
Use App\Mail\UserLoginNotification;

class SendLoginEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserLoggedin  $event
     * @return void
     */
    public function handle(UserLoggedin $event)
    {
        Mail::to($event->user->email)->send(new UserLoginNotification($event->user));
    }
}
