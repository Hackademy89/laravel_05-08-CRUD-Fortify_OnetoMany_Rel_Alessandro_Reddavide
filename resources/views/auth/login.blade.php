<x-layout>


    <div class="content">
        <h1>Log-in</h1>
    </div>

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-4">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
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

        <button type="submit" class="btn btnshow my-3">Entra</button>
    </form>
    </div>
    </div>



</x-layout>