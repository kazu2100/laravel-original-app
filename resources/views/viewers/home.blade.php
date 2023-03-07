<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訳あり肉診断ホーム画面</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="{{ route('viewers.home') }}">訳あり肉診断</a>            
            </div>
        </nav>
    </header>
    
    <main>
        <article>
            <div>                
                <h1>訳あり肉診断</h1>      
                <h2>今、あなたが最も欲しい訳あり肉を診断します！</h2>         
            </div>
                <button class="#" type="share-button">共有ボタン</button>
            <div>
                <p>
                    質問に答えていくとで、あなたが今、
                    最も欲しい訳あり肉を診断します！<br>
                    「診断」ボタンクリック↓
                </p>
            </div>
            <button onclick="location.href='{{ route('viewers.inspection') }}'"class="#" type="share-button">診断開始</button>
        </article>
    </main>

    <footer>        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>