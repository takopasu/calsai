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
        <h1 class="title">サイゼリヤ<br>n[kcalガチャ]</h1>
        <hr>
            <div class='body'>
        <div class='saves'>
            @foreach($saves as $save)
            
                名前:
                <h3 class='name'>{{ $student->name }}</h3>  
                学籍番号:
                <h5 class="id">{{$student->id}}</h5>
                学年:
                <h5 class='grade'>{{ $student->grade }}</h5>
                年齢:
                <h5 class='age'>{{ $student->age }}</h5>
                
                <h5 class='subject'>
                
                {{-- ある生徒に関連する教科の数だけ繰り返す --}}
                @foreach($student->subjects as $subject)   
                    {{ $subject->subject_name }}
                @endforeach
                
                </h5>
                        
            @endforeach
            
        </div>
                        
            <div class='footer'>
                <a href ="/">戻る</a>
            </div>
        </div>
    </body>
</html>
</x-app-layout>