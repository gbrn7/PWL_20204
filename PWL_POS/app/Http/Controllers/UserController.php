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
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
        // ];

        // userModel::create($data);


        // $data = [
        //     'nama' => 'Pelanggan Pertama'
        // ];

        // userModel::where('username', 'customer-1')->update($data);

        // $user = userModel::all();
        // $user = userModel::find(1);
        // $user = userModel::where('level_id',1)->first();
        // $user = userModel::firstWhere('level_id',1);

        // $user = userModel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // $user = userModel::findOrFail(1);

        // $user = userModel::where('username', 'manager9')->firstOrFail();

        // $user = userModel::where('level_id', 2)->count();

        // dd($user);

        // $user = userModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama'=> 'Manager'
        //     ]
        // );

        // $user = userModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama'=> 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2,
        //     ]
        // );


        // $user = userModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama'=> 'Manager',
        //     ]
        // );


        $user = userModel::firstOrNew(
            [
                'username' => 'manager33',
                'nama'=> 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ]
        );

        $user->save();

        return view('user', ['data' => $user]);

    }
}
