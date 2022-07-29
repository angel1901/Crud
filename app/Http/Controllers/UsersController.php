<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\NewUserNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;


class UsersController extends Controller
{
    public function index(){
        $users = DB::table('users_crud')
        ->join('categories', 'users_crud.category_id', '=', 'categories.id')
        ->select('users_crud.*', 'categories.category')
        ->get();

        return view('home', [
            'users'=> $users
        ]);
    }

    public function crear(){
        $client = new Client();
        $url = "https://api.first.org/data/v1/countries?region=South America";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        $data = $responseBody->data;
        $paises = [];
        foreach ($data as $cod => $country) {
            $paises[] = ["text" => $country->country, "value"=> $cod];
        }
        return view('create')->with('paises', $paises);
    }

    public function edit($id){
        $users = DB::table('users_crud')
        ->join('categories', 'users_crud.category_id', '=', 'categories.id')
        ->select('users_crud.*', 'categories.category')
        ->where('users_crud.id', $id)->get();

        $client = new Client();
        $url = "https://api.first.org/data/v1/countries?region=South America";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody());
        $data = $responseBody->data;
        $paises = [];
        foreach ($data as $cod => $country) {
            $paises[] = ["text" => $country->country, "value"=> $cod];
        }
        return view('edit')->with('users', $users)->with('paises', $paises);
    }

    public function bye($id){
        $users = Users::where('id', $id)->delete();
        return redirect("/");
    }


    public function store(CreateUserRequest $request){
        $validated = $request->validated();
        if(!empty($validated)){
            $mail = $request['email'];
            $users = Users::insert($validated);
            Mail::to($mail)->send(new NewUserNotification);
            return redirect("/");
        }
    }

    public function update($id, UpdateUserRequest $request){
        $validated = $request->validated();
        if(!empty($validated)){
            $users = Users::where('id', $id)->update($validated);
            return redirect("/");
        }
    }

}
