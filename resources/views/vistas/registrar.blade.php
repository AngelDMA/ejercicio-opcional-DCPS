@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="nombre">Nompre</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input id="cedula" class="form-control" type="number" name="cedula">
            </div>

            <div class="form-group">
                <label for="placa">Placa</label>
                <input id="placa" class="form-control" type="text" name="placa">
            </div>
        </form>
    </div>
@endsection