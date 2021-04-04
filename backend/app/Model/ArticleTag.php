<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
    /**
     * 関連table名
     * 
     * @var string
     */
    protected $table = 'article_tags';
}
