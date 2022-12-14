<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>サイゼリヤn[kcal]ガチャ</title>
        <link href="css/calsai.css" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <style>
            select{
              width: 60%;
            }
        </style>
        <h1 class="title">サイゼリヤ<br>{{$input['input']}}[kcal]ガチャ</h1>
        <hr>
        <div class='body'>
            <div class=box1>
                <form action="/kcal_input" method="POST">
                    @csrf
                    <div class=textbox>
                        <input type="text" name="kcal" value="{{$input['input']}}"> [kcal]
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
                
                <div>
                    <h2 class='h2'>以下のものをガチャ結果に含める</h2>
                    <select name='select' class='text-center mb-4'>
                        <optgroup label=""></optgroup>
                        <option>選択してください</option>
                        @foreach($all_menus as $menu)
                                @if (!empty($select_menu) && $menu->id === $select_menu->id)
                                    <option value="{{ $menu->id }}" selected="selected">{{ $menu->menu_name }}</option>
                                @else
                                    <option value="{{$menu->id}}">{{$menu->menu_name}}</option>
                                @endif
                        @endforeach
                    </select>
                </div> 
                
                </form>
                
                <div class="link">
                    <a href=http://book.saizeriya.co.jp/menu2209_j/book/#target/page_no=1 id=grand class='url'>グランドメニュー(公式)</a>
                    <br>
                    <a href=https://fukla-health.com/tools/eer id=check_cal class='url'>1日に必要なカロリーの計算(参考)</a>
                </div>
            </div>
            
            <hr>
            
            @if($input['input'] != 0) 
            @php
                $price = 0;
                $kcal = 0;
                $salt = 0;
                $select_menu = $all_menus->find($input['select']);
            @endphp
            
            @if($select_menu != NULL)
                @if($select_menu->kcal >= $input['input'])
                <h2 class="box3 child h2 mb">選択したメニューのカロリーが設定値以下のため対象外です</h2>
                @endif
            @endif
            
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
                <a href="/is_saved" class="save">結果を保存する</a>
            </div>
            @endif
        </div>
    </body>
</html>
</x-app-layout>