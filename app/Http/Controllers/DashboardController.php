<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Absensi;
use DB;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $peserta = Peserta::all();
        $absensi = Absensi::all();
        
        $verified = Peserta::where('konfirmasi', '=', 1)->get();
        $unverified = Peserta::where('konfirmasi', '=', 0)->get();
        $akk = Peserta::where('posisi', 'AKK')->count();
        $cpkk = Peserta::where('posisi', 'CPKK')->count();
        $pkk = Peserta::where('posisi', 'PKK')->count();
        $pelayan = Peserta::where('posisi', 'PELAYAN')->count();
        $panitia = Peserta::where('posisi', 'PANITIA')->count();
        $alumni = Peserta::where('posisi', 'ALUMNI')->count();
        
        $bus_no = Absensi::where('bus_berangkat',0)->count();
        $bus1 = Absensi::where('bus_berangkat',1);
        $bus2 = Absensi::where('bus_berangkat',2);
        $bus3 = Absensi::where('bus_berangkat',3);
        $bus4 = Absensi::where('bus_berangkat',4);
        $bus5 = Absensi::where('bus_berangkat',5);
        $bus6 = Absensi::where('bus_berangkat',6);
        
        return view('dashboard')->with('peserta', $peserta)->with('verified', $verified)->with('unverified', $unverified)->with('bus_ok', $verified->count()-$bus_no)->with('bus_no', $bus_no)->with('bus1', $bus1)->with('bus2', $bus2)->with('bus3', $bus3)->with('bus4', $bus4)->with('bus5', $bus5)->with('bus6', $bus6)->with('akk', $akk)->with('cpkk', $cpkk)->with('pkk', $pkk)->with('pelayan', $pelayan)->with('panitia', $panitia)->with('alumni', $alumni);
    }
}
