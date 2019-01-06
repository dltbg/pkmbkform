<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\Absensi;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

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
        
        $rules = array(
            'bukti_transfer'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            $after_save = [
                 'alert' => 'danger',
                 'title' => 'Ada Kesalahan!',
                 'text-1' => 'Pastikan file adalah .jpg .jpeg atau .png',
                 'text-2' => 'dan maksimal 2MB.'
             ];

            return Redirect::back()
                ->withErrors($validator)
                ->with('after_save', $after_save);

        }

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
        $data->konfirmasi       = '0';

        $data->save();

        $data = new Absensi;

        $data->nrp              = $request->get('nrp');
        $data->bus_berangkat    = '0';
        $data->opening          = '0';
        $data->sesi_1           = '0';
        $data->sesi_2           = '0';
        $data->sesi_3           = '0';
        $data->sesi_4           = '0';
        $data->sesi_5           = '0';
        $data->sesi_6           = '0';
        $data->sesi_7           = '0';
        $data->closing          = '0';
        $data->bus_pulang       = '0';

        $data->save();

        return view('passing');
    }
}
