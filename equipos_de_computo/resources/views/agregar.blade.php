@extends('template')
@section('content')
    <h1 class="mt-2">Agregar equipo <a class="btn btn-secondary float-end mt-2" href="{{route('index')}}">volver</a> </h1>
    <form method="post" action="{{route('guardar')}}">
        <div class="row form-group mt-5 mb-3">
            <label for="" class="col-3 text-end mt-1">Tipo</label>
            <div class="col-9">
                <input type="text" class="form-control m">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Marca</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Tipo de tarjeta de video</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Tipo de procesador</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Tipo de memoria RAM</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Almacenamiento</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Monitores</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Teclado</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="" class="col-3 text-end mt-1">Mouse</label>
            <div class="col-9">
                <input type="text" class="form-control">
            </div>
        </div>
        <a class="btn btn-primary float-end" href="">Guardar</a>

    </form>
@endsection
