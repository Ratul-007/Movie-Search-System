<!DOCTYPE html>
<html>
<head>
    <title>Favorite Movies</title>
    <style>
        body { font-family: Arial; background:#f8f8f8; padding:20px; }
        .container { max-width:1000px; margin:auto; }
        .movie-card {
            background:white; padding:15px; border-radius:10px;
            display:flex; gap:20px; margin-bottom:20px;
            box-shadow:0 2px 5px rgba(9, 0, 0, 0.1);
        }
        img { width:120px; border-radius:8px; }
        a { text-decoration:none; color:#007BFF; }
        .title { font-size:20px; font-weight:bold; }
    </style>
</head>
<body>

<div class="container">
    <a href="/" style="font-size:18px;">⬅ Back to Search</a>
    <h1>Your Favorite Movies</h1>

    @foreach($favorites as $movie)
        <div class="movie-card">
            <img src="{{ $movie->poster }}" alt="Poster">

            <div>
                <p class="title">{{ $movie->title }} ({{ $movie->year }})</p>
                <p><strong>Genre:</strong> {{ $movie->genre }}</p>
                <p><strong>Director:</strong> {{ $movie->director }}</p>
                <p><strong>IMDB Rating:</strong> ⭐ {{ $movie->imdb_rating }}</p>
                <a href="{{ route('movies.show', $movie->omdb_id) }}">➡ View Details</a>
            </div>
        </div>
    @endforeach

    @if($favorites->isEmpty())
        <p>No favorite movies saved yet.</p>
    @endif
</div>

</body>
</html>
