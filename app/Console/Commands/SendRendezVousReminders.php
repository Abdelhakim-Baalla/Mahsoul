<?php

namespace App\Console\Commands;

use App\Models\RendezVous;
use App\Models\Utilisateur;
use App\Notifications\AppointmentReminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendRendezVousReminders extends Command
{
    protected $signature = 'rendezvous:remind {--hours=24 : Rappel X heures avant le rendez-vous}';
    protected $description = 'Envoie un rappel aux clients dont le rendez-vous approche';

    public function handle()
    {
        $hours = (int) $this->option('hours');
        $from = now()->addHours($hours - 1)->format('Y-m-d H:i:s');
        $to = now()->addHours($hours + 1)->format('Y-m-d H:i:s');

        $rdvs = RendezVous::where('rappel_envoye', false)
            ->whereIn('statut', ['pending', 'approved'])
            ->whereBetween('date_reserver', [$from, $to])
            ->get();

        $sent = 0;
        foreach ($rdvs as $rdv) {
            $client = Utilisateur::find($rdv->client);
            if (!$client) {
                continue;
            }
            try {
                $client->notify(new AppointmentReminder($rdv, $hours));
                $rdv->update(['rappel_envoye' => true]);
                $sent++;
            } catch (\Throwable $e) {
                Log::warning('Rappel RDV échoué', ['rdv' => $rdv->id, 'erreur' => $e->getMessage()]);
            }
        }

        $this->info("Rappels envoyés : $sent / " . $rdvs->count());
        return 0;
    }
}
