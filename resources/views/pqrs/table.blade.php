@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%']) !!}

@section('scripts')
    @include('layouts.datatables_js')
    <script>
        $(function() {
            $("#dataTableBuilder").dataTable().fnDestroy();
            
            var table = $('#dataTableBuilder').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('get.data') }}',
                columns: [
                    { data: 'nombre', name: 'nombre' },
                    { data: 'documento', name: 'documento' },
                    { data: 'correo', name: 'correo' },
                    { data: 'direccion', name: 'direccion' },
                    { data: 'telefono', name: 'telefono' },
                    { data: 'tipo', name: 'tipo' },
                    { data: 'solicitud', name: 'solicitud' }
                ]
            });
         
            setInterval( function () {
                table.ajax.reload();
            }, 30000 );
        });
    </script>

@endsection