<x-layout>

    <div class="content">
        <h1>Film</h1>
        <p>Guarda tutti i film a disposizione sul nostro sito</p>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $movie->img }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text"><strong>Year:</strong> {{ $movie->year }}</p>
                            <p class="card-text"><strong>Director:</strong> {{ $movie->director }}</p>
                            <p class="card-text"><strong>Genere:</strong> {{ $movie->genere }}</p>
                            <p class="card-text">{{ $movie->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
