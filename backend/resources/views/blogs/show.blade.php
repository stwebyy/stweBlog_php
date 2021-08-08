@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-8 bg-white base__BoxShadow b-none">
            {{ Breadcrumbs::render('blog') }}
            <article class="article__BoxWrap">
                <h1 class="article__Title color-bk">{{ $article->title }}</h1>
                <div class="article__RowDate mb-2 mt-2">
                    <i class="fas fa-calendar-week"></i><span class="ml-1">{{ $article->created_at }}</span>
                    <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">{{ $article->updated_at }}</span></span>
                </div>
                <div class="article__Tag mt-2">
                    @foreach ($article->tags as $tag)
                    <div class="tag__ItemList">
                        <object><a href="#"><i class="fas fa-tag"></i>&nbsp;{{ $tag->name }}</a></object>
                    </div>
                    @endforeach
                </div>
                <div class="article__Content">
                    {!! $article->rendered_body !!}
                </div>
            </article>
            <div class="row mt-5">
                <div class="offset-3 col-6 text-center">
                    <a class="btn article__LastBtn" href="{{ route('index') }}">ブログ一覧へ</a>
                </div>
            </div>
        </div>
        @include('commons.aside')
    </div>
</div>
@endsection
