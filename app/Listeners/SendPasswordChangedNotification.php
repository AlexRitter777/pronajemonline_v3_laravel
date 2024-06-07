<?php

namespace App\Listeners;

use App\Mail\PasswordResetConfirmationEmail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Mail;

class SendPasswordChangedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PasswordReset $event): void
    {

        $user = $event->user;

        Mail::to($user)
            ->send(new PasswordResetConfirmationEmail());

    }


}
