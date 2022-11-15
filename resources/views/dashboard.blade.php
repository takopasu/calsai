<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('このサイトについて') }}
        </h2>
    </x-slot>
    <head>
        <meta charset="utf-8">
        <title>このサイトについて</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"  rel="stylesheet">
        <link href="css/dashboard.css" rel="stylesheet">
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                    <h1 class="">このサイトについて</h1>
                    <p>このサイトは、
                        有志により開発された非公式ファンサイトです。
                        
                        <a href =https://saizeriya-1000yen.marusho.io/>サイゼリヤ1000円ガチャ</a>、
                        <a href =https://saizeria-gacha.web.app/>サイゼリヤN円ガチャ</a>を参考に作成いたしました。
                        
                        サイゼリヤメニューを美味しく頂ける範囲で、
                        用法用量を守って正しくお使いください。
                        メニューは実際の取扱と異なることがあります
                        ご注文の際は、店舗や注文サイトに掲載されている情報をご確認ください。
                        
                        <h2>メニューについて</h2>
                        <a href = http://book.saizeriya.co.jp/library/menu1907/book/list>グランドメニュー</a>を参照しています
                        
                        カロリー・塩分の記載が無い商品については、0kcal・塩分0gとしています。
                        また、Wサイズはカロリー・塩分2倍、パスタの大盛は1.5倍、
                        ピザのWチーズはトッピングチーズの値を加算したものを使用しています。
                        
                        (2022.11.15 更新)
                        <h2>免責事項</h2>
                        当サイトにご利用されたことで直接・間接的に生じた損失に関し一切責任を負いかねます
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
