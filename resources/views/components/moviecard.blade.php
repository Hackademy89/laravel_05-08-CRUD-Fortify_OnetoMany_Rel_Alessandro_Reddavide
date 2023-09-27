<div class="cardmovie" style="width: 18rem;">
    <img src="{{ Storage::url($movie->img) }}" class="imgmovie" alt="{{ $movie->title }}">
    <div class="card-body"> 

        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text my-2"><strong>Year:</strong> {{ $movie->year }}</p>
        <p class="card-text"><strong>Director:</strong> {{ $movie->director }}</p>
        <p class="card-text"><strong>Genere:</strong> {{ $movie->genere }}</p>
        <p class="card-text">{{ $movie->description }}</p>
        <div class="d-flex justify-content-between align-items-center" name="btnzone">
        <div><a href="{{ route('movie.show',$movie ) }}" class="btnshow my-3">Mostra</a></div>
        <div> <a href="{{ route('movie.edit',$movie) }}" class="btnshow my-3">Modifica</a></div>
        </div>
    </div>
</div>