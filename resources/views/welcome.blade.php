<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies</title>
    @vite('resources/js/app.js')
</head>
<body class="bg-dark">
    <header>
        <h1 class="text-uppercase text-center py-5 text-light">laravel movies</h1>
    </header>
    <main>
        <div class="container">
            <div class="row d-flex flex-wrap gap-5 gy-5">
                @foreach ($movies as $movie )
                <div class="col-2">                   
                    <div class="card d-flex justify-content-center align-items-center text-center gap-3 bg-primary text-light">
                        <h2 class="text-dark">Titolo: {{ $movie->title }}</h2>
                        <h3>Titolo originale: {{ $movie->original_title }}</h3>
                        <p>Nazionalità film: <br>{{ $movie->nationality }}</p>
                        <time>Data di uscita: {{ $movie->date }}</time>
                        <span class="score">Voto: {{ $movie->vote }}</span>
                    </div>                   
                </div>
                @endforeach
        </div>
    </main>
</body>
</html>