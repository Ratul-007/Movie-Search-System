<!DOCTYPE html>
<html>
<head>
    <title>Movie Search</title>
    <style>
        /* Reset */
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1f1f1f, #111);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #222;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.6);
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #f5c518; /* IMDb yellow accent */
            text-shadow: 0 2px 5px rgba(0,0,0,0.7);
        }

        form {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        input[type="text"] {
            flex: 1;
            padding: 12px 15px;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 1em;
            background: #333;
            color: #fff;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            background: #444;
            box-shadow: 0 0 8px #f5c518;
        }

        button {
            padding: 12px 20px;
            background: #f5c518;
            color: #111;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #e0b700;
            transform: scale(1.05);
        }

        .error {
            margin-top: 15px;
            color: #ff4d4d;
        }

        @media(max-width: 600px){
            form { flex-direction: column; }
            button { width: 100%; }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Search Movies</h1>
    @if(session('error'))
        <p class="error">{{ session('error') }}</p>
    @endif
    <form action="{{ route('movies.search') }}" method="get">
        <input type="text" name="query" placeholder="Type a movie name..." required>
        <button type="submit">Search</button>
    </form>
</div>
</body>
</html>
