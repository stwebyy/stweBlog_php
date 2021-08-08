<?php

namespace App\Repositories\Tag;

use Illuminate\Database\Eloquent\Collection;

use App\Models\Tag;

class TagRepository implements TagRepositoryInterface
{
    /**
     * @var Tag
     */
    protected $tag;

    /**
    * @param object $Tag
    */
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    /**
     * 全てのレコードを取得
     *
     * @return Collection
     */
    public function getTags(): Collection
    {
        return $this->tag->get();
    }

    /**
     * 単一のレコードを取得
     *
     * @param string id
     *
     * @return object
     */
    public function findTagById(string $id): Tag
    {
        return $this->tag->find($id);
    }

    /**
     * タグの保存
     *
     * @return Collection
     */
    public function saveTags(): void
    {
        // TODO
    }
}
