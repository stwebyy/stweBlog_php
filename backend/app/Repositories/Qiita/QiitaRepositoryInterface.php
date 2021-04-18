<?php

namespace App\Repositories\Qiita;

interface QiitaRepositoryInterface
{
    /**
     * 全てのレコードを取得
     *
     * @return string
     */
    public function getQiitaArticles(): string;

    /**
     * Qiitaから取得した記事の保存
     * 
     * @param string id
     * 
     * @return object
     */
    public function saveQiitaArticles(): void;
}
