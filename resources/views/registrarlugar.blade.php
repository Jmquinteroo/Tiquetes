@extends('layouts.app')

@section('content')

<div class="card-body">
    <form method="post" action="{{ action('lugar\registrarLugaresController@store') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name1" type="text" class="form-control @error('name') is-invalid @enderror" name="name1" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('capacidad') }}</label>

            <div class="col-md-6">
                <input id="capacidad" type="text" class="form-control @error('capacidad') is-invalid @enderror" name="capacidad" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('direccion') }}</label>

            <div class="col-md-6">
                <input id="direccion" type="text" class="form-control @error('name') is-invalid @enderror" name="direccion" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('barrio') }}</label>

            <div class="col-md-6">
                <input id="barrio" type="text" class="form-control @error('name') is-invalid @enderror" name="barrio" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('sectores') }}</label>

            <div class="col-md-6">
                <input id="sectores" type="number" class="form-control @error('name') is-invalid @enderror" name="sectores" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>








        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>


    @if(isset($lugares))
        <br>

        <div class="col-lg-7 offset-3">
        <div class="jumbotron text-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Barrio</th>
                    <th scope="col">Sectores</th>
                </tr>
                </thead>
                <tbody>

                @foreach($lugares as $lugar)


                <tr>

                    <td> {{$lugar->name}}</td>
                    <td> {{$lugar->capacidad}}</td>
                    <td> {{$lugar->direccion}}</td>
                    <td> {{$lugar->barrio}}</td>
                    <td> {{$lugar->sectores}}</td>

                </tr>





            {{--<label>{{ $lugar->name }}</label>--}}
        @endforeach
                </tbody>

            </table>
    @endif
        </div>
        </div>

</div>
@endsection