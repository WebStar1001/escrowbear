<?php

namespace App\Notifications;

Use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TwoFactorCode extends Notification
{

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
//        return (new MailMessage)
//            ->line('Your two factor code is '.$notifiable->two_factor_code)
//            ->action('Verify Here', route('verify.index'))
//            ->line('The code will expire in 10 minutes')
//            ->line('If you have not tried to login, ignore this message.');
    }
}
