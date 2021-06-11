<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\css\details.css">
    <title>{{ $details->name}}</title>
</head>
<body>
    <h1>{{ $details->name}}</h1>
    <h3>(Owner: {{ $details->client->surname }})</h3>
    <img class="doggo-pic" src="{{ $details['img']}}" alt="">

    <h3>Symptoms</h3>
    {{ $details['symptoms']}}
    <h3>Medical History</h3>
    {{ $details['medical_history']}}
</body>
</html>