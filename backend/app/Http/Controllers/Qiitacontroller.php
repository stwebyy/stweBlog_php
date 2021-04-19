<?php

namespace App\Http\Controllers;

use App\Repositories\Qiita\QiitaRepositoryInterface;
use App\Service\QiitaApiService;

class Qiitacontroller extends Controller
{
    /**
     * @return void
     */
    public function __construct(
        QiitaRepositoryInterface $qiita,
        QiitaApiService $api
    )
    {
        $this->qiita = $qiita;
        $this->api = $api;
    }

    public function qiitaArticles()
    {
        return $this->api->fetchQiitaArticleByApi();
    }
}
