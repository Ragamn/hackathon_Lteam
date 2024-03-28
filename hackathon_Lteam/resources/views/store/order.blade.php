<html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf_token" content="{{csrf_token()}}">
  <title>Document</title>
</head>
<body>
<table border="" id="products">
      <tr>
        <th>id</th>
        <th>カテゴリー名</th>
        <th>name</th>
        <th>商品画像</th>
        <th>値段</th>
        <th>値段</th>
        <th>追加</th>
      </tr>
      @foreach ($items as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->category_id}}</td>
        <td>{{$item->name}}</td>
        <td><img src="{{$item->image}}" alt=""></td>
        <td>{{$item->price}}</td>
        <td>{{$item->price_tax}}</td>
        <td>
          <button 
            product_id="{{$item->id}}"
            product_name="{{$item->name}}"
            product_price="{{$item->price}}"
            product_price_tax="{{$item->price_tax}}"
            onclick="addcart(event)">カートに追加
          </button>
        </td>
      </tr>
      @endforeach
    </table>
    <?php
    // var_dump(session('cart'))
    ?>
    <div id="order">

    </div>
    <script src="{{asset('/js/order.js')}}"></script>
</body>
</html>