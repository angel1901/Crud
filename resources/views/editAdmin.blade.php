@extends('index')

@section('content')
    @foreach ($users as $u)
        <form class="row m-0" method="POST" action="/updateAdmin/{{ $u->id }}" >
            @csrf
                <div class="col-6 mb-3">
                    <label for="name" class="form-label m-0">Nombre</label>
                    <input type="" class="form-control" id="name" name="name" value="{{ $u->name }}">
                    {{ $errors->first('name') }}
                </div>
                <div class="col-6 mb-3">
                    <label for="email" class="form-label m-0">Email</label>
                    <input type="" class="form-control" id="email" name="email" value="{{ $u->email }}">
                    {{ $errors->first('email') }}
                </div>
            <div class="col-6 my-4 text-center">
            <button type="submit" class="col-8 mx-auto btn btn-success">Crear</button>
            </div>
        </form>
    @endforeach
@endsection
