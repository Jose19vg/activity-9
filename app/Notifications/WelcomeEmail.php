<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmail extends Notification
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
            ->subject('¡Bienvenido a la App de Reciclaje! 🌿')
            ->greeting('¡Hola ' . $notifiable->name . '!')
            ->line('Gracias por registrarte en nuestra plataforma. ¡Estamos emocionados de tenerte a bordo!')
            ->line('Empieza a reciclar y gana recompensas por tu contribución al medio ambiente.')
            ->action('Ir al dashboard', url('/dashboard'))
            ->line('¡Gracias por ser parte del cambio!');
    }
}

