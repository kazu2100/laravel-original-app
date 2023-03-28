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
                  <img src="{{ asset('img/inspection.jpg') }}" width="30%">
              </div>
              <div>
                <div class="d-flex justify-content-center">
                  @yield('number')             
                </div>
                <div class="d-flex justify-content-center">
                  <h2 class="d-flex justify-content-center p-3 mb-2 bg-danger text-dark">@yield('question')</h2>
                </div>
                @yield('finish')
                <div class="d-flex justify-content-center">
                  @yield('form')
                  {{-- <form action="#" method="inspection">
                    <div class="form-check">
                      <input type="radio" name="score" value="あてはまる"> あてはまる
                    </div>
                    <div class="form-check">
                      <input type="radio" name="score" value="どちらかというとあてはまる"> どちらかというとあてはまる
                    </div>
                    <div class="form-check">
                      <input type="radio" name="score" value="どちらともいえない"> どちらともいえない
                    </div>
                    <div class="form-check">
                      <input type="radio" name="score" value="どちらかというとあてはまらない"> どちらかというとあてはまらない
                    </div>
                    <div class="form-check">
                      <input type="radio" name="score" value="あてはまらない"> あてはまらない
                    </div>
                    <div class="form-check">
                      <button href="{{ route('inspection.finish') }}" type="submit">next</button>
                    </div>
                  </form> --}}
                </div> 
              </div>
            </div>
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>