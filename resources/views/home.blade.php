@extends('index')

@section('content')
        <div class=" mb-3">
            <h1 class="mb-0">Listado de Usuarios</h1>
            <label class="small">Creación o modificación de usuarios</label>
        </div>
        <div class="w-100">
            <a class="ml-auto btn btn-success my-2" href="/crear_usuario">Añadir Usuario</a>
        <div>
        <table class="table table-striped">
            <thead>
                <tr class="row align-items-center">
                    <th  class="col px-0 text-center d-block d-lg-block">Nombre</th>
                    <th  class="col px-0 text-center d-block d-lg-block">Apellidos</th>
                    <th  class="col px-0 text-center d-none d-lg-block">Cedula</th>
                    <th  class="col px-0 text-center d-none d-lg-block">Email</th>
                    <th  class="col px-0 text-center d-none d-lg-block">Dirección</th>
                    <th  class="col px-0 text-center d-none d-lg-block">País</th>
                    <th  class="col px-0 text-center d-none d-lg-block">Telefono</th>
                    <th  class="col px-0 text-center d-block d-lg-block">Categoria</th>
                    <th  class="col px-0 text-center d-block d-lg-block">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                    <tr class="row">
                        <td class="col px-0 text-center d-block d-lg-block">{{ $u->name }}</td>
                        <td class="col px-0 text-center d-block d-lg-block">{{ $u->lastname }}</td>
                        <td class="col px-0 text-center d-none d-lg-block">{{ $u->id_number }}</td>
                        <td class="col px-0 text-center d-none d-lg-block">{{ $u->email }}</td>
                        <td class="col px-0 text-center d-none d-lg-block">{{ $u->direction }}</td>
                        <td class="col px-0 text-center d-none d-lg-block">{{ $u->country }}</td>
                        <td class="col px-0 text-center d-none d-lg-block">{{ $u->phone }}</td>
                        <td class="col px-0 text-center d-block d-lg-block">{{ $u->category }}</td>
                        <td class="col px-0 text-center d-block d-lg-block px-2 text-center">
                            <div class="row align-items-center justify-content-around">
                                <a href="/edit/{{$u->id}}" class="col-10 col-lg-4 btn p-1 mb-2 mb-lg-0 btn-primary">Editar</a>
                                <form method="POST" action="/borrar/{{$u->id}}" class="col-10 col-lg-5 p-0">
                                    @csrf
                                    <button class="btn p-1 btn-danger w-100">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
