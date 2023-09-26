<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Redis;

class MovieController extends Controller
{
    function index()
    {   
        $movies = Movie::all(); /*ricavo tutti i film*/
        
                                 /*callback index movie*/
        return view('movieindex', compact('movies'));
    }
    function create()
    { 
        /*callback creazione movie*/
        return view('moviecreate');
    }
    function store(Request $request)   /*callback inserimento movie*/
    {           
        $title=$request->input('title');     /*salvo nelle variabili i valori inseriti nel form*/
        $year=$request->input('year');
        $director=$request->input('director');
        $genere=$request->input('genere');
        $description=$request->input('description');
        $img=$request->input('img');

        $movie=new Movie(); /*creo un nuovo oggetto*/
        
        $movie->title = $title; /*salvo i valori inseriti nel form*/
        $movie->year = $year;   
        $movie->director = $director;
        $movie->genere = $genere; 
        $movie->description = $description;
        $movie->img = $img;
        
        $movie->save();

        return to_route('movie.create')->with('success','movie Inserito con successo');

        
    }



}
