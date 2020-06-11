<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>コメント登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="row">
                <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>
                @endif
                </div>
            </div>
            <form action="/comment" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">投稿者</label>
                    <input type="text" class="form-control" name="name" value="{{ $comment->name }}">
                </div>
                <div class="form-group">
                    <label for="tag">タグ</label>
                    <input type="text" class="form-control" name="tag" value="{{ $comment->tag }}">
                </div>
                <div class="form-group">
                    <label for="comment">コメント</label>
                    <textarea rows="7" class="form-control" name="comment" value="{{ $comment->comment }}"></textarea>
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/comment">戻る</a>
            </form>
        </div>
    </div>
</div>