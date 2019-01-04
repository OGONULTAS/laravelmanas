<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Config::set('database.default', 'sqlsrv2');
        \Log::info(\config('database.default'));


        $q4 = DB::table('PR_GUN_SATIS')->GET();
        $q5 = DB::table('PR_HAFTA_SATIS')->sum('TOPLAM');
        $q6 = DB::table('PR_AY_SATIS')->sum('TOPLAM');
        $q7 = DB::table('PR_YIL2018_SATIS')->where('TARIH','>','01.01.2019')->sum('TOPLAM');
        $q8 = DB::table('PR_ALACAKLAR_VADELI')->GET();
        $q9 = DB::table('PR_VERECEKLER_VADELI')->GET();
        $q10 = DB::table('PR_AYLIKSATIS12')->WHERE('Y2018','>','0')->GET();
        $q11 = DB::table('PR_YILLAR_SATIS')->ORDERBY('YIL')->GET();
        $q12 = DB::table('PR_STOK_TOPLAM')->SUM('TL');
        $q12_1 = DB::table('PR_STOK_TOPLAM')->SUM('EURO');
        $q12_2 = DB::table('PR_STOK_TOPLAM')->SUM('DOLAR');
        $q13 = DB::table('OSW_ALACAKLAR1')->where('CARI_KOD','LIKE','120%')->WHERE('BORC','>','100')->ORDERBY('BORC','DESC')->Paginate(10);
        $q14 = DB::table('PR_MUH_GIDERLER')->GET();
        $q15 = DB::table('PR_MUH_KALEM')->GET();
        $q16 = DB::table('PR_GELIRGIDER')->GET();
        $q17 = DB::table('PR_KREDIYUZDE')->GET();
        \Log::info($q15);
        setlocale(LC_TIME, 'Turkish');
        $datetime = '2019';
        $ay = Carbon::today()->month;
        $datetime1 = Carbon::today()->weekOfYear;
        $gun=Carbon::today();
        $q1 = DB::table('OSW_ALACAKLAR1')->where('CARI_KOD','LIKE','120%')->WHERE('BORC','>','100')->get();
        return view('dashboard',compact(   'q4','q1' ,'q5', 'q6', 'q7', 'q8','q9','q10','q11','q12','q12_1','q12_2','q14','q15','q16','q17','ay','q13', 'datetime', 'datetime1'));
    }

    public function index2018()
    {
        Config::set('database.default', 'sqlsrv');
        \Log::info(\config('database.default'));


        $q4 = DB::table('PR_GUN_SATIS')->GET();
        $q5 = DB::table('PR_HAFTA_SATIS')->sum('TOPLAM');
        $q6 = DB::table('PR_AY_SATIS')->sum('TOPLAM');
        $q7 = DB::table('PR_YIL2018_SATIS')->where('TARIH','>','01.01.2018')->sum('TOPLAM');
        $q8 = DB::table('PR_ALACAKLAR_VADELI')->GET();
        $q9 = DB::table('PR_VERECEKLER_VADELI')->GET();
        $q10 = DB::table('PR_AYLIKSATIS')->WHERE('Y2018','>','0')->GET();
        $q11 = DB::table('PR_YILLAR_SATIS')->ORDERBY('YIL')->GET();
        $q12 = DB::table('PR_STOK_TOPLAM')->SUM('TL');
        $q12_1 = DB::table('PR_STOK_TOPLAM')->SUM('EURO');
        $q12_2 = DB::table('PR_STOK_TOPLAM')->SUM('DOLAR');
        $q13 = DB::table('OSW_ALACAKLAR1')->where('CARI_KOD','LIKE','120%')->WHERE('BORC','>','100')->ORDERBY('BORC','DESC')->Paginate(10);
        $q14 = DB::table('PR_MUH_GIDERLER')->GET();
        $q15 = DB::table('PR_MUH_KALEM')->GET();
        $q16 = DB::table('PR_GELIRGIDER')->GET();
        $q17 = DB::table('PR_KREDIYUZDE')->GET();
        \Log::info($q15);
        setlocale(LC_TIME, 'Turkish');
        $datetime ='2018';
        $ay = Carbon::today()->month;
        $datetime1 = Carbon::today()->weekOfYear;
        $gun=Carbon::today();
        $q1 = DB::table('OSW_ALACAKLAR1')->where('CARI_KOD','LIKE','120%')->WHERE('BORC','>','100')->get();
        return view('dashboard',compact(   'q4','q1' ,'q5', 'q6', 'q7', 'q8','q9','q10','q11','q12','q12_1','q12_2','q14','q15','q16','q17','ay','q13', 'datetime', 'datetime1'));
    }

    public function datatables (){

        $qq1 = DB::table('MANAS2018.dbo.OSW_ALACAKLAR1')->where('CARI_KOD','LIKE','120%')->WHERE('BORC','>','100');

        return Datatables::of($qq1)->make(true);

    }
}
