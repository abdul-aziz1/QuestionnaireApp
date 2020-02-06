<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>FIFA World Cup</h1>
    <p>FIFA Wold CupThe Wold CupThe Wold CupThe Wold CupThe Wold 
        CupThe Wold CupThe Wold CupThe Wold CupThe Wold CupThe 
        Wold CupThe Wold Cup
    </p>
    <hr>
    {{-- {{ dd($article ?? 'no id found') }} --}}

    <h1>{{ $article->title ?? 'No Title found' }}</h1>
    <p>
        {{ $article->body ?? 'No Body found' }}
    </p>

</body>
</html>