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
        $articles = $this->articleRepository->getAllArticles();
        return view('articles.index', compact('articles'));
    }
}
