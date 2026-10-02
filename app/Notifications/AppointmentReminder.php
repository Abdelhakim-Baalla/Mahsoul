<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentReminder extends Notification implements ShouldQueue
{
    use Queueable;

    public $appointment;
    public $hoursBefore;

    /**
     * Create a new notification instance.
     */
    public function __construct($appointment, $hoursBefore = 24)
    {
        $this->appointment = $appointment;
        $this->hoursBefore = $hoursBefore;
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
        $appointment = $this->appointment;
        $expert = $appointment->expert;
        $client = $appointment->client;

        return (new MailMessage)
            ->subject("Rappel : Rendez-vous dans {$this->hoursBefore}h - Mahsoul")
            ->markdown('emails.appointment-reminder', [
                'appointment' => $appointment,
                'expert' => $expert,
                'client' => $client,
                'hoursBefore' => $this->hoursBefore,
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
            'appointment_id' => $this->appointment->id,
            'type' => 'appointment_reminder',
            'hours_before' => $this->hoursBefore,
            'title' => 'Rappel de rendez-vous',
            'message' => "Votre rendez-vous avec " . ($this->appointment->expert ? $this->appointment->expert->prenom . ' ' . $this->appointment->expert->nom : 'l\'expert') . " est dans {$this->hoursBefore}h",
        ];
    }
}