<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use App\Models\AlamatModel;
use App\Models\GalleryModel;
use App\Models\ProfileModel;
use App\Models\PaketModel;
use App\Models\JemaahModel;
use App\Models\KeberangkatanModel;
use App\Models\PassportModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $profile = ProfileModel::find(1);
        $agenda = AgendaModel::orderBy('id_agenda', 'desc')->limit(3)->get();
        return view('index', compact('agenda', 'profile'));
    }

    public function gallery()
    {
        $gallery = GalleryModel::all();
        return view('gallery', compact('gallery'));
    }
    public function haji()
    {
        $haji = GalleryModel::all();
        return view('haji', compact('haji'));
    }
    public function umroh()
    {
        $umroh = GalleryModel::all();
        return view('umroh', compact('umroh'));
    }
    public function jadwal()
    {
        $jadwal = GalleryModel::all();
        return view('jadwal', compact('jadwal'));
    }

    public function agenda()
    {
        $agenda = AgendaModel::all();
        return view('agenda', compact('agenda'));
    }
    public function paket()
    {
        $paket = PaketModel::all();
        return view('paket', compact('paket'));
    }

    public function profile()
    {
        $profile = ProfileModel::find(1);
        $jemaah = JemaahModel::all();
        $agenda = AgendaModel::all();
        $agenda = AlamatModel::all();
        $agenda = PassportModel::all();
        $agenda = KeberangkatanModel::all();
        return view('profile', compact('profile', 'jemaah', 'agenda'));
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function prosesDaftarJemaah(Request $request)
    {
        $model = new JemaahModel;
        $model->nama_lengkap = $request->input('nama_lengkap');
        $model->email = $request->input('email');
        $model->password = md5($request->input('password'));
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function login()
    {
        return view('login');
    }
    public function loginJemaah(Request $request)
    {
        $response = array();
        $email = $request->input('email');
        $password = md5($request->input('password'));
        $data = JemaahModel::where([
            'email' => $email,
            'password' => $password
        ])->first();
        if ($data) {
            $response['response'] = "Success";
            $response['data'] = $data;
            session(['nama' => $data->nama_lengkap]);
            session(['id_jemaah' => $data->id_jemaah]);
        } else {
            $response['response'] = "Failed";
        }
        return json_encode($response);
    }
}
