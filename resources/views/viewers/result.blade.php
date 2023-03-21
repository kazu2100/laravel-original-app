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
    </header>

    <main>
        <article>
            <div> 
              <div class="d-flex justify-content-center">               
                <h1>訳あり肉診断</h1>   
              </div>  
              <div class="d-flex justify-content-center">
                  <img src="{{ asset('img/inspection.jpg') }}" width="30%">
              </div>
              <div  class="d-flex justify-content-center">
                <p>今あなたが最も欲しい訳あり肉は、、、</p>                                  
              </div>
              <div  class="d-flex justify-content-center">
                <button onclick="location.href='#'"class="#" type="result-button">リンク</button>
              </div>
              <div class="d-flex justify-content-center">
                <p>（理由を説明）</p>
              </div>
              <div class="d-flex justify-content-center">
                <div clss="pl-5" >
                    <img src="{{ asset('img/FB.jpeg') }}" width="30%">
                </div>
                <div clss="border mx-1" >
                    <img src="{{ asset('img/IG.jpeg') }}" width="30%">
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <button class="btn btn-danger w-25" onclick="location.href='{{ route('viewers.home') }}'" class="#" type="try-button">もう一度診断ボタン</button>
              </div>
            </div>
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>