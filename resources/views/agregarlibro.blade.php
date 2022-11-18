@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agrega un libro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('agregarlibroProceso') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="Nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="Nombre" type="text" class="form-control @error('Nombre') is-invalid @enderror" name="Nombre" value="{{ old('Nombre') }}" required autocomplete="Nombre" autofocus>

                                @error('Nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Autor" class="col-md-4 col-form-label text-md-end">{{ __('Autor') }}</label>

                            <div class="col-md-6">
                                <input id="Autor" type="text" class="form-control @error('Autor') is-invalid @enderror" name="Autor" value="{{ old('Autor') }}" required autocomplete="Autor">

                                @error('Autor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Cover" class="col-md-4 col-form-label text-md-end">{{ __('Cover') }}</label>

                            <div class="col-md-6">
                                <input id="Cover" type="text" class="form-control @error('Cover') is-invalid @enderror" name="Cover" value="{{ old('Cover') }}" required autocomplete="Cover">

                                @error('Cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fecha_publi" class="col-md-4 col-form-label text-md-end">{{ __('fecha_publi') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_publi" type="date" class="form-control @error('fecha_publi') is-invalid @enderror" name="fecha_publi" value="{{ old('fecha_publi') }}" required autocomplete="fecha_publi">
                                @error('fecha_publi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Imagen" class="col-md-4 col-form-label text-md-end">{{ __('Imagen') }}</label>

                            <div class="col-md-6">
                                <input id="Imagen" type="text" class="form-control @error('Imagen') is-invalid @enderror" name="Imagen" value="{{ old('Imagen') }}" required autocomplete="Imagen">
                                @error('Imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="categoria" class="col-md-4 col-form-label text-md-end">{{ __('categoria') }}</label>

                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control @error('categoria') is-invalid @enderror" name="categoria" value="{{ old('categoria') }}" required autocomplete="categoria">
                                @error('categoria')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('agregarlibro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
