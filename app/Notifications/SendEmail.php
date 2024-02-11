<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Str;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendEmail extends Notification
{
    use Queueable;
    protected $data;
    /**
     * Create a new notification instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
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
                   /*  ->subject("Novo orçamento solicitado de {$this->data['first-name']} {$this->data['last-name']}")
                    ->greeting("Novo orçamento solicitado de {$this->data['first-name']} {$this->data['last-name']}")
                    ->line('- Informação pessoal')
                    ->line('Primeiro Nome: ' . $this->data['first-name'])
                    ->line('Sobrenome: ' . $this->data['last-name'])
                    ->line('Email: ' . $this->data['email'])
                    ->line('Phone Number: ' . $this->data['phone-number'])
                    ->line('- Informação da Empresa')
                    ->line('Nome: ' . $this->data['company-name'])
                    ->line('Anos Ativo: ' . $this->data['company-year'])
                    ->line('Descrição da empresa: ' . $this->data['company-description'])
                    ->line('- Estratégia')
                    ->line('Por que você está criando esse site? ' . $this->data['strategy-quest1'])
                    ->line('O que você oferece ao seu público? ' . $this->data['strategy-quest2'])
                    ->line('Quem é seu público-alvo? ' . $this->data['strategy-quest3'])
                    ->line('Quantas páginas deve ter? (estimativa) ' . $this->data['strategy-quest4'])
                    ->line('O que você quer que seus usuários façam em seu site? ' . $this->data['strategy-quest5'])
                    ->action('Ir para Neohubble', url('/')); */
                    ->subject("Novo orçamento solicitado de {$this->data['first-name']} {$this->data['last-name']}")
                    ->greeting("Olá,")
                    ->line("Você recebeu um novo pedido de orçamento:")
                    ->view('emails.new-simulator', ['data' => $this->data]);
                   /*  ->line("Obrigado pela sua atenção.")
                    ->salutation('Atenciosamente, Neohubble'); */
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
