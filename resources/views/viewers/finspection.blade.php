<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訳あり肉診断終了画面</title>   
    @vite(['resources/js/app.js']) 
</head>

<body>
    <header>
    </header>

    <main>
        <article>
            <div> 
              <div class="d-flex justify-content-center">               
                <h1>訳あり肉診断</h1>   
              </div>  
              <div class="d-flex justify-content-center">
                  <img src="{{ asset('img/inspection.jpg') }}" width="50%">
              </div>
              <div>
                <h2 class="d-flex justify-content-center p-3 mb-2 bg-danger text-dark">診断終了！！！</h2>                                  
              </div>
              <div class="d-flex justify-content-center">
                <p>あなたの診断結果を確認しよう！</p>
              </div>
              <div class="d-flex justify-content-center">
                  <h3>
                  「診断」ボタンクリック↓
                  </h3>
              </div>
              <div class="d-flex justify-content-center">
                <button onclick="location.href='{{ route('viewers.result') }}'"class="#" type="result-button">診断結果</button>
              </div>
            </div>       
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>