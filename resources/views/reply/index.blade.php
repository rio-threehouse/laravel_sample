<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">返信一覧</h3>
  </div>
</div>

<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">返信者</th>
        <th class="text-center">コメント</th>
      </tr>
      @foreach($replies as $reply)
      <tr>
        <td>{{ $reply->id }}</td>
        <td>{{ $reply->name }}</td>
        <td>{{ $reply->reply }}</td>
      </tr>
      @endforeach
    </table>
    <div><a href="/comment" class="btn btn-default">戻る</a></div>
  </div>
</div>
