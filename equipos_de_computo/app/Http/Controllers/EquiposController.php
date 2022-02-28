<?php
namespace App\Http\Controllers;

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
    public function guardar()
    {
        return view('guardar');
    }

}
