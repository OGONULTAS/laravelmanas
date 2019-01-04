<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaturaController extends Controller
{
    public function index($id,$tarih){
        $fno=$id;
        $ftarih=$tarih;
        $fgetir=DB::table('OSW_FATURADETAY')->where('FISNO','=',$fno)
            ->where('STHAR_TARIH','=',$ftarih)->orderBy('SIRA')->get();
        if (count($fgetir)<= 0)
        {
            $alert=$fgetir.' Faturaya ait bir kayıt bulunamadı :( ';
            Alert::warning('Sonuç Bulunamadı', $alert)->autoclose(1500);

            return back();
        }
        $plasiyerkod=$fgetir[0]->PLASIYER_KODU;
        $plasiyer=DB::table('PLASIYER')->where('PLASIYER_KODU','=',$plasiyerkod)->get();

        $kurE=DB::table('OSW_DOVIZ')->where('TARIH','=',$ftarih)->where('SIRA','=','2')->get();
        $kurD=DB::table('OSW_DOVIZ')->where('TARIH','=',$ftarih)->where('SIRA','=','3')->get();

        return view('fatura',compact('fgetir','kurE','kurD','plasiyer'));

    }

}
