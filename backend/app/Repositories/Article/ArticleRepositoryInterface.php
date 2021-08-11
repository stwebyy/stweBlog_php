<?php

namespace App\Repositories\Article;

use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\Article;

interface ArticleRepositoryInterface
{
    /**
     * 全てのレコードを取得
     *
     * @return LengthAwarePaginator
     */
    public function getArticlesPaginate(): LengthAwarePaginator;

    /**
     * 単一のレコードを取得
     *
     * @param string id
     *
     * @return object
     */
    public function findArticleById(string $id): Article;
}
