<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('サイゼリヤn[kcal]ガチャ') }}
        </h2>
    </x-slot>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>サイゼリヤn[kcal]ガチャ</title>
        <link href="css/calsai.css" rel="stylesheet">
    </head>
    <body>
        <div class='body'>
            <h1 class="title">サイゼリヤ<br>n[kcalガチャ]</h1>
            <hr>
            <div class=box1>
                <div class=textbox>
                    <input type="text" placeholder="ここに入力してください"> [kcal]
                </div>
                <div class = "buttonarea">
                    <div>
                        <a href="/get" class="btn">ガチャを回す</a>
                    </div>
                </div>
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
        </div>
    </body>
</html>
</x-app-layout>