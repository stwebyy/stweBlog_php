<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Article\ArticleRepositoryInterface;
use App\Service\MergeArticleService;

class BlogController extends Controller
{
    /**
     * @return void
     */
    public function __construct(
        ArticleRepositoryInterface $article,
        MergeArticleService $merge_article_service
    )
    {
        $this->article = $article;
        $this->merge_article_service = $merge_article_service;
    }

    /**
     * ブログTOPページ
     * 
     * @return View
     */
    public function index(): object
    {
        $articles = $this->merge_article_service->getAllArticlesCollection();

        return view('blogs.index', [
            'articles' => $articles
        ]);
    }

    /**
     * ブログ詳細ページ
     * 
     * @param string id
     * 
     * @return View
     */
    public function show(string $id): object
    {
        $articles = $this->merge_article_service->getAllArticlesCollection();

        return view('blogs.show', [
            'article' => $articles[$id]
        ]);
    }
}
