<h1>論文一覧</h1>
<ul>
    @foreach ($article as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li><br>
    @endforeach
<br>
    {{-- 新規投稿画面に移行する｡ --}}
    <a href="/articles/create"><button>新規投稿</button></a>
</ul>