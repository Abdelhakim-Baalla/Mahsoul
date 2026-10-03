@component('mail::layout')
# Rendez-vous « {{ $rendezVous->sujet }} » enregistré

Bonjour,

Votre demande de rendez-vous est bien enregistrée. L'expert va l'examiner et vous recevrez un rappel 24h avant.

## Détails

**Sujet :** {{ $rendezVous->sujet }}
**Date souhaitée :** {{ $rendezVous->date_reserver }}
**Adresse :** {{ $rendezVous->adresse }}
**Total :** {{ $rendezVous->total }} DH

---

@component('mail::button', ['url' => route('profile.consultations'), 'color' => 'green'])
Voir mes consultations
@endcomponent

@component('mail::footer')
© {{ date('Y') }} Mahsoul. Tous droits réservés.
@endcomponent