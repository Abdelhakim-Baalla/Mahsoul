@component('mail::layout')
# Paiement reçu pour votre commande #{{ $order->id }}

Bonjour {{ $order->client->prenom }},

Nous avons bien reçu votre paiement pour la commande **#{{ $order->id }}**.

## Détails du paiement

**Montant :** {{ number_format($amount, 2, ',', ' ') }} DH
**Date :** {{ now()->format('d/m/Y à H:i') }}
**Commande :** #{{ $order->id }}
**Méthode :** {{ $order->methode_paiement }}
**Référence :** {{ $order->reference_paiement }}

---

Votre commande va maintenant être traitée et expédiée dans les meilleurs délais.

@component('mail::button', ['url' => route('client.orders.show', $order->id), 'color' => 'green'])
Suivre ma commande
@endcomponent

@component('mail::footer')
© {{ date('Y') }} Mahsoul. Tous droits réservés.
@endcomponent