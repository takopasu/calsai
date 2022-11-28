<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>サイゼリヤn[円]ガチャ</title>
        <link href="css/calsai.css" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <h1 class="title">サイゼリヤ<br>{{$input['input']}}[円]ガチャ</h1>
        <hr>
        <div class='body'>
            <div class=box1>
                <form action="/price_input" method="POST">
                    @csrf
                    <div class=textbox>
                        <input type="text" name="price" value="{{$input['input']}}"> [円]
                    </div>
                    <div class = "buttonarea">
                        <button type=“submit” class=btn>ガチャを回す</button>
                    </div>
                
                <div class= "inline_block">
                    <label>
                        <span class="switch child">大人version(お酒あり)</span>
                        <div class="toggle_button child">
                            <input id="toggle" class="toggle_input" name='switch' type='checkbox' @if($input['switch'] == 1) checked @endif/>
                            <label for="toggle" class="toggle_label"/>
                        </div>
                    </label>
                </div>
                </form>
                
                <div class=link>
                    <a href=http://book.saizeriya.co.jp/menu2209_j/book/#target/page_no=1 id=grand>グランドメニュー(公式)</a>
                    <br>
                    <a href=https://fukla-health.com/tools/eer id=check_cal>1日に必要カロリーの計算</a>
                </div>
            </div>
            
            <hr>
            
            @if($input['input'] != 0) 
            @php
                $price = 0;
                $kcal = 0;
                $salt = 0;
            @endphp
            
            @foreach ($menus as $menu)
            <div class='box2'>
                <div class='order_num'>{{ $menu->order_num }}</div>
                <div class='inline_block'>
                    <h2 class='menu_name'>{{ $menu->menu_name }}</h2>
                    <p class='rst'>{{ $menu->price }}円  {{ $menu->kcal }}kcal  {{ $menu->salt }}g</p>
                    
                    @php
                    $price += $menu->price;
                    $kcal += $menu->kcal;
                    $salt += $menu->salt;
                    @endphp
                </div>
            </div>
            @endforeach
            
            <div class='box2'>
                <div class='inline_block'>
                    <p class='rst'>合計 {{ $price }}円  {{ $kcal }}kcal  {{ $salt }}g</p>
                </div>
            </div>
            
            <div>
                <a href="/save" class="save">結果を保存する</a>
            </div>
            @endif
        </div>
    </body>
</html>
</x-app-layout>

