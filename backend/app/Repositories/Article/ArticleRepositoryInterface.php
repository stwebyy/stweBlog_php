<?php

namespace App\Repositories\Article;

use Illuminate\Database\Eloquent\Collection;

use App\Models\Article;

interface ArticleRepositoryInterface
{
    /**
     * 全てのレコードを取得
     *
     * @return Collection
     */
    public function getArticles(): Collection;

    /**
     * 単一のレコードを取得
     *
     * @param string id
     *
     * @return object
     */
    public function findArticleById(string $id): Article;
}
