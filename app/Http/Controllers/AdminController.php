<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abone;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function aboneSil($id){
        try{
            $abone = Abone::find($id);
            $abone->delete();
            return redirect()->back()->with('success','Abone Silme Başarılı!');
        }
        catch(Exception $e){
            return redirect()->back()->with('error','Abone Silme Başarısız!');
        }
    }

    function aboneGoster($id){
        if (Auth::check()) {
            $abone = Abone::find($id);
            return view('aboneDuzenle', [
                'abone' => $abone
            ]);
        }
        else{
            return redirect("anasayfa")->with('error','Sayfayı görüntülemeye yetkiniz yok');
        }
    }

    function aboneGuncelle(Request $req){
        $data = Abone::find($req->id);
        $data->name = $req->name;
        $data->surname = $req->surname;
        $data->mail = $req->mail;
        $data->phoneNo = $req->phoneNo;
        $data->save();
        return redirect('admin');
    }

}
