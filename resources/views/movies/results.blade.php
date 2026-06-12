<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
        body { font-family: Arial; background:#f2f2f2; padding:40px; }
        .container {
            max-width:600px; margin:auto; background:white; padding:30px;
            border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        .movie {
            padding:12px; background:#fafafa; border:1px solid #ddd;
            border-radius:6px; margin-bottom:10px;
        }
        a {
            display:inline-block; margin-top:20px; text-decoration:none;
            padding:10px 15px; background:#0099ff; color:white; border-radius:6px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Search results for: <b>{{ $query }}</b></h2>

    @if(count($results) > 0)
        @foreach($results as $movie)
            <div class="movie">{{ $movie }}</div>
        @endforeach
    @else
        <p>No movies found.</p>
    @endif

    <a href="/">🔙 Back to Search</a>
</div>

</body>
</html>
