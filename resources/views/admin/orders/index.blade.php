@extends('layouts.admin')

@section('title', 'Gestion des commandes - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">Gestion des commandes</h1>
    
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">1,248</h5>
                            <div class="small">Commandes totales</div>
                        </div>
                        <div>
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">42</h5>
                            <div class="small">En attente</div>
                        </div>
                        <div>
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">1,156</h5>
                            <div class="small">Livrées</div>
                        </div>
                        <div>
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">24</h5>
                            <div class="small">Annulées</div>
                        </div>
                        <div>
                            <i class="fas fa-times-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-table me-1"></i>
            Liste des commandes
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <select class="form-select" id="filterStatus">
                                <option value="">Tous les statuts</option>
                                <option value="pending">En attente</option>
                                <option value="processing">En cours</option>
                                <option value="shipped">Expédiée</option>
                                <option value="delivered">Livrée</option>
                                <option value="cancelled">Annulée</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" id="filterDate" placeholder="Date">
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rechercher..." id="searchOrder">
                                <button class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="fas fa-file-export me-1"></i> Exporter
                        </button>
                        <button type="button" class="btn btn-outline-primary">
                            <i class="fas fa-print me-1"></i> Imprimer
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Produits</th>
                            <th>Total</th>
                            <th>Statut</th>
                            <th>Paiement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#MH-2023-1458</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/36" class="rounded-circle me-2" alt="Avatar">
                                    <div>
                                        <div class="fw-bold">Ahmed Benani</div>
                                        <div class="small text-muted">ahmed.b@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>15 avril 2023</td>
                            <td>5 articles</td>
                            <td>1,250 DH</td>
                            <td><span class="badge bg-success">Livrée</span></td>
                            <td><span class="badge bg-info">Payée</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.orders.show', 1) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i> Imprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i> Facture</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i> Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MH-2023-1457</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/36" class="rounded-circle me-2" alt="Avatar">
                                    <div>
                                        <div class="fw-bold">Fatima Zahra</div>
                                        <div class="small text-muted">fatima.z@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>15 avril 2023</td>
                            <td>3 articles</td>
                            <td>780 DH</td>
                            <td><span class="badge bg-warning text-dark">En cours</span></td>
                            <td><span class="badge bg-info">Payée</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.orders.show', 2) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i> Imprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i> Facture</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i> Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MH-2023-1456</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/36" class="rounded-circle me-2" alt="Avatar">
                                    <div>
                                        <div class="fw-bold">Mohammed Alaoui</div>
                                        <div class="small text-muted">m.alaoui@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>14 avril 2023</td>
                            <td>2 articles</td>
                            <td>450 DH</td>
                            <td><span class="badge bg-info">Expédiée</span></td>
                            <td><span class="badge bg-info">Payée</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.orders.show', 3) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i> Imprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i> Facture</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i> Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MH-2023-1455</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/36" class="rounded-circle me-2" alt="Avatar">
                                    <div>
                                        <div class="fw-bold">Karim Idrissi</div>
                                        <div class="small text-muted">k.idrissi@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>14 avril 2023</td>
                            <td>4 articles</td>
                            <td>920 DH</td>
                            <td><span class="badge bg-warning text-dark">En attente</span></td>
                            <td><span class="badge bg-secondary">En attente</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.orders.show', 4) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i> Imprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i> Facture</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i> Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>#MH-2023-1454</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/36" class="rounded-circle me-2" alt="Avatar">
                                    <div>
                                        <div class="fw-bold">Samira Tazi</div>
                                        <div class="small text-muted">s.tazi@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>13 avril 2023</td>
                            <td>1 article</td>
                            <td>350 DH</td>
                            <td><span class="badge bg-danger">Annulée</span></td>
                            <td><span class="badge bg-danger">Remboursée</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.orders.show', 5) }}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-print me-2"></i> Imprimer</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2"></i> Facture</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-trash me-2"></i> Supprimer</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Précédent</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Suivant</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
