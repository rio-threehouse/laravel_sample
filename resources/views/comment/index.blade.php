<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">コメント一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">投稿者</th>
        <th class="text-center">タグ</th>
        <th class="text-center">コメント</th>
        <th class="text-center">編集</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($comments as $comment)
      <tr>
        <td>{{ $comment->id }}</td>
        <td>{{ $comment->name }}</td>
        <td>{{ $comment->tag }}</td>
        <td>{{ $comment->comment }}</td>
        <td>
          <button class="btn btn-xs btn-secondary">
            <a href="/comment/{{ $comment->id }}/edit">編集</a>
          </button>
        </td>
        <td>
          <form action="/comment/{{ $comment->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/comment/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>