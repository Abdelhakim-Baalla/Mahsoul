<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Repositories\Interfaces\TagRepositoryInterface;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\CategorieRepositoryInterface;
use App\Repositories\Interfaces\CommandeRepositoryInterface;
use App\Repositories\Interfaces\CommentaireRepositoryInterface;
use App\Repositories\Interfaces\ProduitRepositoryInterface;
use App\Repositories\Interfaces\RendezVousRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $tagRepository;
    private $articleRepository;
    private $categorieRepository;
    private $adminRepository;
    private $utilisateurRepository;
    private $produitRepository;
    private $commandeRepository;
    private $rendezVousRepository;
    private $commentaireRepository;

    public function __construct(CommentaireRepositoryInterface $commentaireRepository, RendezVousRepositoryInterface $rendezVousRepository, CommandeRepositoryInterface $commandeRepository, ProduitRepositoryInterface $produitRepository, AdminRepositoryInterface $adminRepository, TagRepositoryInterface $tagRepository, ArticleRepositoryInterface $articleRepository, CategorieRepositoryInterface $categorieRepository, UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $this->tagRepository = $tagRepository;
        $this->articleRepository = $articleRepository;
        $this->categorieRepository = $categorieRepository;
        $this->adminRepository = $adminRepository;
        $this->utilisateurRepository = $utilisateurRepository;
        $this->produitRepository = $produitRepository;
        $this->commandeRepository = $commandeRepository;
        $this->rendezVousRepository = $rendezVousRepository;
        $this->commentaireRepository = $commentaireRepository;
    }

    public function getAdminById(int $id)
    {
        return $this->articleRepository->getAdminById($id);
    }

    public function dashboard()
    {
        $countUtilisateurs = $this->utilisateurRepository->countUsers();
        $countProduits = $this->produitRepository->countProduit();
        $countCommandes = $this->commandeRepository->countCommandes(); 
        $countconsultations = $this->rendezVousRepository->countConsultations(); 

        $allUtilisateurs = $this->utilisateurRepository->getAllUtilisateurs(); 

        $statistiques = [
            'utilisateurs' => $countUtilisateurs,
            'produits' => $countProduits,
            'commandes' => $countCommandes,
            'consultations' => $countconsultations,
            'allUtilisateurs' => $allUtilisateurs
        ];

        return view('admin.dashboard', compact('statistiques'));
    }

    public function usersIndex (){
        $utilisateurs = $this->utilisateurRepository->getAllUtilisateurs();
        // dd($utilisateurs);
        return view('admin.users.index', compact('utilisateurs'));
    }

    public function usersShow (Request $request){
        // dd($request->id);
        $utilisateur = $this->utilisateurRepository->getById($request->id);
        // dd($utilisateurs);
        return view('admin.users.show', compact('utilisateur'));
    }

    public function usersEdit (Request $request){
        // dd($request->id);
        $utilisateur = $this->utilisateurRepository->getById($request->id);
        // dd($utilisateurs);
        return view('admin.users.edit', compact('utilisateur'));
    }

    public function usersEditSubmit(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs,email,',
            'telephone' => 'required|string|max:13',
            'adresse' => 'required|string',
            'type' => 'required|string|in:client,veterinaire,agricole,admin',
            'photo' => 'string'
        ]);
        // dd($validated);
        $id = $request->id;
        $modified = $this->adminRepository->modifierUtilisateur($id, $validated);
        if ($modified) {
            $utilisateur = $this->utilisateurRepository->getById($id);
            return view('admin.users.show', compact('utilisateur'));
        }
        // dd($utilisateur); 
    }

    public function usersDelete(Request $request){
        $validated = $request->validate([
            'id' => 'required|integer'
        ]);
        $this->adminRepository->supprimerUtilisateur($validated['id']);
        return redirect()->route('admin.users.index')->with('success', 'Utilisateur supprimé avec succès !');
    }

    public function getUtilisateurAdminById(int $id)
    {
        return $this->articleRepository->getUtilisateurAdminById($id);
    }

    public function articlesIndex()
    {
        $articles = $this->articleRepository->getAllArticles();
        $categorie = $this->articleRepository->getCategorieById(1);
        $categorieNom = $categorie->nom;
        if ($articles->isEmpty()) {
            return redirect()->route('admin.articles.create');
        }

        foreach ($articles as $article) {
            $backgroundColors = ['000000', 'FF5733', '4CAF50', 'FFC107', '3F51B5', 'E91E63'];
            $textColors = ['FFFFFF', '000000', 'FF5733', '4CAF50', 'FFFFFF', '3F51B5'];

            $backgroundColor = $backgroundColors[array_rand($backgroundColors)];
            $textColor = (in_array($backgroundColor, ['000000', '4CAF50', '3F51B5'])) ? 'FFFFFF' : '000000';

            $encodedTitle = urlencode($article->titre);
            $imageUrl = $article->photo;

            if (empty($imageUrl)) {
                $imageUrl = "https://placehold.co/600x400/$backgroundColor/$textColor?text=$encodedTitle";
            }
            $imageExists = @getimagesize($imageUrl);


            if ($imageExists) {
                $article->photo = $imageUrl;
            } else {
                $article->photo = "https://placehold.co/600x400/$backgroundColor/$textColor?text=$encodedTitle";
            }

            $article->auteur = $this->getAdminById($article->auteur);
            // echo $article->auteur . "<br>";
            // dd($article->auteur);
            $idUtilisateur = $article->auteur->compte;    
            $Utilisateuradmin = $this->getUtilisateurAdminById($idUtilisateur);
            $article->auteur = $Utilisateuradmin;
        }

        return view('admin.articles.index', compact('articles','Utilisateuradmin', 'categorieNom'));
    }

    public function articlesCreate()
    {
        return view('admin.articles.create');
    }

    public function articlesStore(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'photo' => 'required|string',
            'statut' => 'required|string',
            'contenu' => 'required|string',
            'auteur_id' => 'required|integer'
        ]);
        // dd($validated);

        $categories = $this->categorieRepository->getAllCategories();
        
        return view('admin.articles.add-categorie', compact('validated', 'categories'));
    }

    public function articlesEditStore(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'photo' => 'required|string',
            'statut' => 'required|string',
            'contenu' => 'required|string',
            'article_id' => 'required|integer',
            'categorie_id' => 'required|integer',
            'categorie' => 'required|string'
        ]);

        $categories = $this->categorieRepository->getAllCategories();
        
        return view('admin.articles.update-with-categorie', compact('validated', 'categories'));
    }

    public function articlesEditStoreSubmit(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'photo' => 'required|string',
            'statut' => 'required|string',
            'article_id' => 'required|integer',
            'categorie_id' => 'required|integer'
        ]);
        // dd($validated);
        $categorie = $this->categorieRepository->getCategorieById($validated['categorie_id']);
        $article = $this->articleRepository->getArticleById($validated['article_id']);
        // dd($categorie->nom);
        $validated = array_merge($validated, ['categorie' => $categorie->nom]);
        $validated = array_merge($validated, ['auteur' => $article->auteur]);
        // dd($validated['article_id']);
        $modified = $this->articleRepository->modifierArticle($validated['article_id'], $validated);
        if ($modified) {
            return redirect()->route('admin.articles.index');
        }
    }

    public function articlesStorewithCategorie(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'photo' => 'required|string',
            'statut' => 'required|string',
            'auteur_id' => 'required|integer',
            'categorie_id' => 'required|integer|exists:categories,id'
        ]);
        // dd($validated);
        $auteur = $this->adminRepository->getByUtilisateurId($validated['auteur_id']);
        // dd($auteur);
        $validated['auteur_id'] = $auteur->id;
        $categorie = $this->categorieRepository->getCategorieById($validated['categorie_id']);
        $validated = array_merge($validated, ['categorie' => $categorie->nom]);
        // dd($validated);
        $this->articleRepository->creeArticle($validated);
        return redirect()->route('admin.articles.index')->with('success', 'Article ajouter avec succès !');
    }

    public function articlesSupprimer(Request $request){
        $validated = $request->validate([
            'id' => 'required|integer'
        ]);
        // dd($validated['id']);
        $this->articleRepository->supprimerArticle($validated['id']);
        return redirect()->route('admin.articles.index')->with('success', 'Article supprimé avec succès !');
    }

    public function articlesEdit(Request $request){
        // dd($request->all());
        $article = $this->articleRepository->getArticleById($request->id);
        return view('admin.articles.update', compact('article'));
    }

    public function tagsIndex()
    {
        $tags = $this->tagRepository->getAllTags();
        if ($tags->isEmpty()) {
            return redirect()->route('admin.tags.create');
        }
        return view('admin.tags.index', compact('tags'));
    }

    public function tagCreate()
    {
        return view('admin.tags.create');
    }

    public function tagStore(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255|unique:tags,nom|min:3',
        ]);
        $this->tagRepository->ajouterTag($validated['nom']);
        return redirect()->route('admin.tags.index')->with('success', 'Tag ajouter avec succès !');
    }

    public function tagUpdate(Request $request)
    {
        $tag = [
            'id' => $request->id,
            'nom' => $request->nom
        ];

        return view('admin.tags.update', compact('tag'));
    }

    public function tagUpdateStore(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'nom' => 'required|string|max:255|unique:tags,nom,'
        ]);

        $data = [
            'nom' => $validated['nom']
        ];

        $this->tagRepository->modifierTag($validated['id'], $data);
        return redirect()->route('admin.tags.index')->with('success', 'Tag modifier avec succès !');
    }

    public function tagDelete(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer'
        ]);

        $this->tagRepository->supprimerTag($validated['id']);
        return redirect()->route('admin.tags.index')->with('success', 'Tag supprimé avec succès !');
    }

    public function categoriesIndex()
    {
        $categories = $this->categorieRepository->getAllCategories();
        return view('admin.categories.index', compact('categories'));
    }

    public function commentsIndex(){
        $comments = $this->commentaireRepository->getAllCommentaires();
        foreach ($comments as $comment) {
            $comment->article = $this->articleRepository->getArticleById($comment->article);
            $comment->utilisateur = $this->utilisateurRepository->getById($comment->utilisateur);
        }
        // dd($comments);
        return view('admin.comments.index', compact('comments'));
    }

    public function commentsDelete(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'commentaire_id' => 'required|integer'
        ]);
        // dd($validated['id']);
        $this->commentaireRepository->supprimerCommentaire($validated['commentaire_id']);
        return redirect()->route('admin.comments.index')->with('success', 'Commentaire supprimé avec succès !');
    }
}