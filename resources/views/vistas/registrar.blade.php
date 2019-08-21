@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route("registrar")}}" method="post">
            <div class="form-group">
                <label for="nombre">Nompre</label>
                <input id="nombre" class="form-control" type="text" name="nombre" value={{old('nombre')}}>
            </div>

            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input id="cedula" class="form-control" type="number" name="cedula" value={{old('cedula')}}>
            </div>

            <div class="form-group">
                <label for="placa">Placa</label>
                <input id="placa" class="form-control" type="text" name="placa" value={{old('placa')}}>
            </div>

            <div class="form-group">
                <label for="marca" class="text-light">Marca</label>
                <select  name="marca" value="{{ old('marca') }}" class="form-control">
                    @foreach($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->nombre}}
                    </option>
                    @endforeach

                </select>
                @if ($errors->has('marca'))
                    <p class="text-danger">{{ $errors->first('marca') }}</p>
                @endif
            </div>
            <button type="submit" class="btn-primary">Registrar</button>
            @csrf
        </form>
    </div>
@endsection