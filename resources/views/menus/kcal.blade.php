<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ガチャを引いたよ') }}
        </h2>
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ガチャを引いたよ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"  rel="stylesheet">
        <link href="css/calsai.css" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <h1 class="title">サイゼリヤ<br>n[kcalガチャ]</h1>
        <hr>
            <div class='body'>
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
                        <?php 
                        $price += $menu->price;
                        $kcal += $menu->kcal;
                        $salt += $menu->salt;
                        ?>
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
    
        <div class=box1>
            <form action="/input" method="POST">
                @csrf
                <div class=textbox>
                    <input type="text" name="kcal" value=1000> [kcal]
                </div>
                <div class = "buttonarea">
                    <button type=“submit” class=btn onclick="location.href='/kcal'">ガチャを回す</button>
                </div>
            </form>
            
            <div class= "inline_block">
                <label>
                    <span class="switch child">大人version(お酒あり)</span>
                    <div class="toggle_button child">
                        <input id="toggle" class="toggle_input" type='checkbox' />
                        <label for="toggle" class="toggle_label"/>
                    </div>
                </label>
            </div>
            
            <div class=link>
                <a href=http://book.saizeriya.co.jp/menu2209_j/book/#target/page_no=1 id=grand>グランドメニュー(公式)</a>
                <br>
                <a href=https://fukla-health.com/tools/eer id=check_cal>1日に必要カロリーの計算</a>
            </div>
    
        </div>
                <div class='footer'>
                    <a href ="/">戻る</a>
                </div>
        </div>
    </body>
</html>
</x-app-layout>