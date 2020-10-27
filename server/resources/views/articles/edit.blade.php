<h1>論文編集</h1>

<!--更新先はitemsのidにしないと増える php artisan rote:listで確認①-->
<form action="/articles/{{ $article->id }}" method="post">
@csrf

<!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
@method('PUT')

<p>
    タイトル:<br>
<input type="text" name="title" value="{{ old('title') }}">
</p>

<p>
    論文詳細:<br>
<input type="text" name="body" value="{{ old('body') }}">
</p>

<input type="submit" value="更新">
</form>
