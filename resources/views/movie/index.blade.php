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

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4">
                    <x-moviecard :movie="$movie" />
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
