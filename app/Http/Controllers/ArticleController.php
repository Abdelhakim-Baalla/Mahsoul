<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ArticleRepositoryInterface;
use App\Repositories\Interfaces\CommentaireRepositoryInterface;
use App\Repositories\Interfaces\UtilisateurRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleRepository;
    private $commentaireRepository;
    private $utilisateurRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository, CommentaireRepositoryInterface $commentaireRepository, UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $this->articleRepository = $articleRepository;
        $this->commentaireRepository = $commentaireRepository;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    public function getAdminById(int $id)
    {
        return $this->articleRepository->getAdminById($id);
    }

    public function getUtilisateurAdminById(int $id)
    {
        return $this->articleRepository->getUtilisateurAdminById($id);
    }

    public function articlesIndex()
    {
        $articles = $this->articleRepository->getPublishedArticles();
        // dd($articles);
        if (empty($articles)) {
            return view('articles.index', ['articles' => []]);
        }

        $Utilisateuradmin = null;
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
            // dd($imageExists);
            if ($imageExists) {
                $article->photo = $imageUrl;
            } else {
                $article->photo = "https://placehold.co/600x400/$backgroundColor/$textColor?text=$encodedTitle";
            }
            // dd($article->photo);

            // dd($article);
            $admin = $this->getAdminById($article->auteur);
            if ($admin) {
                $idUtilisateur = $admin->compte ?? null;
                $Utilisateuradmin = $idUtilisateur ? $this->getUtilisateurAdminById($idUtilisateur) : null;
                $article->auteur = $Utilisateuradmin;
            }
            // dd($article);
        }

        return view('articles.index', compact('articles', 'Utilisateuradmin'));
    }

    public function articlesShow(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:articles,id',
        ]);
        $articleId = $validated['id'];

        $article = $this->articleRepository->getArticleById($articleId);
        if (!$article) {
            return redirect()->route('articles.index')->with('error', 'Article not found.');
        }

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

        $admin = $this->getAdminById($article->auteur);
        $Utilisateuradmin = $this->getUtilisateurAdminById($admin->compte);
        $commentaires = $this->commentaireRepository->getCommentairesByArticleId($article->id);
        foreach ($commentaires as $com) {
            $com->utilisateur = $this->utilisateurRepository->getById($com->utilisateur);
        }
        // dd($Utilisateuradmin);

        return view('articles.show', compact('article', 'admin', 'Utilisateuradmin', 'commentaires'));
    }

    public function articlesAddComment(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'article_id' => 'required|integer|exists:articles,id',
            'utilisateur' => 'required|integer|exists:utilisateurs,id',
            'commentaire' => 'required|string|max:255'
        ]);
        // dd($validated);

        $this->commentaireRepository->ajouterCommentaire($validated['article_id'], $validated['utilisateur'], $validated['commentaire']);
        $commentaire = $this->commentaireRepository->getCommentairesByArticleId($validated['article_id']);
        foreach ($commentaire as $com) {
            $com->utilisateur = $this->utilisateurRepository->getById($com->utilisateur);
        }
        // dd($commentaire);
        // $article = $this->articleRepository->getArticleById($validated['article_id']);
        // $admin = $this->getAdminById($article->auteur);
        // $Utilisateuradmin = $this->getUtilisateurAdminById($admin->compte);
        // dd($article);
        return redirect('/formation/show');
    }

    public function articlesDeleteComment(Request $request){
        $validated = $request->validate([
            'commentaire_id' => 'required|integer|exists:commentaires,id',
        ]);
        // dd($validated);
        $this->commentaireRepository->supprimerCommentaire($validated['commentaire_id']);
        return redirect()->back()->with('success', 'Commentaire supprimé avec succès.');
    }

    public function articleseditComment(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'commentaire_id' => 'required|integer|exists:commentaires,id',
            'contenu' => 'required|string',
            'article_id' => 'required|integer|exists:articles,id'
        ]);

        $article = $this->articleRepository->getArticleById($validated['article_id']);
        // dd($article);
        $validated['article'] = $article;
        // dd($validated); 

        return view('articles.comment-edit', compact('validated'));

        // $this->commentaireRepository->modifierCommentaire($validated['commentaire_id'], $validated);
        // return redirect()->back()->with('success', 'Commentaire supprimé avec succès.');
    }

    public function articleseditCommentSubmit(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'commentaire_id' => 'required|integer|exists:commentaires,id',
            'contenu' => 'required|string',
            'article_id' => 'required|integer|exists:articles,id'
        ]);
        // dd($validated);
        $this->commentaireRepository->modifierCommentaire($validated['commentaire_id'], $validated);
        //  $comm = $this->commentaireRepository->getCommentaireById($validated['commentaire_id']);
        //  dd($comm);
        return redirect()->route('articles.show', ['id' => $validated['article_id']])->with('success', 'Commentaire modifié avec succès.');
    }
}
