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
                <img src="{{ asset('img/title1.png') }}" width="50%">  
              </div>  
              <div class="d-flex justify-content-center">
                  <img src="{{ asset('img/inspection.jpg') }}" width="30%">
              </div>
              {{-- <div  class="d-flex justify-content-center">
                <p>今あなたが最も欲しい訳あり肉は、、、</p>                                  
              </div> --}}
              <div  class="d-flex justify-content-center">
                {{-- <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:624px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:300px"><a href="https://hb.afl.rakuten.co.jp/ichiba/3124a6ab.9b54f074.3124a6ad.39150263/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fnikunoyamada%2Ftrimming1kg%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIzMDB4MzAwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjEsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/3124a6ab.9b54f074.3124a6ad.39150263/?me_id=1344688&item_id=10000023&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fnikunoyamada%2Fcabinet%2Fwagyu%2Ftrimming%2Fkiriotoshi_20.jpg%3F_ex%3D300x300&s=300x300&t=picttext" border="0" style="margin:2px" alt="[商品価格に関しましては、リンクが作成された時点と現時点で情報が変更されている場合がございます。]" title="[商品価格に関しましては、リンクが作成された時点と現時点で情報が変更されている場合がございます。]"></a></td><td style="vertical-align:top;width:308px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/3124a6ab.9b54f074.3124a6ad.39150263/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fnikunoyamada%2Ftrimming1kg%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIzMDB4MzAwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjEsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >[ P20倍・小分け可能 ] 黒毛和牛 A4 切り落とし 佐賀牛 宮崎牛 和牛 訳あり メガ盛り 2kg 和牛 切落し 小間切れ お得 お徳用 牛 牛肉 肉 お肉 自宅用 ストック 人気 小分け 送料無料 プレゼント 肉 食品 肉 訳あり 肉 祝い 母の日 母の日ギフト 母の日プレゼント</a><br><span >価格：31,800円（税込、送料無料)</span> <span style="color:#BBB">(2023/4/4時点)</span></p><div style="margin:15px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/3124a6ab.9b54f074.3124a6ad.39150263/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fnikunoyamada%2Ftrimming1kg%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIzMDB4MzAwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjEsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:5px"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/3124a6ab.9b54f074.3124a6ad.39150263/?pc=https%3A%2F%2Fitem.rakuten.co.jp%2Fnikunoyamada%2Ftrimming1kg%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIzMDB4MzAwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjEsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjowLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:50%;height:32px;background-color:#bf0000;color:#fff!important;font-size:14px;font-weight:500;line-height:32px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table> --}}
                {!! $item->html !!}
              </div>
              <div class="d-flex justify-content-center">
                <p>{{ $item->description }}</p>
              </div>
              <div class="d-flex justify-content-center my-4">
                <button class="btn btn-danger w-25" onclick="location.href='{{ route('viewers.home') }}'" class="#" type="try-button">もう一度診断ボタン</button>
              </div>
              <div class="d-flex justify-content-center my-4">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="今、あなたが最も欲しい訳あり肉を診断します！" data-show-count="false">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>
        </article>
    </main>

    <footer class="d-flex justify-content-center">        
        <p>&copy; 訳あり肉診断 All rights reserved.</p>
    </footer>
</body>

</html>