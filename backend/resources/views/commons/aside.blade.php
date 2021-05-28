<aside class="col-4">
    <div class="bg-white base__BoxShadow">
        {{-- TODO: ブログ記事の場合、目次を入れるという条件分岐の作成 --}}
        @php
            $articles = App\Models\Article::get()->sortByDesc('updated_at');
        @endphp
        <div class="right__Box">
            <h5 class="right__Header">Recent Posts</h5>
            @foreach ($articles as $article)
            @if ($loop->index >= 3)
                @break
            @endif
            <div class="recent__Posts">
                <a href="{{ route('blog_show', $article->id) }}">
                    <p class="fs-12 color-light-gray"><i class="fas fa-calendar-week"></i><span class="ml-1">2021/03/17</span></p>
                    <p class="recent__PostsTitle">{{ $article->title }}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="right__Box">
            <h5 class="right__Header">Tags</h5>
            <div class="tag__Items">
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;PHP</a></object>
                </div>
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Laravel</a></object>
                </div>
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                </div>
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                </div>
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Symfony</a></object>
                </div>
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Docker</a></object>
                </div>
                <div class="tag__ItemList">
                    <object><a href="#?1"><i class="fas fa-tag"></i>&nbsp;Linux</a></object>
                </div>
            </div>
        </div>
        <div class="right__Box">
            <h5 class="right__Header">Profile</h5>
            <div class="text-center mt-3">
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
</aside>
