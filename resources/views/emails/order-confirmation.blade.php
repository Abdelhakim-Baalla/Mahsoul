@component('mail::layout')
# Commande #{{ $commande->id }} confirmée

Bonjour,

Merci pour votre commande sur Mahsoul ! Elle est bien enregistrée et sera traitée dans les meilleurs délais.

## Récapitulatif

**Commande :** #{{ $commande->id }}
**Date :** {{ $commande->created_at ? $commande->created_at->format('d/m/Y à H:i') : '' }}
**Total :** {{ number_format($commande->total, 2, ',', ' ') }} DH
**Livraison :** {{ $commande->adresse_livraison }}
**Paiement :** {{ $commande->methode_paiement }}

---

@component('mail::button', ['url' => route('orders.index'), 'color' => 'green'])
Suivre mes commandes
@endcomponent

@component('mail::footer')
© {{ date('Y') }} Mahsoul. Tous droits réservés.
@endcomponent