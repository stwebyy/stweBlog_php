<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Article extends Model
{
    /**
     * 関連table名
     * 
     * @var string
     */
    protected $table = 'articles';

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
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];

    /**
     * The tags that belong to the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id');
    }
}
