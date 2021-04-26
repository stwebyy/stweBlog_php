<?php

namespace App\Repositories\Qiita;

use App\Models\QiitaArticle;
use App\Service\QiitaApiService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class QiitaRepository implements QiitaRepositoryInterface
{
    /**
     * @var QiitaArticle
     */
    protected $qiita;

    /**
     * @var QiitaApiService
     */
    protected $qiita_api_service;

    /**
    * @param object $qiita
    */
    public function __construct(
        QiitaArticle $qiita,
        QiitaApiService $qiita_api_service
    )
    {
        $this->qiita = $qiita;
        $this->qiita_api_service = $qiita_api_service;
    }

    /**
     * レコードを取得
     *
     * @return collection
     */
    public function getQiitaArticles(): Collection
    {
        return $this->qiita->get();
    }

    /**
     * 記事の保存
     * 記事数が膨大ではないため、ループにて1件ずつクエリを発行
     * 
     * @return void
     */
    public function saveQiitaArticles(): void
    {
        $json_articles = $this->qiita_api_service->fetchQiitaArticleByApi();
        foreach ($json_articles as $article) {
            $created_at = new Carbon($article->created_at);
            $created_at->toFormattedDateString();
            $updated_at = new Carbon($article->updated_at);
            $updated_at->toFormattedDateString();

            $this->qiita->updateOrCreate(
                [
                    'title' => $article->title,
                    'body' => $article->body,
                    'rendered_body' => $article->rendered_body,
                    'url' => $article->url
                ],
                [
                    'title' => $article->title,
                    'body' => $article->body,
                    'rendered_body' => $article->rendered_body,
                    'url' => $article->url,
                    'created_at' => $created_at,
                    'updated_at' => $updated_at,
                ]
            );
        }
    }
}