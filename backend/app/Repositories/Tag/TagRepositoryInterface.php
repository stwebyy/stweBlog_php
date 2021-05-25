<?php

namespace App\Repositories\Tag;

use Illuminate\Database\Eloquent\Collection;

use App\Models\Tag;

interface TagRepositoryInterface
{
    /**
     * 全てのレコードを取得
     *
     * @return Collection
     */
    public function getTags(): Collection;

    /**
     * 単一のレコードを取得
     *
     * @param string id
     *
     * @return object
     */
    public function findTagById(string $id): Tag;

    /**
     * タグの保存
     *
     * @param string id
     *
     * @return object
     */
    public function saveTags(): void;
}
