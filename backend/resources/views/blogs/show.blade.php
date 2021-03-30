@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-8 bg-white base__BoxShadow b-none">
            {{ Breadcrumbs::render('blog') }}
            <article class="article__BoxWrap">
                <h1 class="article__Title color-bk">テストタイトル</h1>
                <div class="article__RowDate mb-2 mt-2">
                    <i class="fas fa-calendar-week"></i><span class="ml-1">2021/03/17</span>
                    <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">2021/03/19</span></span>
                </div>
                <div class="article__Tag mt-2">
                    <div class="tag__ItemList">
                        <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                    </div>
                </div>
                <div class="article__Content">
                    <h2 class="article__Headline color-bk">Symfony Formtypeに関して</h2>
                    <p>仕事でSymfonyを扱うことになりそうなので、勉強用にDocker環境を構築しました。<br>
                        SymfonyはPHPのメジャーフレームワークだけど、Laravelと比べると少し日本語の情報が少ないですね。<br>
                        Laravelを使っているとSymfonyの日本語の情報の少なさに狼狽える自分ががｇ
                    </p>
                    <h3>リポジトリ</h3>
                    <p>仕事でSymfonyを扱うことになりそうなので、勉強用にDocker環境を構築しました。<br>
                        SymfonyはPHPのメジャーフレームワークだけど、Laravelと比べると少し日本語の情報が少ないですね。<br>
                        Laravelを使っているとSymfonyの日本語の情報の少なさに狼狽える自分ががｇ
                    </p>
                    <h4>hosts</h4>
                    <p>仕事でSymfonyを扱うことになりそうなので、勉強用にDocker環境を構築しました。<br>
                        SymfonyはPHPのメジャーフレームワークだけど、Laravelと比べると少し日本語の情報が少ないですね。<br>
                        Laravelを使っているとSymfonyの日本語の情報の少なさに狼狽える自分ががｇ
                    </p>
                </div>
            </article>
            <div class="row mt-5">
                <div class="offset-3 col-6 text-center">
                    <a class="btn article__LastBtn" href="#">ブログ一覧へ</a>
                </div>
            </div>
        </div>
        @include('commons.aside')
    </div>
</div>
@endsection