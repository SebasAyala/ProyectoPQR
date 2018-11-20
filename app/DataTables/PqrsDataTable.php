<?php

namespace App\DataTables;

use App\Models\Pqrs;
use Yajra\DataTables\Services\DataTable;

class PqrsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'pqrs.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $pqrs = Pqrs::query();

        return $this->applyScopes($pqrs);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '120px'])
            ->ajax('')
            ->parameters([
                'dom'     => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                        'extend'  => 'collection',
                        'text'    => '<i class="fa fa-download"></i> Export',
                        'buttons' => [
                            'csv',
                            'excel',
                            'pdf',
                        ],
                    ],
                    'colvis',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'nombre'    => ['name' => 'nombre', 'data' => 'nombre'],
            'documento' => ['name' => 'documento', 'data' => 'documento'],
            'correo'    => ['name' => 'correo', 'data' => 'correo'],
            'direccion' => ['name' => 'direccion', 'data' => 'direccion'],
            'telefono'  => ['name' => 'telefono', 'data' => 'telefono'],
            'tipo'      => ['name' => 'tipo', 'data' => 'tipo'],
            'solicitud' => ['name' => 'solicitud', 'data' => 'solicitud'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'pqrs';
    }
}
