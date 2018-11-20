<?php

namespace App\Repositories;

use App\Models\Pqrs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PqrsRepository
 * @package App\Repositories
 * @version November 19, 2018, 9:57 pm UTC
 *
 * @method Pqrs findWithoutFail($id, $columns = ['*'])
 * @method Pqrs find($id, $columns = ['*'])
 * @method Pqrs first($columns = ['*'])
*/
class PqrsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'documento',
        'correo',
        'direccion',
        'telefono',
        'tipo',
        'solicitud'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pqrs::class;
    }
}
