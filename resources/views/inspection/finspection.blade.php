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
                <img src="{{ asset('img/title1.png') }}" width="50%"> 
              </div>  
              <div class="d-flex justify-content-center">
                  <img src="{{ asset('img/inspection.jpg') }}" width="30%">
              </div>
              <div class="d-flex justify-content-center">
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
              <form action="{{ route('viewers.result') }}" class="d-flex justify-content-center">
                <input type="hidden" name="total_score" value="{{ $total_score }}">
                <button type="submit" class="btn btn-danger w-25" id="result-button">診断結果</button>
              </form>
            </div>       
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>