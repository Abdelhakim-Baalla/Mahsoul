<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RendezVousConfirmation extends Notification implements ShouldQueue
{
    use Queueable;

    public $rendezVous;

    public function __construct($rendezVous)
    {
        $this->rendezVous = $rendezVous;
    }

    public function via(object $notifiable): array
    {
        return ['mail', 'database'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Rendez-vous « {$this->rendezVous->sujet} » enregistré - Mahsoul")
            ->markdown('emails.rendezvous-confirmation', [
                'rendezVous' => $this->rendezVous,
            ]);
    }

    public function toArray(object $notifiable): array
    {
        return [
            'rendez_vous_id' => $this->rendezVous->id,
            'type' => 'rendezvous_confirmation',
            'title' => 'Rendez-vous enregistré',
            'message' => "Votre demande « {$this->rendezVous->sujet} » du {$this->rendezVous->date_reserver} est enregistrée.",
        ];
    }
}
