<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>This is About Page</p>
    @foreach ($article as $articles)
        <h1>{{ $articles->title }}</h1>
        <p>{{ $articles->body }}</p>
        <hr>
    @endforeach
    
</body>
</html>