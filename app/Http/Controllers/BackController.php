<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\AgendaModel;
use App\Models\AlamatModel;
use App\Models\GalleryModel;
use App\Models\ProfileModel;
use App\Models\JemaahModel;
use App\Models\KeberangkatanModel;
use App\Models\PassportModel;

class BackController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function loginAdmin(Request $request)
    {
        $response = array();
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $data = AdminModel::where([
            'username' => $username,
            'password' => $password
        ])->first();
        if ($data) {
            $response['response'] = "Success";
            $response['data'] = $data;
            session(['nama' => $data->nama_admin]);
        } else {
            $response['response'] = "Failed";
        }
        return json_encode($response);
    }

    public function dashboard(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'customer';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        return view('admin.dashboard', compact('activemenu', 'activesubmenu', 'nama'));
    }

    public function jemaah(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'jemaah';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $jemaah = JemaahModel::all();
        return view('admin.jemaah', compact('activemenu', 'activesubmenu', 'nama', 'jemaah'));
    }

    public function gallery(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'gallery';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $gallery = GalleryModel::all();
        return view('admin.gallery', compact('activemenu', 'activesubmenu', 'nama', 'gallery'));
    }

    public function getGallery(Request $request)
    {
        $gallery = GalleryModel::find($request->input('id_gallery'));
        return $gallery;
    }

    public function prosesGallery(Request $request)
    {
        $image = $request->file('gambar');

        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto/gallery'), $imageName);

            $modelGallery = new GalleryModel;

            $modelGallery->link_gambar = $imageName;
            $modelGallery->deskripsi = $request->input('deskripsi');
            $modelGallery->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Invalid image file']);
        }
    }

    public function prosesUbahGallery(Request $request)
    {
        $image = $request->file('gambar_edit');

        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto/gallery'), $imageName);

            $modelGallery = GalleryModel::find($request->input('id_gallery'));

            $modelGallery->link_gambar = $imageName;
            $modelGallery->deskripsi = $request->input('deskripsi_edit');
            $modelGallery->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Invalid image file']);
        }
    }

    public function hapusGallery(Request $request)
    {
        $gallery = GalleryModel::find($request->input('id_gallery'));
        if ($gallery->delete()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan.']);
        }
    }


    public function profile(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'profile';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $profile = ProfileModel::find(1);
        return view('admin.profile', compact('activemenu', 'activesubmenu', 'nama', 'profile'));
    }

    public function editProfile(Request $request)
    {
        $model = ProfileModel::find(1);
        $model->nama_travel = $request->input('nama_travel');
        $model->deskripsi = $request->input('deskripsi');
        $model->alamat = $request->input('alamat');
        $model->email = $request->input('email');
        $model->telepon = $request->input('telepon');
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('nama');
        return redirect('/');
    }

    //jemaah
    public function biodata(Request $request)
    {
        $activemenu = 'biodata';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $jemaah = JemaahModel::find($request->session()->get('id_jemaah'));
        return view('jemaah.biodata', compact('activemenu', 'nama', 'jemaah'));
    }



    public function editBiodata(Request $request)
    {
        $model = JemaahModel::find($request->session()->get('id_jemaah'));
        $model->nama_lengkap = $request->input('nama_lengkap');
        $model->email = $request->input('email');
        $model->tempat_lahir = $request->input('tempat_lahir');
        $model->tanggal_lahir = $request->input('tanggal_lahir');
        $model->nik = $request->input('nik');
        $model->jenis_kelamin = $request->input('jenis_kelamin');
        $model->pekerjaan = $request->input('pekerjaan');
        // $model->alamat = $request->input('alamat');
        // $model->rt_rw = $request->input('rt_rw');
        // $model->kelurahan_desa = $request->input('kelurahan_desa');
        // $model->kecematan = $request->input('kecematan');
        // $model->kabupaten = $request->input('kabupaten');

        // Proses unggah berkas pas foto
        if ($request->hasFile('berkas_pas_foto')) {
            $berkasPath = $request->file('berkas_pas_foto')->store('berkas_pas_foto', 'public');
            $model->berkas_pas_foto = $berkasPath;
        }

        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }


    public function berkas(Request $request)
    {
        $activemenu = 'berkas';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        return view('jemaah.berkas', compact('activemenu', 'nama'));
    }

    public function prosesUpload(Request $request)
    {

        $berkas_pas_foto = $request->file('berkas_pas_foto');

        if ($berkas_pas_foto->isValid()) {
            $imageName = time() . '.' . $berkas_pas_foto->getClientOriginalExtension();
            $berkas_pas_foto->move(public_path('foto/berkas/pas_foto'), $imageName);

            $model = JemaahModel::find($request->session()->get('id_jemaah'));

            $model->berkas_pas_foto = $imageName;
            $model->save();
        }


        return response()->json(['success' => true]);
    }

    public function alamat(Request $request)
    {
        $activemenu = 'alamat';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $jemaah = JemaahModel::find($request->session()->get('id_jemaah'));
        return view('jemaah.alamat', compact('activemenu', 'nama', 'jemaah'));
    }
    public function editAlamat(Request $request)
    {
        $model = JemaahModel::find($request->session()->get('id_jemaah'));
        $model->alamat = $request->input('alamat');
        $model->rt_rw = $request->input('rt_rw');
        $model->kelurahan_desa = $request->input('kelurahan_desa');
        $model->kecamatan = $request->input('kecamatan');
        $model->kabupaten = $request->input('kabupaten');
        $model->kodepos = $request->input('kodepos');


        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    // new
    public function passport(Request $request)
    {
        $activemenu = 'passport';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $jemaah = JemaahModel::find($request->session()->get('id_jemaah'));
        return view('jemaah.passport', compact('activemenu', 'nama', 'jemaah'));
    }

    public function editpassport(Request $request)
    {
        $model = JemaahModel::find($request->session()->get('id_jemaah'));
        $model->nama_lengkap = $request->input('nama_lengkap');
        $model->email = $request->input('email');
        $model->tempat_lahir = $request->input('tempat_lahir');
        $model->tanggal_lahir = $request->input('tanggal_lahir');
        $model->nik = $request->input('nik');
        $model->jenis_kelamin = $request->input('jenis_kelamin');
        $model->pekerjaan = $request->input('pekerjaan');
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function keberangkatan(Request $request)
    {
        $activemenu = 'alamat';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $jemaah = JemaahModel::find($request->session()->get('id_jemaah'));
        return view('jemaah.keberangkatan', compact('activemenu', 'nama', 'jemaah'));
    }
    public function editkeberangkatan(Request $request)
    {
        $model = JemaahModel::find($request->session()->get('id_jemaah'));
        $model->nama_lengkap = $request->input('nama_lengkap');


        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }
}
