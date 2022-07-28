<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdministradorController extends Controller
{
    public function index(){
        $users = Admin::get();
        return view('editAdmin')->with('users', $users);
    }

    public function update($id, UpdateAdminRequest $request){
        $users = Admin::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect('/administrador');
    }
}
