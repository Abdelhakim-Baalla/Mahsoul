@component('mail::layout')
# Commande #{{ $order->id }} : Mise à jour du statut

Bonjour {{ $order->client->prenom }},

Le statut de votre commande **#{{ $order->id }}** a été mis à jour.

## Changement de statut

**Avant :** {{ $statusLabels[$oldStatus] ?? $oldStatus }}
**Maintenant :** {{ $statusLabels[$newStatus] ?? $newStatus }}

---

## Détails de la commande

**Numéro :** #{{ $order->id }}
**Date :** {{ $order->created_at->format('d/m/Y à H:i') }}
**Total :** {{ number_format($order->total, 2, ',', ' ') }} DH
**Adresse de livraison :** {{ $order->adresse_livraison }}
**Méthode de paiement :** {{ $order->methode_paiement }}

---

@if($newStatus === 'shipped')
Votre commande a été expédiée ! Vous recevrez prochainement un numéro de suivi.
@elseif($newStatus === 'delivered')
Votre commande a été livrée. Nous espérons que vous serez satisfait de vos produits !
@elseif($newStatus === 'cancelled')
Votre commande a été annulée. Si vous avez des questions, n'hésitez pas à nous contacter.
@endif

---

@component('mail::button', ['url' => route('client.orders.show', $order->id), 'color' => 'green'])
Voir ma commande
@endcomponent

@component('mail::footer')
© {{ date('Y') }} Mahsoul. Tous droits réservés.
@endcomponent