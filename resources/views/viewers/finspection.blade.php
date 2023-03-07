<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訳あり肉診断終了画面</title>    
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
                <h2>診断終了</h2>                                  
              </div>
              <div>
                <p>あなたの診断結果を確認しよう！</p>
              </div>
              <div>
                <button onclick="location.href='{{ route('viewers.result') }}'"class="#" type="result-button">診断結果</button>
              </div>
            </div>       
        </article>
    </main>

    <footer>        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>