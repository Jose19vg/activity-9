<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use App\Notifications\LoginAlertEmail;

class SendLoginAlertEmail
{
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {
        $event->user->notify(new LoginAlertEmail());
    }
}
