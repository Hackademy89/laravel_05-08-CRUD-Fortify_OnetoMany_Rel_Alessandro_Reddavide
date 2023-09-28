<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Requests\MovieRequest;
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
        return view('movie.create');
    }
    function store(MovieRequest $request)   /*callback inserimento movie*/
    {           
        $title=$request->input('title');     /*salvo nelle variabili i valori inseriti nel form*/
        $year=$request->input('year');
        $director=$request->input('director');
        $genere=$request->input('genere');
        $description=$request->input('description');

        if ($request->hasFile('img')==null){
            $img='default/default.jpg';
        } else{
        $img=$request->file('img')->store('public/img');
        }

        $movie= new Movie(); /*creo un nuovo oggetto*/
        
        $movie->title = $title; /*salvo i valori inseriti nel form*/
        $movie->year = $year;   
        $movie->director = $director;
        $movie->genere = $genere; 
        $movie->description = $description;
        $movie->img = $img;
        
        $movie->save();

        return to_route('movie.create')->with('success','movie Inserito con successo');

        
    }

    public function show(Movie $movie){ /*callback show movie, passo id*/
        // $movie = Movie::findorFail($id); /*cerco il film con id passato nel db*/
        return view('movie.show', compact('movie'));
    }
 
    public function edit(Movie $movie){
        return view('movie.edit', compact('movie'));
    }
    
    public function update(MovieRequest $request, Movie $movie){
        $movie->update([
            'title'=>$request->input('title'),
            'year'=>$request->input('year'),
            'director'=>$request->input('director'),
            'genere'=>$request->input('genere'),
            'description'=>$request->input('description'),
            'img'=>($request->File('img') == null) ? $movie->img : $request->file('img')->store('public/img'),
        ]);
        
        return to_route('movie.index')->with('success','movie Modificato con successo');
       

    }
    public function destroy(Movie $movie){
        $movie->delete();
        Storage::delete($movie->img); 
        return to_route('movie.index')->with('success','movie Eliminato con successo');
    }
}
