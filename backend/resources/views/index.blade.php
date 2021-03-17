@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="card col-8 bg-white base__BoxShadow">
            {{ Breadcrumbs::render('blog') }}
            <article class="article__Row">
                <a href="#">
                    <div class="article__RowDate mb-1">
                        <i class="fas fa-calendar-week"></i><span class="ml-1">2021/03/17</span>
                        <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">2021/03/19</span></span>
                    </div>
                    <h1 class="article__RowTitle color-bk">テストタイトル</h1>
                    <p class="article__RowDiscription color-bk">SymfonyのFormは全てEntityと紐づいています。さらにオプションを指定すれば色々なフォームを自動で作成できるようになります。...</p>
                    <div class="article__Category">
                        <div class="article__CategoryItem">
                            <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                        </div>
                    </div>
                </a>
            </article>
            <article class="article__Row">
                <a href="#">
                    <div class="article__RowDate mb-1">
                        <i class="fas fa-calendar-week"></i><span class="ml-1">2021/03/17</span>
                        <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">2021/03/19</span></span>
                    </div>
                    <h1 class="article__RowTitle color-bk">今日のSymfony FormTypeに関してまとめてみた</h1>
                    <p class="article__RowDiscription color-bk">SymfonyのFormは全てEntityと紐づいています。さらにオプションを指定すれば色々なフォームを自動で作成できるようになります。...</p>
                    <div class="article__Category">
                        <div class="article__CategoryItem">
                            <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;PHP</a></object>
                        </div>
                        <div class="article__CategoryItem">
                            <object><a href="#?2"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                        </div>
                    </div>
                </a>
            </article>
            <article class="article__Row">
                <a href="#">
                    <div class="article__RowDate mb-1">
                        <i class="fas fa-calendar-week"></i><span class="ml-1">2021/03/17</span>
                        <span class="ml-2"><i class="fas fa-sync"></i><span class="ml-1">2021/03/19</span></span>
                    </div>
                    <h1 class="article__RowTitle color-bk">Laravel×React×Docker×AWS EC2のベストプラクティスに関してまとめた結果こうなった</h1>
                    <p class="article__RowDiscription color-bk">SymfonyのFormは全てEntityと紐づいています。さらにオプションを指定すれば色々なフォームを自動で作成できるようになります。...</p>
                    <div class="article__Category">
                        <div class="article__CategoryItem">
                            <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;PHP</a></object>
                        </div>
                        <div class="article__CategoryItem">
                            <object><a href="#?2"><i class="fas fa-tag"></i>&nbsp;Laravel</a></object>
                        </div>
                        <div class="article__CategoryItem">
                            <object><a href="#?3"><i class="fas fa-tag"></i>&nbsp;Docker</a></object>
                        </div>
                        <div class="article__CategoryItem">
                            <object><a href="#?4"><i class="fas fa-tag"></i>&nbsp;AWS</a></object>
                        </div>
                    </div>
                </a>
            </article>
        </div>
        <div class="col-4">
            <div class="card base__BoxShadow">
                <div class="text-center mt-5">
                    <img src="{{ asset('assets/images/profile_img.jpg') }}" width="50%" />
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><a href="#">stweb</a></h5>
                    <p class="card-text text-center mb-2">PHP/Python<br>Laravel/Symfony/Django<br>FPS/鉄拳</p>
                    <div class="text-center">
                        <a href="#" class="card-link"><img src="{{ asset('assets/images/GitHub-Mark-32px.png') }}" width="25px" /></a>
                        <a href="#" class="card-link"><img src="{{ asset('assets/images/qiita_favicon.png') }}" width="25px" /></a>
                    </div>
                </div>
              </div>
        </div>
@endsection