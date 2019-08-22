@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Placa</th>
                    <th>Marca</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autos as $auto)
                    @if ($auto->marca->nombre == "Mazda")
                        <tr>
                            <td>{{$auto->placa}} <h6 class="green">Los mazdas son los mejores</h6></td>
                            <td>{{$auto->marca->nombre}}</td>
                        </tr>
                    @endif
                    @if ($auto->marca->nombre == "Toyota")
                        <tr>
                            <td class="font-weight-bold red"> {{ $auto->placa }} </td>
                            <td> {{ $auto->marca->nombre }} </td>
                        </tr>
                    @else 
                        <tr>
                            <td> {{ $auto->placa }} </td>
                            <td> {{ $auto->marca->nombre }} </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection