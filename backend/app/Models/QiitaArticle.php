<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QiitaArticle extends Model
{
    /**
     * 関連table名
     * 
     * @var string
     */
    protected $table = 'qiita_articles';

    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'rendered_body',
        'url',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp'
    ];
}
