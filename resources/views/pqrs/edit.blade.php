@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pqrs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pqrs, ['route' => ['pqrs.update', $pqrs->id], 'method' => 'patch']) !!}

                        @include('pqrs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection