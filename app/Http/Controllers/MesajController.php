<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gelenkutu;

class MesajController extends Controller
{
    public function mesajAt(Request $request){


        $request->validate([
            "mesajAd"=>"required|max:25",
            "mesajSoyad"=>"required|max:25",
            "mesajMail"=>"required|max:255|email",
            "mesajTel"=>"required|max:11",
            "mesajKonu"=>"required|max:50",
            "mesajMesaj"=>"required|max:250"

        ]);
        try{
         $mesaj= new Gelenkutu;
         $mesaj->subject = $request->mesajKonu ;
         $mesaj->content = $request->mesajMesaj ;
         $mesaj->mail = $request->mesajMail ;
         $mesaj->phoneNo = $request->mesajTel ;
         $mesaj->save();
         return redirect()->back()->with('success', 'Mesajınız Başarılı Bir Şekilde Gönderildi !');
        }
        catch(Exception $e)
        {
        }

     }
}
