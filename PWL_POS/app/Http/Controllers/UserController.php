<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345'),
        ];

        userModel::create($data);


        // $data = [
        //     'nama' => 'Pelanggan Pertama'
        // ];

        // userModel::where('username', 'customer-1')->update($data);

        $user = userModel::all();
        return view('user', ['data' => $user]);

    }
}
