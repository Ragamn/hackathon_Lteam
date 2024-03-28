<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
  <title>Document</title>
</head>
<body>
  <div id="body">
  <img src="{{asset('/img/logo.png')}}" alt="logo" id="logo">
<table border="">
      <tr>
        <th>テーブル番号</th>
        <th>テーブル名</th>
        <th>人数</th>
        <th>登録ボタン</th>
      </tr>
      @foreach ($items as $item)
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->seats_name}}</td>
        <td>{{$item->num}}</td>
        <td>
        <a href="seat/register/?id={{$item->id}}">登録</a>
        </td>
      </tr>
      @endforeach
    </table>
    </div>
</body>
</html>