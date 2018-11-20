<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pqrs
 * @package App\Models
 * @version November 19, 2018, 9:57 pm UTC
 *
 * @property string nombre
 * @property string documento
 * @property string correo
 * @property string direccion
 * @property string telefono
 * @property string tipo
 * @property string solicitud
 */
class Pqrs extends Model
{
    use SoftDeletes;

    public $table = 'pqrs';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'documento',
        'correo',
        'direccion',
        'telefono',
        'tipo',
        'solicitud',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre'    => 'string',
        'documento' => 'string',
        'correo'    => 'string',
        'direccion' => 'string',
        'telefono'  => 'string',
        'tipo'      => 'string',
        'solicitud' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre'    => 'required',
        'documento' => 'required|unique:pqrs',
        'correo'    => 'required|email|unique:pqrs',
        'direccion' => 'required',
        'telefono'  => 'required',
        'tipo'      => 'required',
        'solicitud' => 'required',
    ];

}
