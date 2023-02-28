<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規投稿</title>    
</head>

<body>

    <main>
        <article>
            <div>                
                <h1>新規投稿</h1>   

                <form action="{{ route('items.store') }}" method="post">
                
                    @csrf

                    <div>
                        <label for="html">HTML CODE</label>
                        <textarea name="html"></textarea>
                    </div>
                    <div>
                        <label for="price_score">点数</label>
                        <input type="text" name="price_score">
                    </div>
                    <div>
                        <label for="description">説明</label>
                        <input type="text" name="description">
                    </div>
                    <button type="submit">投稿</button>
                </form>
            </div>
        </article>
    </main>

    <footer>        
        <p>&copy; 投稿アプリ All rights reserved.</p>
    </footer>
</body>

</html>