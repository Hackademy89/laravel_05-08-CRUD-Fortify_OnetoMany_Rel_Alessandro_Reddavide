<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Director;
use App\Models\Platform;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    function index()
    {
        $movies = Movie::all(); /*ricavo tutti i film*/
        // $movie = Movie::orderby('title')->get();


        return view('movie.index', compact('movies'));
    }
    function create()
    {
        /*callback creazione movie*/

        $directors = Director::orderBy('name')->get();
        $platforms = Platform::orderBy('name')->get();

        return view('movie.create', compact('directors', 'platforms'));
    }
    function store(MovieRequest $request)   /*callback inserimento movie*/
    {
        $movie = Movie::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'director_id' => $request->input('director_id'),
            'genere' => $request->input('genere'),
            'description' => $request->input('description'),
            'img' => ($request->File('img') == null) ? 'default.jpg' : $request->file('img')->store('public/img'),
        ]);

        $platforms = $request->input('platforms'); /*prendo i platform dal form*/

        $movie->platforms()->attach($platforms);   /*inserisco i platform nel db*/

        return to_route('movie.create')->with('success', 'movie Inserito con successo');
    }

    public function show(Movie $movie)
    {              /*callback show movie, passo id*/
        // $movie = Movie::findorFail($id); /*cerco il film con id passato nel db*/
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        return view('movie.edit', compact('movie'));
    }

    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update([
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'director' => $request->input('director'),
            'genere' => $request->input('genere'),
            'description' => $request->input('description'),
            'img' => ($request->File('img') == null) ? $movie->img : $request->file('img')->store('public/img'),
        ]);

        return to_route('movie.index')->with('success', 'movie Modificato con successo');
    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        Storage::delete($movie->img);
        return to_route('movie.index')->with('success', 'movie Eliminato con successo');
    }
}
