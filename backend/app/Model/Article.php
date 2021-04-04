<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 関連table名
     * 
     * @var string
     */
    protected $table = 'articles';
}
