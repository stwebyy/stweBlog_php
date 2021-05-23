<?php

namespace App\Http\Controllers;

use App\Repositories\Article\ArticleRepositoryInterface;

class BlogController extends Controller
{
    /**
     * @return void
     */
    public function __construct(ArticleRepositoryInterface $article)
    {
        $this->article = $article;
    }

    /**
     * ブログTOPページ
     * 
     * @return View
     */
    public function index(): object
    {
        $articles = $this->article->getArticles();

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
        $article = $this->article->findArticleById($id);

        return view('blogs.show', [
            'article' => $article
        ]);
    }
}
