<div class="cardmovie" style="width: 18rem;">
    <img src="{{ Storage::url($movie->img) }}" class="imgmovie" alt="{{ $movie->title }}">
    <div class="card-body">

        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="card-text my-2"><strong>Year:</strong> {{ $movie->year }}</p>
        <p class="card-text"><strong>Director:</strong> {{ $movie->director->name }}</p>
        <p class="card-text"><strong>Genere:</strong> {{ $movie->genere }}</p>
        <p class="card-text card-description">{{ $movie->description }}</p>

        <div class="d-flex justify-content-center align-items-center" name="btnzone">
            <div><a href="{{ route('movie.show', $movie) }}" class="btnshow my-3">Mostra</a></div>
            <div><a href="{{ route('movie.edit', $movie) }}" class="btnshow my-3">Modifica</a></div>

            <form action="{{ route('movie.destroy', $movie) }}" method="post">
                @method('DELETE')
                @csrf 
                <button type="submit" class="btnshow my-3">Elimina</button>
            </form>
        </div>
    </div>
</div>
