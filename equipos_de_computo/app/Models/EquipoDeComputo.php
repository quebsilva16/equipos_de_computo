<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipoDeComputo extends Model
{
    public const DESKTOP = 1;
    public const LAPTOP = 2;
    public const ALL_IN_ONE = 3;
    protected $table='equipos_de_computos';
    protected $fillable=['tipo', 'marca', 'tipo_de_procesador', 'cantidad_de_memoria_ram', 'cantidad_de_almacenamiento', 'tipo_de_tarjeta_grafica', 'numero_de_monitores', 'teclado', 'mouse'];
    protected $guarded=['id'];
}
