<x-layout>

    @if (session()->has('success'))
        {{-- effettua un check su message per verificare se esiste e quindi per generare il div --}}
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="alert alert-succes">
                    <h2 class="text-warning">{{ session('success') }}</h2>
                </div>
            </div>
        </div>
    @endif

    <div class="content">
        <h1>Aggiungi Film</h1>
        <p>aggiungi nel database un fil compilando il form</p>
    </div>

    <div class="row">
        <div class="col-4 d-flex justify-content-center align-items-center">
            <form action="{{ route('movie.store') }}" method="post"> 
                @csrf
                <label for="title" class="form-label">Titolo del Film:</label>
                <input type="text" name="title" class="form-control" required>

                <label for="director" class="form-label">Regista:</label>
                <input type="text" name="director" class="form-control" required>

                <label for="description" class="form-label">Descrizione:</label>
                <textarea name="description" class="form-control" cols="15" rows="5"></textarea>

                <label for="genere" class="form-label">Genere:</label>
                <input type="description" name="genere" id="genere" class="form-control" required>

                <label for="year" class="form-label">Anno di Uscita:</label>
                <input type="number" name="year" class="form-control" required>

                <label for="img" class="form-label">URL dell'Immagine:</label>
                <input type="text" name="img" class="form-control" required>

                <button type="submit" class="btn btn-primary my-4 mx-3">Inserisci Film</button>
            </form>
        </div>
    </div>

</x-layout>
