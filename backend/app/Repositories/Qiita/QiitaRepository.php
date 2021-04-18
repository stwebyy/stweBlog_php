<?php

namespace App\Repositories\Qiita;

use App\Models\QiitaArticle;

class QiitaRepository implements QiitaRepositoryInterface
{
    /**
     * @var QiitaArticle
     */
    protected $qiita;

    /**
    * @param object $qiita
    */
    public function __construct(QiitaArticle $qiita)
    {
        $this->qiita = $qiita;
    }

    /**
     * QiitaからAPI経由でレコードを取得
     *
     * @return string
     */
    public function getQiitaArticles(): string
    {
        return $this->qiita->get();
    }

    /**
     * Qiitaから取得した記事の保存
     * 
     * @return object
     */
    public function saveQiitaArticles(): void
    {
    }
}