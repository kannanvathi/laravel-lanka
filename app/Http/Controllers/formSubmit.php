<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\form_table;
use App\usages;

class formSubmit extends Controller
{
    function index(Request $req){
        /*$data = $req->input();
        DB::table('users')->insert([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ]);
        return $data;*/
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');
        $form_table = new form_table();
        $form_table->name = $name;
        $form_table->email = $email;
        $form_table->password = $password;
        $form_table->save();
        /*$dbData = DB::select('select * from Users');
        return $dbData;*/
        return form_table::all();
    }
    function imgUpload(Request $req){
        $path = $req->file('img')->store('avatars');
        return ['path' => $path, 'status' => 'upload successfully'];

    }
    function insert(){
        $usages = new usages();
        $usages->users_id = '2';
        $usages->category = 'laptop';
        $usages->brand = 'lenovo';
        $usages->save();
        return 'saved';
        /*DB::table('usages')->insert([
            'users_id' => '4',
            'category' => 'headset',
            'brand' => 'xiaomi']);
        return 'save';*/
    }
    function getData(){
        $data = form_table::all()->where('id');
        return view('update', ['data' => $data]);
    }
    function updateData(Request $req){
        $id = $req->input('id');
        $data = form_table::find($id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->save();
        echo 'data updated';
    }
}
