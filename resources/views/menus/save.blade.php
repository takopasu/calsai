<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>保存内容</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600"  rel="stylesheet">
        <link href="css/calsai.css" rel="stylesheet">
    </head>
    <body class='antialiased'>
        <br>
        <h1 class="title">保存内容</h1>
        <hr>
            <div class='body'>
            <a href='/only_favorite' class='url link body'>お気に入りのみはこちら</a>
            <br>
            
            @foreach($saves as $save)
                @if($save["is_saved"] === 0)
                @else
                    <div class='box3'>
                        <form action='/show' method='POST'>
                            @csrf
                            <button type='submit' name='show' class='show' value ="{{$save['id']}}">保存日時: {{ $save->created_at }}</button>
                        </form>
                    </div>
                @endif
            @endforeach
        </div>
    </body>
</html>
</x-app-layout>