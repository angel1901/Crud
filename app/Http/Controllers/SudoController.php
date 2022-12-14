<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;


class SudoController extends Controller
{
    public function index(){
        $users = DB::table('users_crud')
        ->join('categories', 'users_crud.category_id', '=', 'categories.id')
        ->select('users_crud.*', 'categories.category')
        ->get();


        $client = new Client();
        $url = "https://api.first.org/data/v1/countries?region=South America";
        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);
        $responseBody = json_decode($response->getBody(), true);
        $data = $responseBody['data'];
        for ($i=1; $i < sizeof($data); $i++) {
            // echo($data[key]);
        }
        var_dump($data["AR"]["country"]);
        return view('home')->with('users', $users)->with('data', $data);
    }
}
