<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Gelenkutu;
use App\Models\Abone;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function giris(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin');
        }
        return redirect("anasayfa")->with('error','Giriş bilgileri doğru değil');
    }

    public function admin()
    {
        $aboneler = Abone::all();
        $mesajlar = Gelenkutu::all();

        if(Auth::check()){
            return view('adminana',[
                'aboneler'=>$aboneler,
                'mesajlar'=>$mesajlar
            ]);
        }
        return redirect("anasayfa");
    }

    public function cikis() {
        Session::flush();
        Auth::logout();
        return Redirect('anasayfa');
    }
}
