@component('mail::layout')
# Nouveau message de {{ $sender->prenom }} {{ $sender->nom }}

Bonjour,

Vous avez reçu un nouveau message de **{{ $sender->prenom }} {{ $sender->nom }}** ({{ $sender->email }}).

---

## Message

{{ $message->contenu }}

---

@component('mail::button', ['url' => route('profile.show') . '#messages', 'color' => 'green'])
Répondre au message
@endcomponent

@component('mail::footer')
© {{ date('Y') }} Mahsoul. Tous droits réservés.
@endcomponent