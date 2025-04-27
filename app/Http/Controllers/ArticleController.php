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

    public function articlesIndex()
    {
        $articles = $this->articleRepository->getPublishedArticles();

        return view('articles.index', compact('articles'));
    }

    public function articlesShow(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:articles,id',
        ]);
        $articleId = $validated['id'];

        $article = $this->articleRepository->getArticleById($articleId);
        // dd($article);
        return view('articles.show', compact('article'));
    }
}
