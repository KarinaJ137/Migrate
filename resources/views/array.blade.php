<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="card__grid">
    @foreach($array as $i)
    <div>
        <img src="{{ Vite::asset('resources/image/'.$i['path']) }}">
        <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur dolores quia vel, asperiores consectetur omnis doloremque corporis expedita amet mollitia labore ut, aut fuga, natus veniam nobis quas. Commodi, pariatur!</p>
    </div>   
    @endforeach
    </div>
</body>
</html>