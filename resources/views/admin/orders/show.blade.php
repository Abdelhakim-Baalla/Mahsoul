@extends('layouts.admin')

@section('title', 'Détail de la commande - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mt-4">Détail de la commande #MH-2023-1458</h1>
        <div>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-outline-primary">
                <i class="fas fa-arrow-left me-1"></i> Retour à la liste
            </a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-8">
            <!-- Informations de la commande -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-info-circle me-1"></i>
                        Informations de la commande
                    </div>
                    <div class="badge bg-light text-primary">Livrée</div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="card-title">Détails de la commande</h5>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-0">Numéro de commande:</th>
                                        <td>#MH-2023-1458</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Date de commande:</th>
                                        <td>15 avril 2023 à 14:30</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Statut:</th>
                                        <td>
                                            <select class="form-select form-select-sm w-auto">
                                                <option>En attente</option>
                                                <option>En cours</option>
                                                <option>Expédiée</option>
                                                <option selected>Livrée</option>
                                                <option>Annulée</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Paiement:</th>
                                        <td><span class="badge bg-success">Payée</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Méthode de paiement:</th>
                                        <td>Carte bancaire</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">Informations de livraison</h5>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="ps-0">Date d'expédition:</th>
                                        <td>17 avril 2023</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Date de livraison:</th>
                                        <td>19 avril 2023</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Transporteur:</th>
                                        <td>Amana Express</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="ps-0">Numéro de suivi:</th>
                                        <td>AE-987654321</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Adresse de facturation</h5>
                            <address>
                                <strong>Ahmed Benani</strong><br>
                                123 Rue Hassan II<br>
                                Quartier Maârif<br>
                                Casablanca, 20100<br>
                                <abbr title="Téléphone">Tél:</abbr> +212 6 12 34 56 78<br>
                                <abbr title="Email">Email:</abbr> ahmed.b@example.com
                            </address>
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">Adresse de livraison</h5>
                            <address>
                                <strong>Ahmed Benani</strong><br>
                                123 Rue Hassan II<br>
                                Quartier Maârif<br>
                                Casablanca, 20100<br>
                                <abbr title="Téléphone">Tél:</abbr> +212 6 12 34 56 78<br>
                                <abbr title="Email">Email:</abbr> ahmed.b@example.com
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Articles de la commande -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-shopping-basket me-1"></i>
                    Articles de la commande
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix unitaire</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" class="me-3" alt="Produit">
                                            <div>
                                                <div class="fw-bold">Huile d'olive extra vierge</div>
                                                <div class="small text-muted">1L - Pressée à froid</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>120 DH</td>
                                    <td>2</td>
                                    <td>240 DH</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" class="me-3" alt="Produit">
                                            <div>
                                                <div class="fw-bold">Miel d'eucalyptus</div>
                                                <div class="small text-muted">500g - Bio</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>180 DH</td>
                                    <td>1</td>
                                    <td>180 DH</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" class="me-3" alt="Produit">
                                            <div>
                                                <div class="fw-bold">Oranges fraîches</div>
                                                <div class="small text-muted">5kg - Bio</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>25 DH</td>
                                    <td>5</td>
                                    <td>125 DH</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" class="me-3" alt="Produit">
                                            <div>
                                                <div class="fw-bold">Fromage de chèvre</div>
                                                <div class="small text-muted">250g - Artisanal</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>95 DH</td>
                                    <td>2</td>
                                    <td>190 DH</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/50" class="me-3" alt="Produit">
                                            <div>
                                                <div class="fw-bold">Safran pur</div>
                                                <div class="small text-muted">5g - Premium</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>450 DH</td>
                                    <td>1</td>
                                    <td>450 DH</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Sous-total:</td>
                                    <td>1,185 DH</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Frais de livraison:</td>
                                    <td>65 DH</td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-end fw-bold">Total:</td>
                                    <td class="fw-bold fs-5">1,250 DH</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            
            <!-- Historique de la commande -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-history me-1"></i>
                    Historique de la commande
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-item-marker">
                                <div class="timeline-item-marker-text">15 Avr</div>
                                <div class="timeline-item-marker-indicator bg-success"></div>
                            </div>
                            <div class="timeline-item-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">Commande passée</span>
                                        <div class="small text-muted">15 avril 2023 à 14:30</div>
                                    </div>
                                    <div class="badge bg-success">Terminé</div>
                                </div>
                                <p class="mt-2 mb-0">La commande a été passée par le client et confirmée.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-item-marker">
                                <div class="timeline-item-marker-text">15 Avr</div>
                                <div class="timeline-item-marker-indicator bg-success"></div>
                            </div>
                            <div class="timeline-item-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">Paiement reçu</span>
                                        <div class="small text-muted">15 avril 2023 à 14:35</div>
                                    </div>
                                    <div class="badge bg-success">Terminé</div>
                                </div>
                                <p class="mt-2 mb-0">Paiement par carte bancaire confirmé.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-item-marker">
                                <div class="timeline-item-marker-text">16 Avr</div>
                                <div class="timeline-item-marker-indicator bg-success"></div>
                            </div>
                            <div class="timeline-item-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">Commande préparée</span>
                                        <div class="small text-muted">16 avril 2023 à 10:15</div>
                                    </div>
                                    <div class="badge bg-success">Terminé</div>
                                </div>
                                <p class="mt-2 mb-0">La commande a été préparée et emballée.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-item-marker">
                                <div class="timeline-item-marker-text">17 Avr</div>
                                <div class="timeline-item-marker-indicator bg-success"></div>
                            </div>
                            <div class="timeline-item-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">Commande expédiée</span>
                                        <div class="small text-muted">17 avril 2023 à 09:30</div>
                                    </div>
                                    <div class="badge bg-success">Terminé</div>
                                </div>
                                <p class="mt-2 mb-0">La commande a été remise au transporteur Amana Express (Numéro de suivi: AE-987654321).</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-item-marker">
                                <div class="timeline-item-marker-text">19 Avr</div>
                                <div class="timeline-item-marker-indicator bg-success"></div>
                            </div>
                            <div class="timeline-item-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="fw-bold">Commande livrée</span>
                                        <div class="small text-muted">19 avril 2023 à 14:45</div>
                                    </div>
                                    <div class="badge bg-success">Terminé</div>
                                </div>
                                <p class="mt-2 mb-0">La commande a été livrée au client.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-4">
            <!-- Informations client -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-user me-1"></i>
                    Informations client
                </div>
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="https://via.placeholder.com/100" class="rounded-circle mb-2" alt="Avatar">
                        <h5 class="mb-0">Ahmed Benani</h5>
                        <div class="small text-muted">Client depuis janvier 2023</div>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <div class="small text-muted mb-1">Email</div>
                        <div>ahmed.b@example.com</div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-muted mb-1">Téléphone</div>
                        <div>+212 6 12 34 56 78</div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-muted mb-1">Commandes totales</div>
                        <div>5 commandes</div>
                    </div>
                    <div class="mb-3">
                        <div class="small text-muted mb-1">Montant total dépensé</div>
                        <div>4,850 DH</div>
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <a href="#" class="btn btn-primary">
                            <i class="fas fa-user me-1"></i> Voir le profil complet
                        </a>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="fas fa-envelope me-1"></i> Envoyer un message
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Actions -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-cog me-1"></i>
                    Actions
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-success">
                            <i class="fas fa-print me-1"></i> Imprimer la commande
                        </button>
                        <button type="button" class="btn btn-info text-white">
                            <i class="fas fa-file-pdf me-1"></i> Générer la facture
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fas fa-edit me-1"></i> Modifier la commande
                        </button>
                        <button type="button" class="btn btn-danger">
                            <i class="fas fa-trash me-1"></i> Supprimer la commande
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Notes -->
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <i class="fas fa-sticky-note me-1"></i>
                    Notes
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="orderNotes" class="form-label">Notes administratives</label>
                        <textarea class="form-control" id="orderNotes" rows="4" placeholder="Ajouter des notes privées concernant cette commande...">Client fidèle, livraison prioritaire.</textarea>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Enregistrer les notes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
