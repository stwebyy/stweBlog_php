<?php

namespace App\Service;

use App\Repositories\Article\ArticleRepositoryInterface;
use App\Repositories\Qiita\QiitaRepositoryInterface;
use Illuminate\Support\Carbon;

class MergeArticleService
{
    /**
     * @var ArticleRepositoryInterface
     */
    protected $article;

    /**
    * @var QiitaRepositoryInterface
    */
   protected $qiita_article;

    /**
     * construct
     * 
     * @return void
     */
    public function __construct(
        ArticleRepositoryInterface $article,
        QiitaRepositoryInterface $qiita_article
    )
    {
        $this->article = $article;
        $this->qiita_article = $qiita_article;
    }

    /**
     * articleテーブルとqiita_articleテーブルのレコードを取得
     * created_atでソートしたコレクションを返却
     * 
     * @return collection
     */
    public function getAllArticlesCollection()
    {
        $articles = $this->article->getArticles();
        $qiita_articles = $this->qiita_article->getQiitaArticles();
        $merge = $articles->concat($qiita_articles)->sortByDesc('created_at')->values();

        return $merge;
    }
}
