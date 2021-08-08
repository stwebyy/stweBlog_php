<?php

namespace App\Http\Controllers;

use App\Repositories\Article\ArticleRepositoryInterface;

class TopController extends Controller
{
    /**
     * @return void
     */
    public function __construct(ArticleRepositoryInterface $article)
    {
        $this->article = $article;
    }

    /**
     * TOPページ
     *
     * @return View
     */
    public function index(): object
    {
        $articles = $this->article->getArticles()->sortByDesc('updated_at');

        return view('index', [
            'articles' => $articles
        ]);
    }
}
