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
    
    public function verified($nrp)
    {
        $verify = Peserta::where('nrp',$nrp)->update(['konfirmasi' => 1]);
        return redirect()->route('dashboard')->with('alert-success', 'User Verified!');
    }
    
    public function unverified($nrp)
    {
        $unverify = Peserta::where('nrp',$nrp)->update(['konfirmasi' => 0]);
        return redirect()->route('dashboard')->with('alert-danger', 'User Unverified!');
    }
    
    public function assignBus(Request $request)
    {
        $nrp = $request->nrp;
        $bus = $request->bus;
        $busss = Absensi::where('nrp',$nrp)->update(['bus_berangkat' => $bus]);
        return redirect()->route('dashboard')->with('alert-success', 'Bus Assigned!');
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
        
        $bus_no = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->where('konfirmasi',1)->where('bus_berangkat',0)->count();
        
        $bus1 = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 1)->get();
        $bus2 = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 2)->get();
        $bus3 = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 3)->get();
        $bus4 = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 4)->get();
        $bus5 = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 5)->get();
        $bus6 = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 6)->get();
        $sendiri = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*')->where('konfirmasi',1)->where('bus_berangkat', 7)->get();
        $bus = Peserta::join('absensis', 'pesertas.nrp', '=', 'absensis.nrp')->select('pesertas.*', 'absensis.bus_berangkat')->where('konfirmasi',1)->get();
        
//        dd($bus);
        
        return view('dashboard')->with('peserta', $peserta)->with('verified', $verified)->with('unverified', $unverified)->with('bus_ok', $verified->count()-$bus_no)->with('bus_no', $bus_no)->with('bus1', $bus1)->with('bus2', $bus2)->with('bus3', $bus3)->with('bus4', $bus4)->with('bus5', $bus5)->with('bus6', $bus6)->with('sendiri', $sendiri)->with('buz', $bus)->with('akk', $akk)->with('cpkk', $cpkk)->with('pkk', $pkk)->with('pelayan', $pelayan)->with('panitia', $panitia)->with('alumni', $alumni);
    }
}
