<x-layout>

    @if (session()->has('success'))
        {{-- effettua un check su message per verificare se esiste e quindi per generare il div --}}
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <div class="alert alert-succes">
                    <h2 class="text-warning">{{ session('success') }}</h2>
                </div>
            </div>
        </div>
    @endif

    <div class="content">
        <h1>Aggiungi Film</h1>
        <p>aggiungi nel database un film compilando il form</p>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-4">
            <form action="{{ route('movie.store') }}" method="post" enctype="multipart/form-data"> 
                @csrf
                <label for="title" class="form-label">Titolo del Film:</label>
                <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" required>

                <label for="director" class="form-label">Regista:</label>
                <input type="text" name="director" value="{{old('director')}}" class="form-control @error('director') is-invalid @enderror" required>

                <label for="description" class="form-label">Descrizione:</label>
                <textarea name="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" cols="15" rows="5"></textarea>

                <label for="genere" class="form-label">Genere:</label>
                <input type="description" name="genere" value="{{old('genere')}}"  id="genere" class="form-control @error('genere') is-invalid @enderror" required>

                <label for="year" class="form-label">Anno di Uscita:</label>
                <input type="number" name="year" value="{{old('year')}}" class="form-control @error('year') is-invalid @enderror" required>

                <label for="img" class="form-label">URL dell'Immagine:</label>
                <input type="file" name="img" value="{{old('img')}}" class="form-control">

                <button type="submit" class="btn btn-primary my-4 mx-3">Inserisci Film</button>
            </form>
        </div>
    </div>

</x-layout>
