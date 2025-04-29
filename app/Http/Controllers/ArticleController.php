<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
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

            
            // echo $article->auteur . "<br>";
            $article->auteur = $this->getAdminById($article->auteur);
            // echo $article->auteur . "<br>";
            // dd($article->auteur);
            $idUtilisateur = $article->auteur->compte;    
            $Utilisateuradmin = $this->getUtilisateurAdminById($idUtilisateur);
            $article->auteur = $Utilisateuradmin;
            // echo $article . "<br>";
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
        // dd($Utilisateuradmin);

        return view('articles.show', compact('article', 'admin', 'Utilisateuradmin'));
    }
}
