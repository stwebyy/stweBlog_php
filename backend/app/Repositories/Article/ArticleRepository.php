<?php

namespace App\Repositories\Article;

use Illuminate\Database\Eloquent\Collection;

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
     * @return Collection
     */
    public function getArticles(): Collection
    {
        return $this->article->get();
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
