<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保存内容</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"  rel="stylesheet">
        <link href='css/calsai.css' rel="stylesheet">
    </head>
    <body class='antialiased'>
        <br>
            <h1 class="title">保存内容</h1>
        <hr>
        <div class='body'>
            @php
                $price = 0;
                $kcal = 0;
                $salt = 0;
            @endphp
                
            @foreach($save->menus as $menu)   
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
            
            
            <form action="/delete" method="post">
                @csrf
                @method('put')
                <div class='saves'>
                    <button type='submit' name='delete' value = "{{$save['id']}}">削除する</button>
                </div>
            </form>
            
            <form action="/favorite" method="POST">
                @csrf
                @method('PUT')
                <div class= "inline_block">
                    <label>
                        <div class='child'>
                            <span>
                                お気に入り
                            </span>
                            <input  type='checkbox'name='add_favorite' @if($save['is_favorite'] == 1) checked @endif />
                        </div>
                    </label>
                    <span>
                        <button type='submit' name='favorite' value = "{{$save['id']}}" > 保存する</button>
                    </span>
                </div>
            </form>
            <div>
                <a href ='/saves'>戻る</a>
            </div>
        </div>
    </body>
</html>
</x-app-layout>