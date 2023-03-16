<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訳あり肉診断開始画面</title>    
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
              <div class="d-flex justify-content-center">
                <p>1</p>                                  
              </div>
              <div class="d-flex justify-content-center">
                <h2 class="d-flex justify-content-center p-3 mb-2 bg-danger text-dark">値段と品質を重視するなら品質を重視する</h2>
              </div>

              <form action="#" method="inspection">
                <input type="radio" name="q1" value="あてはまる"> あてはまる
                <input type="radio" name="q1" value="どちらかというとあてはまる"> どちらかというとあてはまる
                <input type="radio" name="q1" value="どちらともいえない"> どちらともいえない
                <input type="radio" name="q1" value="どちらかというとあてはまらない"> どちらかというとあてはまらない
                <input type="radio" name="q1" value="あてはまらない"> あてはまらない
                <button href="{{ route('viewers.finspection') }}" type="submit">next</button>
              </form>
              <a href="{{ route('viewers.finspection') }}">仮ボタン（次の画面へ）</a>   
            </div>
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>