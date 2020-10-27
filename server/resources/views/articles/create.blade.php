<h1>新規論文投稿</h1>
<form action="/articles" method="post">
@csrf
<p>
    タイトル:<br>
<input type="text" name="title" value="{{ old('title') }}">
</p>

<p>
    論文詳細:<br>
<input type="text" name="body" value="{{ old('body') }}">
</p>

<input type="submit" value="投稿">
</form>


