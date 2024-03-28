<!-- 登録フォーム -->
<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <input type="text" name="name" placeholder="カテゴリ名">
    <button type="submit">登録</button>
</form>

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
