<x-layout>

    <div class="content">
        <h1>Film</h1>
        <p>Guarda tutti i film a disposizione sul nostro sito</p>
    </div>

    @if (session()->has('success'))
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <div class="alert alert-succes">
                    <h2 class="text-warning">{{ session('success') }}</h2>
                </div>
            </div>
        </div>
    @endif

     @if(Auth::user() != null)   {{-- posso anche usare @auth e endauth --}}
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6"><h3 class="text-warning">Benvenuto {{ Auth::user()->name }} sei loggato come <i>{{ Auth::user()->email }}</i></h3>
            </div>
        </div>
    </div>
    @else
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-6"><h3>Non hai un account? 
                    <a class="text-warning" href="{{ route('register') }}">Registrati</a> subito</h3>
                </div>
            </div>
        </div>
    @endif


    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4 my-5">
                    <x-moviecard :movie="$movie" :platforms="$platforms" />
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
