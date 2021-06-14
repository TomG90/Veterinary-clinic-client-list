{{-- {{dd($client)}} --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\details.css">
    <title>{{ $client[0]->surname}}</title>
</head>
<body>
        <div class="card">
            {{-- @foreach ($client as $item) --}}

            <h1>{{$client[0]['name'] . ' ' . $client[0]['surname']}}</h1>
            <p>Address: {{ $client[0]['adress'] }}</p>
            <p>E-mail: {{ $client[0]['email'] }}</p>
            <p>Phone number: {{ $client[0]['number'] }}</p>
            <h3>Owner of: <br>
                @foreach ($client[0]['pets'] as $pet)
                    <li> <a href=" {{ action('PetsController@details', [$pet->id]) }}"> {{ $pet->name }} </a></li>
                @endforeach 
            </h3>
                
            {{-- @endforeach --}}
            
        </div>
</body>
</html>