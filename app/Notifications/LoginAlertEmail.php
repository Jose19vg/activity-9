<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginAlertEmail extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Alerta de inicio de sesión 🚨')
            ->greeting('¡Hola ' . $notifiable->name . '!')
            ->line('Hemos detectado un nuevo inicio de sesión en tu cuenta.')
            ->line('Si no reconoces esta actividad, te recomendamos cambiar tu contraseña.')
            ->action('Ir al Dashboard', url('/dashboard'))
            ->line('¡Gracias por usar nuestra plataforma!');
    }
}

