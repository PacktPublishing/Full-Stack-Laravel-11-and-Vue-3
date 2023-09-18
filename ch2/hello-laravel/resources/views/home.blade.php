<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
<ul>
    <h1>Books</h1>
    @foreach($books as $book)
        <li>
            {{ $book->title  }}
            <br>
            {{ $book->author  }}
        </li>
    @endforeach
</ul>
</body>
</html>
