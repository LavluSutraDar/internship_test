<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="grid.css">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Hello, Apurva!</title>
</head>

<body>

  <div class="container">
    @foreach ($posts as $post)
        <div class="header">{{$post->created_at}}</div>
    <div class="sidebar">{{$post->title}}</div>

    <div class="content1">{{$post->image}}</div>

    <div class="content2">Content2</div>
    <div class="content3">Content3</div>
    <div class="content4">Content4</div>
    <div class="content5">Content5</div>
    <div class="content6">Content6</div>
    <div class="footer">https://github.com/LavluSutraDar/internship_test</div>
        
    @endforeach

  </div>

</body>

</html>