<x-layout>


    <div class="content">
        <h1>Registrati</h1>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-4">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name" class="form-label @error('name') is-invalid @enderror">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" required>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="email" class="form-label @error('email') is-invalid @enderror">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="row d-flex justify-content-center align-items-center">

        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="password" class="form-label">Conferma Password:</label>
        <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" id="confirm-password" name="password_confirmation" required>
        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>
    </div>
    </div>



</x-layout>
