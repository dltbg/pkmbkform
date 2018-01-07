<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    public function index()
    {
        //
        return view('form');
    }

    public function register (Request $request)
    {

        $data = new Peserta;

        $data->nama             = $request->get('nama');
        $data->nrp              = $request->get('nrp');
        $data->departemen       = $request->get('departemen');
        $data->posisi           = $request->get('posisi');
        $data->nama_pkk         = $request->get('nama_pkk');
        $data->alergi           = $request->get('alergi');
        $data->penyakit         = $request->get('penyakit');
        $data->hp               = $request->get('hp');
        $data->hp_ortu          = $request->get('hp_ortu');
        $data->line             = $request->get('line');
        $data->bukti_transfer   = $request->file('bukti_transfer')->store('bukti_transfer');

        $data->save();

        return view('form');
    }
}
