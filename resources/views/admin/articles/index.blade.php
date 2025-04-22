@extends('layouts.admin')

@section('title', 'Gestion des articles - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mt-4">Gestion des articles</h1>
        <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Ajouter un article
        </a>
    </div>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-newspaper me-1"></i>
            Liste des articles
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <select class="form-select" id="filterCategory">
                                <option value="">Toutes les catégories</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="elevage">Élevage</option>
                                <option value="irrigation">Irrigation</option>
                                <option value="maladies">Maladies des plantes</option>
                                <option value="techniques">Techniques agricoles</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="filterStatus">
                                <option value="">Tous les statuts</option>
                                <option value="published">Publié</option>
                                <option value="draft">Brouillon</option>
                                <option value="pending">En attente</option>
                                <option value="archived">Archivé</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Rechercher..." id="searchArticle">
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
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Catégorie</th>
                            <th>Tags</th>
                            <th>Date de publication</th>
                            <th>Statut</th>
                            <th>Vues</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x30" class="me-2" alt="Miniature">
                                    <div>Techniques d'irrigation modernes pour économiser l'eau</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="Avatar">
                                    <div>Dr. Mohammed Alami</div>
                                </div>
                            </td>
                            <td>Irrigation</td>
                            <td>
                                <span class="badge bg-info text-white me-1">Irrigation</span>
                                <span class="badge bg-info text-white">Économie d'eau</span>
                            </td>
                            <td>15 avril 2023</td>
                            <td><span class="badge bg-success">Publié</span></td>
                            <td>1,245</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', 1) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x30" class="me-2" alt="Miniature">
                                    <div>Lutte biologique contre les parasites communs</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="Avatar">
                                    <div>Dr. Fatima Zahra</div>
                                </div>
                            </td>
                            <td>Maladies des plantes</td>
                            <td>
                                <span class="badge bg-danger text-white me-1">Maladies</span>
                                <span class="badge bg-warning text-dark">Bio</span>
                            </td>
                            <td>12 avril 2023</td>
                            <td><span class="badge bg-success">Publié</span></td>
                            <td>987</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', 2) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x30" class="me-2" alt="Miniature">
                                    <div>Pratiques d'élevage durable pour petites exploitations</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="Avatar">
                                    <div>Karim Idrissi</div>
                                </div>
                            </td>
                            <td>Élevage</td>
                            <td>
                                <span class="badge bg-purple text-white me-1">Élevage</span>
                                <span class="badge bg-success text-white">Durable</span>
                            </td>
                            <td>10 avril 2023</td>
                            <td><span class="badge bg-success">Publié</span></td>
                            <td>756</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', 3) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x30" class="me-2" alt="Miniature">
                                    <div>Rotation des cultures : maximiser la fertilité des sols</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="Avatar">
                                    <div>Samira Tazi</div>
                                </div>
                            </td>
                            <td>Agriculture</td>
                            <td>
                                <span class="badge bg-success text-white">Agriculture</span>
                            </td>
                            <td>5 avril 2023</td>
                            <td><span class="badge bg-warning text-dark">Brouillon</span></td>
                            <td>0</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', 4) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/50x30" class="me-2" alt="Miniature">
                                    <div>Guide complet du compostage pour agriculteurs</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://via.placeholder.com/32" class="rounded-circle me-2" alt="Avatar">
                                    <div>Hassan Benjelloun</div>
                                </div>
                            </td>
                            <td>Techniques agricoles</td>
                            <td>
                                <span class="badge bg-success text-white me-1">Techniques</span>
                                <span class="badge bg-brown text-white">Compost</span>
                            </td>
                            <td>1 avril 2023</td>
                            <td><span class="badge bg-secondary">En attente</span></td>
                            <td>0</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.articles.edit', 5) }}" class="btn btn-sm btn-outline-secondary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
