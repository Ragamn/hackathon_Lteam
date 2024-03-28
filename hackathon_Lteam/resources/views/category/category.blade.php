<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カテゴリー管理</title>
</head>
<body>
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <label for="name">カテゴリー名:</label><br>
        <input type="text" id="name" name="name" placeholder="カテゴリー名を入力してください"><br><br>
        <button type="submit">登録</button>
    </form>
</body>
</html>


<!-- カテゴリー一覧テーブル -->
<table>
    <thead>
        <tr>
            <th>name</th>
            <th>操作</th> <!-- 編集と削除の操作列を追加 -->
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <!-- 編集フォーム -->
                <form method="GET" action="{{ route('categories.edit', $category->id) }}">
                    @csrf
                    <button type="submit">編集</button>
                </form>
                <!-- 削除フォーム -->
                <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
