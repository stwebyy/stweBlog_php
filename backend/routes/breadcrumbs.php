<?php

// ブログ/備忘録
Breadcrumbs::for('blog', function ($trail) {
    $trail->push('ブログ/備忘録');
});

// ブログ/備忘録
Breadcrumbs::for('tag', function ($trail, $tag_name) {
    $trail->push('タグ');
    $trail->push($tag_name);
});
