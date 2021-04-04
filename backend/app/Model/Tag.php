<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * 関連table名
     * 
     * @var string
     */
    protected $table = 'tags';
}
