@extends('layouts.app')

@section('content')


<div class="container d-flex justify-content-center align-items-center h-75">
    <div class="col-5">
        <div class="border border-0 card rounded-3 bg-white shadow-sm">
            <div class="card-body px-4">
                <h1 class="text-center fs-4 card-title fw-bold py-4">Bienvenido</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email">Correo electrónico</label>
                        <input id="email" type="email" class="bg-white form-control rounded-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                        @enderror
                        
                    </div>

                    <div class="mb-5">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="bg-white form-control rounded-3" name="password">
                        @error('password')
                           <p class="mt-2 text-danger fw-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-grid align-items-center mb-3">
                        <button type="submit" class="shadow-sm btn btn-primary fs-5 rounded-3">
                            Iniciar sesión
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection