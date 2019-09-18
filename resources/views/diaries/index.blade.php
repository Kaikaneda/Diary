<?php
//目的は？
//bladeとはららベルで画面の表示するファイルに直接ＰＨＰを記述することが出来る
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>一覧画面</title>
</head>
<body>
    <h1>一覧画面</h1>
<!--@foreachはblameに限りそこにｐｈｐの世界を作ることが出来る-->
<!--DairyControllerの中にある情報を｛｛｝｝で呼び出した-->
    @foreach($diaries as $diary)
    <div class="m-4 p-4 border border-primry">
        <p>{{$diary->title}}</p>
        <p>{{$diary->body}}</p>
        <p>{{$diary->created_at}}</p>
    </div>
    @endforeach
</body>
</html>