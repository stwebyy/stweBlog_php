<?php

namespace App\Http\Controllers;

use App\Repositories\Tag\TagRepositoryInterface;

class TagController extends Controller
{
    /**
     * @return void
     */
    public function __construct(TagRepositoryInterface $tag)
    {
        $this->tag = $tag;
    }

    /**
     * ブログ詳細ページ
     *
     * @param string id
     *
     * @return View
     */
    public function show(string $id): object
    {
        $tag = $this->tag->findTagById($id);
        $articles = $tag->articles;

        return view('tags.show', [
            'tag' => $tag,
            'articles' => $articles,
        ]);
    }
}
