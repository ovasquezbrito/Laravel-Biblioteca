@extends('theme.'.$theme.'.layout')

@section('titulo')
    Sistema Menús
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Crear Menus</h3>
                </div>

            <form action="{{route('guardar-menu')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    @include('includes.boton-form-crear')
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
    </div>
@endsection