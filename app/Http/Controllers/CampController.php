<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absensi;
use DB;

class CampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAbsensi()
    {
        $absensi = Absensi::all();
        return json_encode($absensi);
    }
    
    public function absen(Request $request)
    {
        $nrp = $request->nrp;
        $event = $request->event;
        
        $absenn = Absensi::where('nrp',$nrp)->update([$event => 1]);
        
        return json_encode(['response'=>'Absensi Assigned']);
    }
    
    public function assignBus(Request $request)
    {
        if(isset($request->status)){
            $nrp = $request->nrp;
            $bus = $request->bus;
            if($request->status=='berangkat')
                $busss = Absensi::where('nrp',$nrp)->update(['bus_berangkat' => $bus]);
            else if($request->status=='pulang')
                $busss = Absensi::where('nrp',$nrp)->update(['bus_pulang' => $bus]);
            
            return json_encode(['response'=>'Bus Assigned']);
        }
        else{
            $nrp = $request->nrp;
            $bus = $request->bus;
            $busss = Absensi::where('nrp',$nrp)->update(['bus_berangkat' => $bus, 'bus_pulang' => $bus]);
            
            return redirect()->route('dashboard')->with('alert-success', 'Bus Assigned!');
        }
    }
}
