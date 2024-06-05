<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\userModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.signIn');
    }

    public function authenticate(Request $request): RedirectResponse //: RedirectResponse is return type
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $user = userModel::where('username', $credentials['username'])->first();

        if (isset($user)) {
            if ($user->status == 0)  return back()->withErrors(['status' => 'Your account has not been validated']);
        }


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'authentication' => 'Your Email/Password invalid',
        ])->onlyInput('username');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('signIn.index');
    }

    public function signUp()
    {
        return view('auth.signUp');
    }

    public function storeMember(Request $request): RedirectResponse //: RedirectResponse is return type
    {
        $newUser = $request->validate([
            'username' => ['required', 'unique:m_user,username'],
            'nama' => ['required'],
            'password' => ['required', 'min:6'],
            'confirm_password' => ['required', 'same:password'],
            'profile_img' => ['required', 'mimes:png,jpg,jpeg', 'max:1024'],
        ]);

        $newUser['level_id'] = LevelModel::where('level_nama', 'Member')->first()->level_id;
        $newUser['status'] = 0;

        try {
            DB::beginTransaction();

            // Store profile image
            $profileImg = $newUser['profile_img'];
            $profileName = Str::random(10) . $newUser['profile_img']->getClientOriginalName();
            $profileImg->storeAs('public/profile', $profileName);


            // Overide profile_img name
            $newUser['profile_img'] = $profileName;
            $newUser['password'] = bcrypt($request->password);

            userModel::create($newUser);

            Db::commit();
            return redirect()->route('signIn.index')->with('success', 'Your registration has been saved, but you need to wait for to validation.');
        } catch (\Throwable $th) {
            DB::rollback();

            return back()->withErrors([
                'error' => $th->getMessage(),
            ]);
        }
    }

    public function proses_register(Request $request)
    {
        //kita buat validasi nih buat proses register
        //validasinya yaitu semua field wajib di isi
        //validasi username itu harus unique atau tidak boleh duplicate username ya
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required|unique:m_user',
            'password' => 'required'
        ]);

        //kalau gagal kembali ke halaman register dengan munculkan pesan error
        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }

        $newUser = $request->all();
        $newUser['level_id'] = '2';
        //kalau berhasil isi level & hash passwordnya ya biar secure
        $newUser['password'] = Hash::make($request->password);

        //masukkan semua data pada request ke table user
        UserModel::create($newUser);

        //kalo berhasil arahkan ke halaman login
        return redirect()->route('login');
    }
}
