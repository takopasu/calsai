<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('保存内容') }}
        </h2>
    </x-slot>
    
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保存内容</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"  rel="stylesheet">
        <link href="css/calsai.css" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <h1 class="title">サイゼリヤ<br>n[kcalガチャ]</h1>
        <hr>
            <div class='body'>
                <?php
                    $price = 0;
                    $kcal = 0;
                    $salt = 0;
                ?>
                
                @foreach($menus as $menu)
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
                
            <div class='footer'>
                <a href ="/">戻る</a>
            </div>
        </div>
    </body>
</html>
</x-app-layout>