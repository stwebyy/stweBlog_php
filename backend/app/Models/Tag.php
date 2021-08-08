<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * 関連table名
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * 複数代入する属性
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The tags that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'article_tags', 'tag_id', 'article_id');
    }
}
