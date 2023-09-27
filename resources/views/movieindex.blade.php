<x-layout>

    <div class="content">
        <h1>Film</h1>
        <p>Guarda tutti i film a disposizione sul nostro sito</p>
    </div>

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
