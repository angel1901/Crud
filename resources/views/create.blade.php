@extends('index')

@section('content')


    <form class="row m-0" method="POST" action="store" id="formCrear">
        @csrf
        <div class="col-lg-6 mb-3">
            <label for="name" class="form-label m-0">Nombre</label>
            <input type="text" minlength="5" maxlength="100" class="form-control" id="name" name="name">
            {{ $errors->first('name') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="lastname" class="form-label m-0">Apellido</label>
            <input type="text" minlength="5" maxlength="100" class="form-control" id="lastname" name="lastname">
            {{ $errors->first('lastname') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="id_number" class="form-label m-0">Cédula</label>
            <input type="number" class="form-control" id="id_number" name="id_number">
            {{ $errors->first('id_number') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="email" class="form-label m-0">Email</label>
            <input type="email" maxlength="150" class="form-control" id="email" name="email">
            {{ $errors->first('email') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="country" class="form-label m-0">Pais</label>
            <select class="form-select" id="country" name="country" value="{{ old('country') }}">
                <option  value="" selected>Escoja un Valor</option>
                @for($i=0; $i < count($paises); $i++ )
                    <option value="{{$paises[$i]['value']}}">{{$paises[$i]['text']}}</option>
                @endfor
            </select>
            {{ $errors->first('country') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="direction" class="form-label m-0">Direccion</label>
            <input type="" class="form-control" id="direction" name="direction"" maxlength="180">
            {{ $errors->first('direction') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="phone" class="form-label m-0">Celular</label>
            <input type="tel" class="form-control" id="phone" name="phone"" pattern="[0-9]{10}">
            {{ $errors->first('phone') }}
        </div>
        <div class="col-lg-6 mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select class="form-select" id="categoria"  name="category_id">
                <option  value="" selected>Escoja un Valor</option>
                <option value="1">Cliente</option>
                <option value="2">Proveedor</option>
                <option value="3">Funcionario</option>
            </select>
            {{ $errors->first('category_id') }}
        </div>
        <div class="col-lg-6 my-4 text-center mx-auto">
          <button type="submit" class="col-8 mx-auto btn btn-success">Crear</button>
        </div>
    </form>
@endsection
