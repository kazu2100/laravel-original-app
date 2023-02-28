<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿詳細</title>
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
                <h1>投稿詳細</h1>  

                @if (session('flash_message'))
                <p>{{ session('flash_message') }}</p>
                @endif

                <div>    
                    <a href="{{ route('items.index') }}">&lt; 戻る</a>                              
                </div>

                <div>
                    <div>
                       <h2>{{ $item->description }}</h2>
                       <p>{{ $item->html }}</p>     
                       <p>{{ $item->price_score }}</p>
                       <div>
                        <a href="{{ route('items.edit', $item) }}">編集</a>
                        <form action="{{ route('items.destroy', $item) }}" method="item">
                                    @csrf 
                                    @method('delete')
                                    <button type="submit">削除</button>
                                </form>
                       </div>
                    </div>
                </div>                 
            </div>
        </article>
    </main>

    <footer>        
        <p>&copy; オリジナルアプリ All rights reserved.</p>
    </footer>
</body>

</html>
