<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/category.css')}}">
    <title>カテゴリー編集</title>
</head>
<body>
    <div class="body">
        <div class="img">
            <img src="../img/スクリーンショット 2024-03-15 093820.png" alt="金の舞">
        </div>
        <div class="main">
            <h1>カテゴリー編集</h1>
            <div class="box">
                <form action="#">
                    <label for="catego" class="catego">カテゴリー選択</label> <br>
                    <select name="category" id="catego">
                        <option value="Registration">登録</option>
                        <option value="editing">編集</option>
                        <option value="deletion">削除</option>
                    </select> <br>
                    <input type="button" value="登録" class="btn">
                </form>
            </div>
            <div class="logout">
                <a href="category-list.html">戻る</a>
            </div>
        </div>
    </div>
</body>
</html>