@extends('template')
@section('content')
    <h1 class="mt-2">Agregar equipo <a class="btn btn-secondary float-end mt-2" href="{{route('index')}}">volver</a> </h1>
    <form method="post" action="{{route('guardar')}}">
        @csrf
        <div class="row form-group mt-5 mb-3">
            <label for="tipo" class="col-3 text-end mt-1">Tipo</label>
            <div class="col-9">
                <select id="tipo" name="tipo" class="form-select" required>
                    <option selected disabled value="">Selecciona una opcion</option>
                    <option value="{{\App\Models\EquipoDeComputo::DESKTOP}}">Desktop</option>
                    <option value="{{\App\Models\EquipoDeComputo::LAPTOP}}">Laptop</option>
                    <option value="{{\App\Models\EquipoDeComputo::ALL_IN_ONE}}">All in one</option>
                </select>

            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="marca" class="col-3 text-end mt-1">Marca</label>
            <div class="col-9">
                <input required id="marca" name="marca" type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="tarjeta_de_video" class="col-3 text-end mt-1">Tipo de tarjeta de video</label>
            <div class="col-9">
                <input required id="tarjeta_de_video" name="tipo_de_tarjeta_grafica" type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="tipo_de_procesador" class="col-3 text-end mt-1">Tipo de procesador</label>
            <div class="col-9">
                <input required id="tipo_de_procesador" name="tipo_de_procesador" type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="tipo_de_memoria_ram" class="col-3 text-end mt-1">Cantidad de memoria RAM</label>
            <div class="col-9">
                <input required ID="tipo_de_memoria_ram" name="cantidad_de_memoria_ram" type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="almacenamiento" class="col-3 text-end mt-1">Almacenamiento</label>
            <div class="col-9">
                <input required id="almacenamiento" name="cantidad_de_almacenamiento" type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <label for="monitores" class="col-3 text-end mt-1">Monitores</label>
            <div class="col-9">
                <input required id="monitores" name="numero_de_monitores" type="text" class="form-control">
            </div>
        </div>
        <div class="row form-group mb-3">
            <div class="col-9 offset-3">
                <label for="teclado"><input id="teclado" required name="teclado" value="1" type="checkbox"> Teclado</label>

            </div>
        </div>
        <div class="row form-group mb-3">
            <div class="col-9 offset-3">
                <label for="mouse"><input id="mouse" required name="mouse" type="checkbox" value="1"> Mouse</label>

            </div>
        </div>
        <div class="row">
            <div class="col-9 offset-3">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>


    </form>
@endsection
