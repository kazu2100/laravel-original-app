<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿編集</title>    
</head>
 
<body>
    <header>
        <nav>
            <div>                
                <a href="{{ route('items.index') }}">オリジナルアプリ</a>          
            </div>
         </nav>
    </header>
 
    <main>
        <article>
            <div>                
                <h1>投稿編集</h1>   
                 
                <div>
                    <a href="{{ route('items.index') }}">&lt; 戻る</a>                                  
                </div>
                 
                <form action="{{ route('items.update', $item) }}" method="post">
                     @csrf
                     @method('patch')
                    <div>
                        <label for="description">詳細</label>
                        <input type="text" name="description" value="{{ $item->description }}">
                    </div>
                    <div>
                        <label for="html">HTML</label>
                        <textarea name="html">{{ $item->html }}</textarea>
                   </div>
                   <div>
                        <label for="price_score">価格点数</label>
                        <input type="text" name="price_score" value="{{ $item->price_score }}">
                    </div>
                   <button type="submit">更新</button>
               </form>
             </div>
       </article>
    </main>

    <footer>        
        <p>&copy; オリジナルアプリ All rights reserved.</p>
    </footer>
</body>

</html>