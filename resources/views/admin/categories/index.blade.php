@extends('layouts.admin')

@section('title', 'Gestion des catégories - Mahsoul Admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">Gestion des catégories</h1>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-folder me-1"></i>
                    Catégories de produits
                </div>
                <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                    <i class="fas fa-plus me-1"></i> Ajouter une catégorie
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher une catégorie..." id="searchCategory">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 text-end">
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
                            <th>Nom</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Nombre de produits</th>
                            <th>Statut</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Fruits</td>
                            <td>fruits</td>
                            <td>Tous types de fruits frais</td>
                            <td><a href="#" class="text-primary">24 produits</a></td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>10/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Légumes</td>
                            <td>legumes</td>
                            <td>Légumes frais de saison</td>
                            <td><a href="#" class="text-primary">36 produits</a></td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>10/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Céréales</td>
                            <td>cereales</td>
                            <td>Céréales et grains</td>
                            <td><a href="#" class="text-primary">18 produits</a></td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>12/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Produits laitiers</td>
                            <td>produits-laitiers</td>
                            <td>Lait, fromage et autres produits laitiers</td>
                            <td><a href="#" class="text-primary">15 produits</a></td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>15/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Miel et dérivés</td>
                            <td>miel-et-derives</td>
                            <td>Miel, propolis et autres produits apicoles</td>
                            <td><a href="#" class="text-primary">8 produits</a></td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>18/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Huiles</td>
                            <td>huiles</td>
                            <td>Huiles d'olive, d'argan et autres huiles</td>
                            <td><a href="#" class="text-primary">12 produits</a></td>
                            <td><span class="badge bg-warning text-dark">En révision</span></td>
                            <td>20/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Épices et herbes</td>
                            <td>epices-et-herbes</td>
                            <td>Épices, herbes aromatiques et condiments</td>
                            <td><a href="#" class="text-primary">20 produits</a></td>
                            <td><span class="badge bg-success">Actif</span></td>
                            <td>22/01/2023</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <a href="#" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-list"></i>
                                    </a>
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

<!-- Modal Ajouter Catégorie -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addCategoryModalLabel">Ajouter une catégorie</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Nom de la catégorie</label>
                        <input type="text" class="form-control" id="categoryName" required>
                    </div>
                    <div class="mb-3">
                        <label for="categorySlug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="categorySlug">
                        <small class="text-muted">Le slug sera généré automatiquement à partir du nom si laissé vide.</small>
                    </div>
                    <div class="mb-3">
                        <label for="categoryDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="categoryDescription" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="categoryImage" class="form-label">Image (optionnelle)</label>
                        <input type="file" class="form-control" id="categoryImage">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="categoryActive" checked>
                        <label class="form-check-label" for="categoryActive">Activer cette catégorie</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Modifier Catégorie -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editCategoryModalLabel">Modifier la catégorie</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="editCategoryName" class="form-label">Nom de la catégorie</label>
                        <input type="text" class="form-control" id="editCategoryName" value="Fruits" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCategorySlug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="editCategorySlug" value="fruits">
                    </div>
                    <div class="mb-3">
                        <label for="editCategoryDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editCategoryDescription" rows="3">Tous types de fruits frais</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="editCategoryImage" class="form-label">Image actuelle</label>
                        <div class="mb-2">
                            <img src="https://via.placeholder.com/150" alt="Image de catégorie" class="img-thumbnail" style="height: 100px;">
                        </div>
                        <label for="newCategoryImage" class="form-label">Nouvelle image (optionnelle)</label>
                        <input type="file" class="form-control" id="newCategoryImage">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="editCategoryActive" checked>
                        <label class="form-check-label" for="editCategoryActive">Catégorie active</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Enregistrer les modifications</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Supprimer Catégorie -->
<div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Confirmer la suppression</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer la catégorie <strong>Fruits</strong> ?</p>
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Attention : Cette catégorie contient <strong>24 produits</strong>. La suppression de cette catégorie affectera ces produits.
                </div>
                <div class="mb-3">
                    <label for="deleteAction" class="form-label">Que souhaitez-vous faire des produits associés ?</label>
                    <select class="form-select" id="deleteAction">
                        <option value="reassign">Réassigner à une autre catégorie</option>
                        <option value="delete">Supprimer les produits</option>
                    </select>
                </div>
                <div id="reassignCategory" class="mb-3">
                    <label for="newCategory" class="form-label">Nouvelle catégorie</label>
                    <select class="form-select" id="newCategory">
                        <option value="">Sélectionner une catégorie</option>
                        <option value="2">Légumes</option>
                        <option value="3">Céréales</option>
                        <option value="4">Produits laitiers</option>
                        <option value="5">Miel et dérivés</option>
                        <option value="6">Huiles</option>
                        <option value="7">Épices et herbes</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
        </div>
    </div>
</div>
@endsection
