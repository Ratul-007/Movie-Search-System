<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (!$query) {
            return redirect('/')->with('error', 'Please enter a movie name.');
        }

        $apiKey = env('OMDB_API_KEY');

        // OMDb API URL
        $url = "http://www.omdbapi.com/?apikey={$apiKey}&s=" . urlencode($query);

        $response = Http::get($url);

        if ($response->successful() && $response->json()['Response'] === 'True') {
            $movies = $response->json()['Search'];
        } else {
            $movies = [];
        }

        return view('movies.search', compact('movies', 'query'));
    }
}
