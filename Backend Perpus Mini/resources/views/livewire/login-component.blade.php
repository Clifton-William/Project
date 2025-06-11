<div class="login-container">
    <div class="login-header">
        <img src="{{ asset('assets/login.png') }}" alt="Library Logo">
        <h2 class="text-warning">Literasi Raya</h2>
    </div>
    <form>
        <div class="form-group">
            <input type="text" wire:model="email" class="form-control" id="email" placeholder="Alamat Email">
            @error('email')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" wire:model="password" class="form-control" id="password" placeholder="Sandi">
            @error('password')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
        </div>
        <button type="button" wire:click="proses" class="btn btn-primary btn-login">Masuk</button>
    </form>
    {{-- <div class="text-center">
        <a href="#">Lupa Sandi?</a>
    </div> --}}
</div>
