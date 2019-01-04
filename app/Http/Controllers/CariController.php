<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use DateTime;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Input;

class CariController extends Controller
{
    public function index(){
        $cari=DB::table('TBLCASABIT')->orderby('ISIM')->get();


        return view ('cari',compact('cari'));

    }
    public function scari(Request $request){
        $scari=$request->input('scari');
        $scari1= DB::table('OSW_SATISLAR2017')->where('STHAR_CARIKOD','=',$scari)->orderByDesc('STHAR_TARIH')->get();
        if (count($scari1)<= 0)
        {
                      return back();
        }
        $scari2 = DB::table('OSW_ALACAKLAR1')->where('CARI_KOD','=',$scari)->first();
        $satis = DB::table('OSW_SATISLAR2017')->WHERE ('STHAR_CARIKOD','=',$scari)->sum('TOPLAM');
        $satis2018 = DB::table('OSW_SATISLAR2017')->WHERE ('STHAR_CARIKOD','=',$scari)->whereYear('STHAR_TARIH','=','2019')->sum('TOPLAM');
        $scari3 = DB::table('OSW_ACIKMUSSIPKLREH')->where('CARI_KODU','=',$scari)->get();
        $scari4=DB::table('TBLCASABIT')->where('CARI_KOD','=',$scari)->first();

        // DB::connection('sqlsrv3')->table('AGT_CARIODEMEBILGISI')->insert([['CARI_KOD' => 'taylor@example.com', 'TARIH' => '12.06.2018 00:00:00']]);


        return view ('satisanaliz',compact('scari1','scari2','satis','satis2018','scari3','scari4'));
    }

    public function tablecarilist ($id){


        $scari= $id;
        $qq1 =DB::table('OSW_SATISLAR2017')->where('STHAR_CARIKOD','=',$scari)->get();


        return Datatables::of($qq1)->addColumn('fatura', function ($cari) {
            return '<a href="/faturano/'.$cari->FISNO.'/'.((new Carbon($cari->STHAR_TARIH))->format('m-d-Y')).'"  class="fas fa-file-invoice" id="ui">'.$cari->FISNO.'</a>';})
            ->rawColumns(['fatura'])
            ->editColumn('STHAR_TARIH', function ($user) {
                return $user->STHAR_TARIH ? with(new Carbon($user->STHAR_TARIH))->format('m/d/Y') : '';})
            /*->editColumn('STHAR_TARIH', function ($user)
            {
                //change over here
                return date('d-m-Y', strtotime($user->STHAR_TARIH) );})*/
            ->make(true);

    }
    public function tablecariaciklist ($id){

        $scari= $id;
        $qq2 =DB::table('OSW_ACIKMUSSIPKLREH')->where('CARI_KODU','=',$scari)->get();


        return Datatables::of($qq2)->addColumn('fatura1', function ($cari1) {
            return '<a href="/edit/'.$cari1->FATIRS_NO.'"  class="fas fa-file-invoice">'.$cari1->FATIRS_NO.'</a>';})
            ->rawColumns(['fatura1'])
            ->editColumn('TARIH', function ($user) {
                return $user->TARIH ? with(new Carbon($user->TARIH))->format('d/m/Y') : '';})
           /* ->addColumn('date', function ($user2)
            {
                //change over here
                return date('d-m-Y', strtotime($user2->TESLIMTARIHI) );})*/
            ->make(true);

    }

}
