@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-8 bg-white base__BoxShadow b-none">
            {{ Breadcrumbs::render('blog') }}
            <article class="article__Row">
                <a href="#">
                    <div class="article__RowDate mb-1">
                        <i class="fas fa-calendar-week"></i><span class="ml-1">2021/03/17</span>
                        <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">2021/03/19</span></span>
                    </div>
                    <h1 class="article__RowTitle color-bk">テストタイトル</h1>
                    <p class="article__RowDiscription color-bk">SymfonyのFormは全てEntityと紐づいています。さらにオプションを指定すれば色々なフォームを自動で作成できるようになります。...</p>
                    <div class="article__Tag">
                        <div class="tag__ItemList">
                            <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                        </div>
                    </div>
                </a>
            </article>
            @include('components.pagination')
        </div>
        @include('commons.aside')
    </div>
</div>
@endsection