<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訳あり肉診断結果画面</title>    
    @vite(['resources/js/app.js'])
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
              <div>               
                <h1>訳あり肉診断</h1>   
              </div>  
              <div>
                <p>今あなたが最も欲しい訳あり肉は、、、（前振り）</p>                                  
              </div>
              <div>
                <button onclick="location.href='#'"class="#" type="result-button">リンク</button>
              </div>
              <div>
                <p>（理由を説明）</p>
              </div>
              <div>
                <button class="#" type="share-button">共有ボタン</button>
                <button  onclick="location.href='{{ route('viewers.home') }}'" class="#" type="try-button">もう一度診断ボタン</button>
              </div>
            </div>
        </article>
    </main>

    <footer>        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>