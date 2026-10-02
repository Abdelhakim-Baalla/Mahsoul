<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderStatusChanged extends Notification
{
    use Queueable;

    public $order;
    public $oldStatus;
    public $newStatus;

    /**
     * Create a new notification instance.
     */
    public function __construct($order, $oldStatus, $newStatus)
    {
        $this->order = $order;
        $this->oldStatus = $oldStatus;
        $this->newStatus = $newStatus;
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
        $order = $this->order;
        
        $statusLabels = [
            'pending' => 'En attente',
            'confirmed' => 'Confirmée',
            'processing' => 'En préparation',
            'shipped' => 'Expédiée',
            'delivered' => 'Livrée',
            'cancelled' => 'Annulée',
        ];

        return (new MailMessage)
            ->subject("Mise à jour de votre commande #{$this->order->id} - Mahsoul")
            ->markdown('emails.order-status-changed', [
                'order' => $order,
                'oldStatus' => $this->oldStatus,
                'newStatus' => $this->newStatus,
                'statusLabels' => $statusLabels,
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
            'type' => 'order_status_changed',
            'old_status' => $this->oldStatus,
            'new_status' => $this->newStatus,
            'title' => 'Mise à jour de commande',
            'message' => "Votre commande #{$this->order->id} est passée de " . ($statusLabels[$this->oldStatus] ?? $this->oldStatus) . " à " . ($statusLabels[$this->newStatus] ?? $this->newStatus),
        ];
    }
}