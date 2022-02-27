@extends('layouts.main', ['activePage' => 'clientes', 'titlePage' => 'Clientes'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Clientes</h4>
                                <p class="card-category">Clientes Registrados</p>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                               <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="{{route('clientes.create')}}" class="btn btn-sm btn-facebook">Agregar Cliente</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">

                                            <th>Documento</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Dirección</th>
                                            <th>Celular</th>
                                            <th>Email</th>
                                            <th>Estado</th>
                                            <th class="text-right">Funciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($clientes as $cliente)


                                            <tr>

                                                <td>{{ $cliente->documento }}</td>
                                                <td>{{ $cliente->nombre }}</td>
                                                <td>{{ $cliente->apellido }}</td>
                                                <td>{{ $cliente->direccion }}</td>
                                                <td>{{ $cliente->telefono }}</td>
                                                <td>{{ $cliente->email }}</td>
                                                <td class="td-actions text-right">
                                                @if ($cliente->estado==1)
                                                <button type="button" class="btn btn-success btn-sm">
                                                    Activo
                                                </button>

                                                @else
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    Inactivo
                                                </button>

                                                @endif
                                               </td>
                                               <td class="td-actions text-right">
                                                 <a href="{{ route('clientes.edit', $cliente->id) }}"
                                                    class="btn btn-warning"><i class="material-icons">edit</i></a>

                                               </td>

                                            </tr>
                                            <!-- javascript init -->

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer mr-auto">
                                {{$clientes->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
