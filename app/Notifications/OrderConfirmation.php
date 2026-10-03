<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderConfirmation extends Notification implements ShouldQueue
{
    use Queueable;

    public $commande;

    public function __construct($commande)
    {
        $this->commande = $commande;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Commande #{$this->commande->id} confirmée - Mahsoul")
            ->markdown('emails.order-confirmation', [
                'commande' => $this->commande,
            ]);
    }

    public function toArray(object $notifiable): array
    {
        return [
            'commande_id' => $this->commande->id,
            'type' => 'order_confirmation',
            'title' => 'Commande confirmée',
            'message' => "Votre commande #{$this->commande->id} (" . number_format($this->commande->total, 0, ',', ' ') . ' DH) est confirmée.',
        ];
    }
}
