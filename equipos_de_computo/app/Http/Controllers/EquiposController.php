<?php
namespace App\Http\Controllers;

use App\Models\EquipoDeComputo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class EquiposController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function agregar()
    {
        return view('agregar');
    }
    public function guardar(Request $request)
    {
        $datos = $request->all();
        $validator=Validator::make($datos,[
            'tipo'=> [
                'required',
                Rule::in(EquipoDeComputo::DESKTOP, EquipoDeComputo::LAPTOP, EquipoDeComputo::ALL_IN_ONE),

            ],
            'marca'=> 'required',
            'tipo_de_tarjeta_grafica'=>'required',
            'tipo_de_procesador'=>'required',
            'cantidad_de_memoria_ram'=>'required',
            'cantidad_de_almacenamiento'=>'required',
            'numero_de_monitores'=>'required',
            'teclado'=>Rule::requiredIf(function() use($request){
                return $request->get('tipo') == EquipoDeComputo::DESKTOP || $request->get('tipo') == EquipoDeComputo::ALL_IN_ONE;
            }),
            'mouse'=> Rule::requiredIf(function() use($request){
                return $request->get('tipo') == EquipoDeComputo::DESKTOP || $request->get('tipo') == EquipoDeComputo::ALL_IN_ONE;
            }),

        ]);

        if ($validator->passes())
        {
            EquipoDeComputo::create($datos);
        }
        else
        {
            dd($validator->errors()->first());
        }
    }

}
