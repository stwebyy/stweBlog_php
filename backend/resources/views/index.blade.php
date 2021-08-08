@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-8 bg-white base__BoxShadow b-none">
            {{ Breadcrumbs::render('blog') }}
            @foreach ($articles as $article)
            <article class="article__Row">
                <a href="{{ route("blog_show", $article->id) }}">
                    <div class="article__RowDate mb-1">
                        <i class="fas fa-calendar-week"></i><span class="ml-1">{{ $article->created_at }}</span>
                        <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">{{ $article->updated_at }}</span></span>
                    </div>
                    <h1 class="article__RowTitle color-bk">{{ $article->title }}</h1>
                    <div class="article__Tag">
                        @foreach ($article->tags as $tag)
                        <div class="tag__ItemList">
                            <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;{{ $tag->name }}</a></object>
                        </div>
                        @endforeach
                    </div>
                </a>
            </article>
            @endforeach
            @include('components.pagination')
        </div>
        @include('commons.aside')
    </div>
</div>
@endsection