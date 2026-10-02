@component('mail::layout')
# Rappel : Rendez-vous dans {{ $hoursBefore }}h

Bonjour {{ $client->prenom }},

Ceci est un rappel pour votre rendez-vous prévu **dans {{$hoursBefore}} heures** avec **{{ $expert->prenom }} {{ $expert->nom }}**.

## Détails du rendez-vous

**Sujet :** {{ $appointment->sujet }}
**Date :** {{ $appointment->date_reserver->format('d/m/Y à H:i') }}
**Expert :** {{ $expert->prenom }} {{ $expert->nom }} ({{ $expert->type === 'veterinaire' ? 'Vétérinaire' : 'Expert agricole' }})
**Lieu :** {{ $appointment->adresse }}
**Téléphone :** {{ $appointment->telephone }}

@if($appointment->description)
**Description :** {{ $appointment->description }}
@endif

---

@if($expert->prix_deplacement && $expert->prix_deplacement > 0)
**Frais de déplacement :** {{ number_format($expert->prix_deplacement, 0, ',', ' ') }} DH
@endif

---

**Besoin de modifier ou annuler ?**
Connectez-vous à votre espace Mahsoul pour gérer ce rendez-vous.

Cordialement,
L'équipe Mahsoul

@component('mail::button', ['url' => route('client.consultations.index'), 'color' => 'green'])
Voir mes rendez-vous
@endcomponent

@component('mail::footer')
© {{ date('Y') }} Mahsoul. Tous droits réservés.
@endcomponent