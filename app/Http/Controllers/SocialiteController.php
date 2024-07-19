<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        // Google user object dari google
        $userFromGoogle = Socialite::driver('google')->user();

        // Ambil user dari database berdasarkan google user id
        $userFromDatabase = User::where('google_id', $userFromGoogle->getId())->first();

        // Jika tidak ada user, maka buat user baru
        if (!$userFromDatabase) {
            $newUser = new User([
                'google_id' => $userFromGoogle->getId(),
                'name' => $userFromGoogle->getName(),
                'email' => $userFromGoogle->getEmail(),
                'password' => encrypt('12345dummy'),
                'type' => 'A'
            ]);

            $newUser->save();

            // Login user yang baru dibuat
            auth('web')->login($newUser);
            session()->regenerate();

            return redirect('apps/articles');
        }

        // Jika ada user langsung login saja
        auth('web')->login($userFromDatabase);
        session()->regenerate();

        return redirect('apps/articles');
    }

    public function logout(Request $request)
    {
        // auth('web')->logout();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
    // ada code
    public function register()
    {
        return view('register');
    }
    public function save_register(Request $request)
    {
        DB::table('users')->insert([
            'google_id' => mt_rand(100000, 999999),
            'name'  => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'password' => encrypt($request->password),
            'type' => 'A',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/');
    }

    public function auth_login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if(Auth::Attempt($data)){
            return redirect('apps/articles');
        }else{
            return redirect('/');
        }
    }

    public function shutdown()
    {
        Auth::logout();
        // $request->session()->invalidate();  // Menghapus sesi
        // $request->session()->regenerateToken();  // Regenerasi token sesi baru
        return redirect('/');
    }
}