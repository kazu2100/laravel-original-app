<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訳あり肉診断ホーム画面</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <header>
        <nav>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('img/title1.png') }}" width="50%">
                <!-- <a href="{{ route('viewers.home') }}">訳あり肉診断</a>             -->
            </div>
        </nav>
    </header>
    
    <main>
        <article>
            <div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/home.jpg') }}" width="50%">
                </div>
                <div class="d-flex justify-content-center">                   
                    <h2 class="d-flex justify-content-center p-3 mb-2 bg-danger text-dark">今、あなたが最も欲しい訳あり肉を診断します！</h2>         
                </div>
                <div class="d-flex justify-content-center">
                    <p>
                        質問に答えていくとで、あなたが今、
                        最も欲しい訳あり肉を診断します！
                    </p>
                </div>
                <div class="d-flex justify-content-center">
                    <h3>
                    「診断」ボタンクリック↓
                    </h3>
                </div>
                <div class="d-flex justify-content-center my-4">
                    <button class="btn btn-danger w-25" onclick="location.href='{{ route('inspection.show', 'q1') }}'"class="#" type="share-button">診断開始</button>
                </div>
                <div class="d-flex justify-content-center my-4">
                    <div>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="今、あなたが最も欲しい訳あり肉を診断します！" data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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