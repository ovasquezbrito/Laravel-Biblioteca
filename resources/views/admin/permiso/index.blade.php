@extends('theme.'.$theme.'.layout')

@section('titulo')
    Permisos
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Permisos</h3>
                </div>
                <div class="card-body table-responsive no-padding">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Slug</th>
                                <th></th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($permisos as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection