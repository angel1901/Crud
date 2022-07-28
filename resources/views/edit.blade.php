@extends('index')

@section('content')
    @foreach ($users as $u)
        <form class="row m-0" method="POST" action="/update/{{ $u->id }}" id="formCrear">
            @csrf
                <div class="col-lg-6 mb-3">
                    <label for="name" class="form-label m-0">Nombre</label>
                    <input type="" class="form-control" id="name" name="name" value="{{ $u->name }}">
                    {{ $errors->first('name') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="lastname" class="form-label m-0">Apellido</label>
                    <input type="" class="form-control" id="lastname" name="lastname" value="{{ $u->lastname }}">
                    {{ $errors->first('lastname') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="id_number" class="form-label m-0">Cédula</label>
                    <input type="" class="form-control" id="id_number" name="id_number" value="{{ $u->id_number }}">
                    {{ $errors->first('id_number') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="email" class="form-label m-0">Email</label>
                    <input type="" class="form-control" id="email" name="email" value="{{ $u->email }}">
                    {{ $errors->first('email') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="country" class="form-label m-0">Pais</label>
                    <select class="form-select" id="country" name="country" value="{{ old('country') }}">
                        <option  value="" selected>Escoja un Valor</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bolivia (Plurinational State of)">Bolivia (Plurinational State of)</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Falkland Islands (the) [Malvinas]">Falkland Islands (the) [Malvinas]</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Venezuela (Bolivarian Republic of)">Venezuela (Bolivarian Republic of)</option>
                    </select>
                    {{ $errors->first('country') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="direction" class="form-label m-0">Direccion</label>
                    <input type="" class="form-control" id="direction" name="direction" value="{{ $u->direction }}">
                    {{ $errors->first('direction') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="phone" class="form-label m-0">Celular</label>
                    <input type="" class="form-control" id="phone" name="phone" value="{{ $u->phone }}">
                    {{ $errors->first('phone') }}
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select class="form-select" id="categoria"  name="category_id">
                        <option  value="{{ $u->category_id }}" selected>{{ $u->category }}</option>
                        <option value="1">Cliente</option>
                        <option value="2">Proveedor</option>
                        <option value="3">Funcionario</option>
                    </select>
                    {{ $errors->first('category_id') }}
                </div>
            <div class="col-lg-6 my-4 text-center">
            <button type="submit" class="col-8 mx-auto btn btn-success">Crear</button>
            </div>
        </form>
    @endforeach
@endsection