<h1>論文一覧</h1>
<ul>
    @foreach ($article as $article)
        <!-- // リンク先をidで取得し名前で出力 -->
        <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
    @endforeach
</ul>