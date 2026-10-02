<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentReceived extends Notification
{
    use Queueable;

    public $order;
    public $amount;

    /**
     * Create a new notification instance.
     */
    public function __construct($order, $amount)
    {
        $this->order = $order;
        $this->amount = $amount;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Paiement reçu pour votre commande #{$this->order->id} - Mahsoul")
            ->markdown('emails.payment-received', [
                'order' => $this->order,
                'amount' => $this->amount,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'order_id' => $this->order->id,
            'type' => 'payment_received',
            'amount' => $this->amount,
            'title' => 'Paiement reçu',
            'message' => "Paiement de " . number_format($this->amount, 2, ',', ' ') . " DH reçu pour votre commande #{$this->order->id}",
        ];
    }
}