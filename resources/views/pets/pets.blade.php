<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet List</title>
    <link rel="stylesheet" href="/CSS/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
</head>
<body>

    <form action="{{ action('PetsController@index') }}" method="GET">


        <label for="search"> Search: </label>
        <input type="text" name="search" id="search">
        <button>search</button>

    </form>

<ul>
   {{-- if the array $search is set, uses $search to loop through and create desired list, otherwise uses default $pets--}}
    @foreach(isset($search) ? $search : $pets as $pet)
    <li>

        <div class="card">
            <div class="img">
                <img src="{{ $pet->img }}" alt="">
            </div>
            <div class="info">
                <h2>Good puppy <a href="{{ action('PetsController@index') }}/{{$pet->id}}">{{ $pet->name }}</a></h2>
                <p> Owner: Mr./Ms. <a href="{{ action('ClientsController@details', [$pet->client->id]) }}">{{ $pet->client->surname }}</a></p>
            </div>
        </div>
    </li>
    @endforeach
    </ul>
</body>
</html>