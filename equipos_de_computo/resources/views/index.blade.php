@extends('template')
@section('content')
    <h1>Equipos de computo <a class="btn btn-primary float-end mt-2" href="{{ route('agregar') }}">agregar</a> </h1>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>tipo de tarjeta de video</th>
                <th>tipo de procesador</th>
                <th>Memoria RAM</th>
                <th>Almacenamiento</th>
                <th>Monitores</th>
                <th>Teclado</th>
                <th>Mouse</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center" colspan="11">sin elementos</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection

