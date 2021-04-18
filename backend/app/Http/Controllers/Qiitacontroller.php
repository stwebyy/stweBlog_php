<?php

namespace App\Http\Controllers;

use App\Repositories\Qiita\QiitaRepositoryInterface;

class Qiitacontroller extends Controller
{
    /**
     * @return void
     */
    public function __construct(QiitaRepositoryInterface $qiita)
    {
        $this->qiita = $qiita;
    }

    public function qiitaArticles()
    {
        return $this->qiita->getQiitaArticles();
    }
}
