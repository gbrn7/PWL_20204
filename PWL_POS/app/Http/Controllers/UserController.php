<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 5,
        // ];

        // userModel::insert($data);

        $data = [
            'nama' => 'Pelanggan Pertama'
        ];

        userModel::where('username', 'customer-1')->update($data);

        $user = userModel::all();
        return view('user', ['data' => $user]);

    }
}
