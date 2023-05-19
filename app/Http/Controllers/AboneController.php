<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abone;
Use Exception;

class AboneController extends Controller
{
    public function aboneOl(Request $request){

        $request->validate([
            "aboneAd"=>"required|max:25",
            "aboneSoyad"=>"required|max:25",
            "aboneMail"=>"required|max:255|email",
            "aboneTel"=>"required|max:11"
        ]);
       try{
        $abone= new Abone;
        $abone->name = $request->aboneAd ;
        $abone->surname = $request->aboneSoyad ;
        $abone->mail = $request->aboneMail ;
        $abone->phoneNo = $request->aboneTel ;
        $abone->save();
        return redirect()->back()->with('success', 'Abonelik Başarılı !');
       }
       catch(Exception $e)
       {
         return redirect()->back()->with('error', 'Bir Hata Meydana Geldi ve Abonelik Tamamlanamadı (Lütfen Aynı Mail Adresiyle Abone Olmadığınızdan Emin Olunuz.)');
       }

    }
}
