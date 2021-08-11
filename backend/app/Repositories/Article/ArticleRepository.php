<?php

namespace App\Repositories\Article;

use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    /**
     * @var Article
     */
    protected $article;

    /**
    * @param object $article
    */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * 全てのレコードを取得
     *
     * @return LengthAwarePaginator
     */
    public function getArticlesPaginate(): LengthAwarePaginator
    {
        return $this->article->orderBy('created_at', 'desc')->paginate(10);
    }

    /**
     * 単一のレコードを取得
     *
     * @param string id
     *
     * @return object
     */
    public function findArticleById(string $id): Article
    {
        return $this->article->find($id);
    }
}
