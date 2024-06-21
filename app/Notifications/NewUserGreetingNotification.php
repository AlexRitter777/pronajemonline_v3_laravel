<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserGreetingNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(__('notifications.new_user_greeting.subject'))
            ->greeting(__('notifications.new_user_greeting.greeting', ['name' => $notifiable->name]))
            ->line(__('notifications.new_user_greeting.line_1'))
            ->line(__('notifications.new_user_greeting.line_2'))
            ->line(__('notifications.new_user_greeting.line_3'))
            ->action(__('notifications.new_user_greeting.action'), url('/'))
            ->line(__('notifications.new_user_greeting.line_4'))
            ->salutation(__('notifications.new_user_greeting.regards') . " \n\r " . config('app.name'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
