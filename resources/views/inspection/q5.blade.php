{{-- <!DOCTYPE html>
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
              <div class="d-flex justify-content-center">
                <img src="{{ asset('img/4.jpg') }}" width="10%">                         
              </div>
              <div class="d-flex justify-content-center">
                <h2 class="d-flex justify-content-center p-3 mb-2 bg-danger text-dark">値段と品質を重視するなら品質を重視する</h2>
              </div>

              <div class="d-flex justify-content-center">
                <form action="{{ route('inspection.show', 'q5') }}" method="inspection">
                  <div class="form-check">
                    <input type="radio" name="score" value="5"> あてはまる
                  </div>
                  <div class="form-check">
                    <input type="radio" name="score" value="4"> どちらかというとあてはまる
                  </div>
                  <div class="form-check">
                    <input type="radio" name="score" value="3"> どちらともいえない
                  </div>
                  <div class="form-check">
                    <input type="radio" name="score" value="2"> どちらかというとあてはまらない
                  </div>
                  <div class="form-check">
                    <input type="radio" name="score" value="1"> あてはまらない
                  </div>
                  <input type="hidden" name="total_score" value="{{ $total_score }}">
                  <div class="form-check">
                    <button href="{{ route('inspection.finish') }}" type="submit">next</button>
                  </div>
                </form>
              </div>
              <a href="{{ route('inspection.finish') }}">仮ボタン（次の画面へ）</a>   
            </div>
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html> --}}

@extends('layouts.app')

@section('number') 
  <img src="{{ asset('img/5.jpg') }}" width="10%">
@endsection

@section('question', '食べ物にはお金を惜しまない')

@section('form')
<form action="{{ route('inspection.show', 'q6') }}" method="get">
  @csrf
  <div class="form-check">
    <input type="radio" name="score" value="5"> あてはまる
  </div>
  <div class="form-check">
    <input type="radio" name="score" value="4"> どちらかというとあてはまる
  </div>
  <div class="form-check">
    <input type="radio" name="score" value="3"> どちらともいえない
  </div>
  <div class="form-check">
    <input type="radio" name="score" value="2"> どちらかというとあてはまらない
  </div>
  <div class="form-check">
    <input type="radio" name="score" value="1"> あてはまらない
  </div>
  <input type="hidden" name="total_score" value="{{ $total_score }}">
  <div class="form-check">
    <button href="{{ route('inspection.finish') }}" type="submit">next</button>
  </div>
</form>
@endsection