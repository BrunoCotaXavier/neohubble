<?php

namespace App\Listeners;

use App\Events\SendEmail;
use App\Notifications\SendEmail as SendEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendEmailListener implements ShouldQueue
{
    use InteractsWithQueue;
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
    public function handle(SendEmail $event): void
    {
        // Obter os dados do array
        $data = $event->data;

        // Notificar usando a classe Notification
        Notification::route('mail', $data['email'])
            ->route('mail', 'suporte@neohubble.com')
            ->notify(new SendEmailNotification($data));
    }
}
