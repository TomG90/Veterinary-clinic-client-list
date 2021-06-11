<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet List</title>
</head>
<body>
<ul>
    @foreach($pets as $pet)
    <li>
    <h2><a href="{{ action('PetsController@index') }}/{{$pet->id}}">{{ $pet->name }}</a></h2>
    <img src="{{ $pet->img }}" alt="">
    <p>{{ $pet->client->surname }}</p>
    
    </li>
    @endforeach
    </ul>
</body>
</html>