<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1f1f1f, #111);
            color: #fff;
            min-height: 100vh;
            padding: 30px 15px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #f5c518;
            font-size: 2em;
            text-shadow: 0 2px 5px rgba(0,0,0,0.7);
        }

        .movie-card {
            display: flex;
            background: #222;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 20px;
            gap: 20px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.6);
            transition: transform 0.3s, box-shadow 0.3s;
            align-items: center;
        }

        .movie-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.8);
        }

        .movie-card img {
            width: 120px;
            border-radius: 8px;
            object-fit: cover;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
        }

        .movie-info {
            flex: 1;
        }

        .movie-info h2 {
            font-size: 1.5em;
            margin-bottom: 8px;
            color: #f5c518;
        }

        .movie-info p {
            margin-bottom: 5px;
            font-size: 0.95em;
        }

        .link-btn {
            display: inline-block;
            margin-top: 10px;
            margin-right: 8px;
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .youtube-link {
            background: #FF0000;
            color: #fff;
        }

        .youtube-link:hover {
            background: #cc0000;
            transform: scale(1.05);
        }

        .imdb-link {
            background: #f5c518;
            color: #111;
        }

        .imdb-link:hover {
            background: #e0b700;
            transform: scale(1.05);
        }

        .justwatch-link {
            background: #00bcd4;
            color: #fff;
        }

        .justwatch-link:hover {
            background: #0097a7;
            transform: scale(1.05);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 30px;
            color: #f5c518;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #e0b700;
        }

        @media(max-width: 768px){
            .movie-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .movie-card img {
                width: 80%;
                max-width: 200px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Search Results for "{{ $query }}"</h1>

    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="movie-card">

                @if($movie['Poster'] != 'N/A')
                    <img src="{{ $movie['Poster'] }}" alt="{{ $movie['Title'] }}">
                @endif

                <div class="movie-info">
                    <h2>{{ $movie['Title'] }}</h2>
                    <p><strong>Year:</strong> {{ $movie['Year'] }}</p>
                    <p><strong>Type:</strong> {{ ucfirst($movie['Type']) }}</p>

                    <!-- YouTube -->
                    <a class="link-btn youtube-link" target="_blank"
                       href="https://www.youtube.com/results?search_query={{ urlencode($movie['Title'].' full movie') }}">
                        Watch on YouTube
                    </a>

                    <!-- IMDb -->
                    <a class="link-btn imdb-link" target="_blank"
                       href="https://www.imdb.com/title/{{ $movie['imdbID'] }}/">
                        View on IMDb
                    </a>

                    <!-- JustWatch -->
                    <a class="link-btn justwatch-link" target="_blank"
                       href="https://www.justwatch.com/search?q={{ urlencode($movie['Title']) }}">
                        Where to Watch
                    </a>

                </div>
            </div>
        @endforeach
    @else
        <p style="text-align:center; font-size:1.2em; margin-top:20px;">
            No movies found for "{{ $query }}"
        </p>
    @endif

    <a class="back-link" href="/">← Back to Search</a>
</div>
</body>
</html>
