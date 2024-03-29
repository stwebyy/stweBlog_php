<aside class="col-4">
    <div class="bg-white base__BoxShadow">
        {{-- TODO: ブログ記事の場合、目次を入れるという条件分岐の作成 --}}
        @php
            $articles = App\Models\Article::get()->sortByDesc('created_at');
        @endphp
        <div class="right__Box">
            <h5 class="right__Header">Recent Posts</h5>
            @foreach ($articles as $article)
            @if ($loop->index >= 3)
                @break
            @endif
            <div class="recent__Posts">
                <a href="{{ route('blog_show', $article->id) }}">
                    <p class="fs-12 color-light-gray"><i class="fas fa-calendar-week"></i><span class="ml-1">{{ $article->created_at->format('Y/m/d H:i:s') }}</span></p>
                    <p class="recent__PostsTitle">{{ $article->title }}</p>
                </a>
            </div>
            @endforeach
        </div>
        <div class="right__Box">
            <h5 class="right__Header">Tags</h5>
            <div class="tag__Items">
                @foreach (\App\Models\Tag::all() as $tag)
                <div class="tag__ItemList">
                    <object><a href="{{ route('tag_show', $tag->id) }}"><i class="fas fa-tag"></i>&nbsp;{{ $tag->name }}</a></object>
                </div>
                @endforeach
            </div>
        </div>
        <div class="right__Box">
            <h5 class="right__Header">Profile</h5>
            <div class="text-center mt-3">
                <img src="{{ asset('assets/images/profile_img.jpg') }}" width="50%" />
            </div>
            <div class="card-body">
                <h5 class="card-title text-center"><a href="/" target="_blank">stweb</a></h5>
                <p class="card-text text-center mb-2">PHP/Python<br>Laravel/Symfony/Django<br>FPS/鉄拳</p>
                <div class="text-center">
                    <a href="https://github.com/stwebyy" class="card-link" target="_blank"><img src="{{ asset('assets/images/GitHub-Mark-32px.png') }}" width="25px" /></a>
                    <a href="https://qiita.com/nyokinyoki1848" class="card-link" target="_blank"><img src="{{ asset('assets/images/qiita_favicon.png') }}" width="25px" /></a>
                </div>
            </div>
        </div>
    </div>
</aside>
