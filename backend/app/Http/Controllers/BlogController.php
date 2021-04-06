<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('blogs.index');
    }

    /**
     * ブログTOPページ
     * 
     * @param string id
     * 
     * @return View
     */
    public function show(string $id): object
    {
        $article = $this->article->findArticleById($id);
        // dd($article);

        return view('blogs.show', [
            'article' => $article
        ]);
    }
}
