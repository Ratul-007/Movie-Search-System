<!DOCTYPE html>
<html>
<head>
    <title>{{ $movie['Title'] }} - Details</title>
    <style>
        body { background:#f4f4f4; font-family: Arial; padding:20px; }
        .container { max-width:900px; margin:auto; background:white; padding:20px;
            border-radius:10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }

        .header a { text-decoration:none; color:#007BFF; font-size:18px; }

        .movie-wrapper { display:flex; gap:20px; margin-top:20px; }
        img { width:300px; border-radius:10px; }

        .info { flex:1; }
        .title { font-size:28px; font-weight:bold; }
        .section { margin:10px 0; font-size:18px; }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <a href="{{ route('movies.search') }}?query=avengers">⬅ Back to Search</a>
    </div>

    <div class="movie-wrapper">
        <img src="{{ $movie['Poster'] }}" alt="{{ $movie['Title'] }}">

        <div class="info">
            <div class="title">{{ $movie['Title'] }} ({{ $movie['Year'] }})</div>

            <div class="section"><strong>Genre:</strong> {{ $movie['Genre'] }}</div>

            <div class="section"><strong>Runtime:</strong> {{ $movie['Runtime'] }}</div>

            <div class="section"><strong>IMDB Rating:</strong> {{ $movie['imdbRating'] }}</div>

            <div class="section"><strong>Plot:</strong><br> {{ $movie['Plot'] }}</div>

            <form method="POST" action="{{ route('movies.favorite') }}">
                @csrf
                <input type="hidden" name="movie_id" value="{{ $movie['imdbID'] }}">
                <button style="padding:10px 20px; margin-top:20px;">Add to Favorites</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>
