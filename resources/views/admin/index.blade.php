@extends('layouts.plantilla-admin')
@section('content')
{{-- {{$users}} --}}
    {{-- DATOS --}}
    <div class="col col-lg-10 pt-3">
        <h1 class="text-center py-3">Administración de Usuarios</h1>
        <div class="row justify-content-center">
            <div class="col-7 col-md-3 bg-success text-center text-white d-flex flex-column py-4 position-relative">
                <a href="panel_admin_nuevo_cliente.html" class="h-100 w-100 d-block position-absolute top-0 start-0"></a>
                <i class="bi bi-plus-lg fs-1"></i>
                <p class="m-0">Nuevo</p>
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <h3 class="text-center">Lista de Usuarios</h3>
            <div class="col-md-10 table-responsive-md">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Fecha creación</th>
                            <th>Última modificación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellidos}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->rol}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td class="d-flex gap-2">
                                    
                                    <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$user->id}}" >
                                        Eliminar
                                        {{-- <input type="hidden" name="user" value="{{$user}}"> --}}
                                    </button>

                                    {{-- <form action="{{route('user.edit', $user)}}" method="post">
                                        @csrf --}}
                                        {{-- @method('put') --}}
                                        <a href="{{route('user.edit', $user)}}" class="btn btn-primary text-white">Modificar</a>
                                    {{-- </form> --}}
                                </td>
                            </tr>

                            @include('admin.delete')
                        @endforeach
                        </tbody>
                        <tfoot>
                            <td colspan="100%">{{$users->links()}}</td>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection