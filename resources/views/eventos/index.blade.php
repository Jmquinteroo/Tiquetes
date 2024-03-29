@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="text-center">
                <h1>Eventos</h1>
            </div>

        </div>
    </div>

    @if ($message = Session::get('Exito'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('Error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

{{--    <table class="table table-bordered">--}}
{{--        <tr>--}}
{{--            <th>id</th>--}}

{{--            <th>Lugar_id</th>--}}
{{--            <th>Fecha</th>--}}
{{--            <th>Hora</th>--}}
{{--            <th>Precios</th>--}}
{{--            <th width="280px">Action</th>--}}
{{--        </tr>--}}
        @foreach ($eventos as $evento)
            <tr>
                <spam><b>Nombre :</b></spam>
                <td>{{ $evento->nombre }}</td>


                <td>
                    <form action="{{ route('eventos.destroy',$evento->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('eventos.show',$evento->id) }}">Detalle</a>

                        <a class="btn btn-primary" href="{{ route('eventos.edit',$evento->id)  }}">Modificar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Desactivar</button>
                    </form>
                </td>
            </tr>
        @endforeach
{{--    </table>--}}

    <div class="text-right">
        <a class="btn btn-success" href="{{ route('eventos.create') }}"> Agregar evento</a>
    </div>
@endsection