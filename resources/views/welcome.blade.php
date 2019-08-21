@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Ejercicio Opcional
        </div>
    
        <div class="container">
            <form method="get" action="{{url("/opciones")}}">
                <div class="form-group">
                    <label for="codigo">Código</label>
                    <input id="codigo" class="form-control" type="text" name="codigo">
                </div>
                <button type="submit" class="button-blue">Ingresar</button>
            </form>
        </div>
    </div>
@endsection

