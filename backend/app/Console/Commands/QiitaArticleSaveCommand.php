<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use App\Models\Tag;
use App\Service\QiitaApiService;
use Carbon\Carbon;

class QiitaArticleSaveCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'merge:article';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'QiitaからAPI経由でQiitaに投稿した記事を取得し、articlesテーブルの記事とマージを行う。';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
        QiitaApiService $qiita_api,
        Article $article,
        Tag $tag
    )
    {
        parent::__construct();
        $this->qiita_api = $qiita_api;
        $this->article = $article;
        $this->tag = $tag;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $qiita_articles = $this->qiita_api->fetchQiitaArticleByApi();
        $bar = $this->output->createProgressBar(count($qiita_articles));
        $this->info('Start Qiita Articles merge.');
        foreach ($qiita_articles as $article) {
            $created_at = new Carbon($article->created_at);
            $created_at->toFormattedDateString();
            $updated_at = new Carbon($article->updated_at);
            $updated_at->toFormattedDateString();

            $qiita_article = $this->article->updateOrCreate(
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
            foreach ($article->tags as $tag) {
                $tag_obj =$this->tag->updateOrCreate(
                    ['name' => $tag->name],
                    ['name' => $tag->name]
                );
                $qiita_article->tags()->attach($tag_obj);
            }

            $bar->advance();
        }
        $bar->finish();
        $this->info(PHP_EOL . 'Qiita Articles is merged.');
    }
}
