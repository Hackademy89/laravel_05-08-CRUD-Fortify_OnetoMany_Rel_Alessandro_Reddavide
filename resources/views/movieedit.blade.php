<x-layout>
    <div class="content">
        <h1 class="text-warning">Modifica Film </h1>
        <h4> {{ $movie->title }}</h4>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-4">
            <form action="{{route('movie.update', $movie->id)}}" method="post" enctype="multipart/form-data"> 
                @method('PUT')
                @csrf
                <label for="title" class="form-label">Titolo del Film:</label>
                <input type="text" name="title" value="{{$movie->title}}" class="form-control @error('title') is-invalid @enderror" required>

                <label for="director" class="form-label">Regista:</label>
                <input type="text" name="director" value="{{$movie->director}}" class="form-control @error('director') is-invalid @enderror" required>

                <label for="description" class="form-label">Descrizione:</label>
                <textarea name="description" value="{{$movie->description}}" class="form-control @error('description') is-invalid @enderror" cols="15" rows="5"></textarea>

                <label for="genere" class="form-label">Genere:</label>
                <input type="description" name="genere" value="{{$movie->genere}}"  id="genere" class="form-control @error('genere') is-invalid @enderror" required>

                <label for="year" class="form-label">Anno di Uscita:</label>
                <input type="number" name="year" value="{{$movie->year}}" class="form-control @error('year') is-invalid @enderror" required>

                <label for="img" class="form-label">URL dell'Immagine:</label>
                <input type="file" name="img" class="form-control">
                <img src="{{ Storage::url($movie->img) }}" alt="" class="imgprewiew">

                <button type="submit" class="btn btn-primary my-4 mx-3">Modifica</button>
            </form>
        </div>
    </div>

</x-layout>