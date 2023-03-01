<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>訳アリ商品紹介商品一覧</title>
 </head>
 
 <body>
     <header>
         <nav>
             <div>
                 <a href="#">オリジナルアプリ</a>            
             </div>
         </nav>
     </header>
     
     <main>
         <article>
             <div>                
                 <h1>訳アリ商品紹介商品一覧</h1>
                 @if (session('flash_message'))
                    <p>{{ session('flash_message') }}</p>
                @endif
                <div>
                    <a href="{{ route('items.create') }}">新規追加</a>                                   
                </div>     
                @foreach($items as $item)
                     <div>
                         <div>
                             <h2>{{ $item->description }}</h2>
                             <p>{{ $item->html }}</p>     
                             <p>{{ $item->price_score }}</p>
                             <div>
                                <a href="{{ route('items.show', $item) }}">詳細</a>
                                <a href="{{ route('items.edit', $item) }}">編集</a>
                                <form action="{{ route('items.destroy', $item) }}" method="post">
                                    @csrf 
                                    @method('delete')
                                    <button type="submit">削除</button>
                                </form>
                             </diV>    
                         </div>
                     </div>
                 @endforeach           
             </div>
         </article>
     </main>
 
     <footer>        
         <p>&copy; オリジナルアプリ All rights reserved.</p>
     </footer>
 </body>
 
 </html>