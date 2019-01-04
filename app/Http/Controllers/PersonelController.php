<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PersonelController extends Controller
{
    public function index(){

        $p1=DB::table('OSW_PERBILGI')->count('OZLUKID');
        $p2=DB::table('OSW_PERBILGI')->avg('YAS');
        $p3=DB::table('OSW_PERBILGI')->where('CINSIYET','=','E')->COUNT('CINSIYET');
        $p4=DB::table('OSW_PERBILGI')->where('CINSIYET','=','K')->COUNT('CINSIYET');
        //$p5=DB::table('OSW_PERBILGI')->groupBy('KOD4ACIKLAMA')->count('OZLUKID');
        $p5=DB::table('OSW_PERBILGI')->select(DB::raw('count(OZLUKID) AS OZLUKID,KOD4ACIKLAMA'))
            ->WHERE('KOD4ACIKLAMA','!=','')->groupBy('KOD4ACIKLAMA')->orderByDesc('OZLUKID')->get();

        return view('personel1',compact('p1','p2','p3','p4','p5'));

    }

    public function detay(){
        $d1=DB::table('OSW_PERBILGI')->orderBy('GUN','desc')->get();
        foreach ($d1 as $data)
        {
            $image = $data->BILGI; // your base64 encoded
            $imageName = $data->OZLUKID.'.jpg';
            File::put('personel/' . $imageName, ($image));
        }

        return view ('personeldetay',compact('d1'));


    }
    public function personeldetaytable ()
    {
        $qp1s=DB::table('OSW_PERBILGI')->get();

        return Datatables::of($qp1s)->addColumn('action', function ($qp1) {
                return '<a href="/personeldetay/'.$qp1->OZLUKID.'" class="btn btn-xs btn-primary" id="button"><i class="glyphicon glyphicon-edit" id="button"></i> Detay</a>';})
           ->addColumn('image', function ($qp2) {
               if ($qp2->BILGI) return '<img class=" img-circle" style="width: 130px;height: 150px;margin: 10px"  src="personel/'.$qp2->OZLUKID.'.jpg"/>';
               if (!$qp2->BILGI)  return '<img class=" img-circle" style="width: 130px;height: 150px;margin: 10px"  src="personel/blank.jpg"/>';})
            ->rawColumns(['image','action'])
            ->addColumn('yıleksigun', function($row){
                return $row->YIL .' YIL '.$row->YILEKSIGUN.' GÜN';
            })
            ->addColumn('ADSOYAD', function($row){
                return $row->ADI .' '.$row->SOYADI;
            })
            ->make(true) ;






    }

    public function detay1person($id){

        $sicil = $id;

        $s1 = DB::table('OSW_PERBILGI')->where('OZLUKID', '=', $sicil)->first();

        return view ('personeldetayuser',compact('s1','sicil'));

    }
    public function ucret (Request $request)
    {
        $kadi=$request->input('kadi');
        $pass=$request->input('pass');
        $sicil=$request->input('sicil');
        $user=Auth::id();
        $ip=$request->ip();

        if ($kadi=='manasas' and $pass=='!!123.') //kullanıcı adı girerek ücretleri görüntülemek için
        {
            $s1=DB::table('OSW_PERBILGI')->where('OZLUKID','=',$sicil)->first();
            $u1=DB::table('OSW_UCRET')->where('OZLUKID','=',$sicil)->orderBy('NET','desc')->orderBy('YIL','desc')->get();
            if (empty($s1))
            {
                $s1 = DB::table('OSW_PERBILGIAYRILAN')->where('OZLUKID', '=', $sicil)->first();
                $u1 = DB::table('OSW_UCRETAYRILAN')->where('OZLUKID', '=', $sicil)->orderBy('NET', 'desc')->orderBy('YIL', 'desc')->get();

            }
            if (   count($u1)>1)
            {
                $h1=(($u1[0]->NET -$u1[1]->NET) / $u1[1]->NET)*100;
            }
            elseif(   count($u1)<=1)
            {
                $h1=0;
            }
            return view ('personeldetayuserucretli',compact('s1','u1','h1','sicil'));

        }
        if($ip=='127.0.0.1' and $user=='1') //belirli kullanıcı ve ip adresi eşleşiyor ise ücret detayini kullanıcı adı doğrulaması olmadan  görebilir.
        {
            $s1=DB::table('OSW_PERBILGI')->where('OZLUKID','=',$sicil)->first();
            $u1=DB::table('OSW_UCRET')->where('OZLUKID','=',$sicil)->orderBy('NET','desc')->orderBy('YIL','desc')->get();
            if (empty($s1))
            {
                $s1 = DB::table('OSW_PERBILGIAYRILAN')->where('OZLUKID', '=', $sicil)->first();
                $u1 = DB::table('OSW_UCRETAYRILAN')->where('OZLUKID', '=', $sicil)->orderBy('NET', 'desc')->orderBy('YIL', 'desc')->get();

            }
            if (   count($u1)>1)
            {
                $h1=(($u1[0]->NET -$u1[1]->NET) / $u1[1]->NET)*100;
            }
            elseif(   count($u1)<=1)
            {
                $h1=0;
            }
            return view ('personeldetayuserucretli',compact('s1','u1','h1','sicil'));

        }
        if($ip=='192.168.103.56' and $user=='10')  //belirli kullanıcı ve ip adresi eşleşiyor ise ücret detayini kullanıcı adı doğrulaması olmadan  görebilir.
        {
            $s1=DB::table('OSW_PERBILGI')->where('OZLUKID','=',$sicil)->first();
            $u1=DB::table('OSW_UCRET')->where('OZLUKID','=',$sicil)->orderBy('NET','desc')->orderBy('YIL','desc')->get();
            if (empty($s1))
            {
                $s1 = DB::table('OSW_PERBILGIAYRILAN')->where('OZLUKID', '=', $sicil)->first();
                $u1 = DB::table('OSW_UCRETAYRILAN')->where('OZLUKID', '=', $sicil)->orderBy('NET', 'desc')->orderBy('YIL', 'desc')->get();

            }
            if (   count($u1)>1)
            {
                $h1=(($u1[0]->NET -$u1[1]->NET) / $u1[1]->NET)*100;
            }
            elseif(   count($u1)<=1)
            {
                $h1=0;
            }
            return view ('personeldetayuserucretli',compact('s1','u1','h1','sicil'));

        }
        else{
            $s1=DB::table('OSW_PERBILGI')->where('OZLUKID','=',$sicil)->first();
            $alert=Auth::user()->name.'  '.$ip;
            Alert::warning( $alert,'Personel ücretlerini görmek için yeterli güvenlikleri karşılayamadınız.')->autoclose(4000);

            return view ('personeldetayuser',compact('s1','u1','h1','sicil'));
        }
    }
}
