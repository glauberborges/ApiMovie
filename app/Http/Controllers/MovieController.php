<?php

namespace App\Http\Controllers;

use App\Cast;
use App\Movies;
use App\PvMovieCast;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'         => 'required|unique:movies|max:100|string',
            'release_date'  => 'required|date_format:Y-m-d',
            'duration'      => 'required|date_format:h:i:s',
            'genre_id'      => 'required|exists:genre_movies,id|integer',
            'director_id'   => 'required|exists:directors,id|integer',
            'cast'          => 'required|exists:casts,id|array',
            'cast.*'        => 'required|exists:casts,id|integer',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->getMessages(), 401);
        }

        $movie = new Movies();

        $movie->title = $request->input('title');
        $movie->release_date = $request->input('release_date');
        $movie->duration = $request->input('duration');
        $movie->genre_id = $request->input('genre_id');
        $movie->director_id = $request->input('director_id');
        $movie->save();

        foreach ($request->input('cast') as $cast) {
            $pv_movie_cast = new PvMovieCast();
            $pv_movie_cast->movie_id    = $movie->id;
            $pv_movie_cast->cast_id     = $cast;
            $pv_movie_cast->save();
        }

        return response()->json(['mensagem'=> 'success'], 200);
    }
}
