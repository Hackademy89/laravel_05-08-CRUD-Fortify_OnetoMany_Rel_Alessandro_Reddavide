<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center my-5 text-warning">
                <h1>Titolo: {{ $movie->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="{{ Storage::url($movie->img) }}" class="imgmovieshow" alt="{{ $movie->title }}">
            </div>
            <div class="col-6">
                <p> Descrizione:{{ $movie->description }} </p>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center my-3">
                    <p>Regista: <i>{{ $movie->director }} - {{ $movie->year }}</i></p>
                </div>
            </div>
        </div>

</x-layout>
