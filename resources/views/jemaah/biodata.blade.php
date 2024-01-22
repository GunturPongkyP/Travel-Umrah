@extends('jemaah.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lengkapi Data Diri</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Biodata Jemaah</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                        value="{{ optional($jemaah)->nama_lengkap }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="{{ $jemaah->email }}">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                        value="{{ optional($jemaah)->tempat_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                        value="{{ optional($jemaah)->tanggal_lahir }}">
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="integer" class="form-control" name="nik" id="nik"
                                        value="{{ optional($jemaah)->nik }}">
                                </div>



                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control select2bs4" name="jenis_kelamin" id="jenis_kelamin"
                                        style="width: 100%;">
                                        <option value="Laki-Laki"
                                            {{ $jemaah->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ $jemaah->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                        value="{{ optional($jemaah)->pekerjaan }}">
                                </div>
                                <div class="form-group">
                                    <label for="berkas_pas_foto">Pas Foto</label>
                                    <input type="file" class="form-control-file" name="berkas_pas_foto"
                                        id="berkas_pas_foto">
                                    <!-- Tambahkan pesan validasi jika diperlukan -->
                                    @error('berkas_pas_foto')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" style="float: right;" onclick="edit()">Simpan</button>
                                </div>
                            </div>


                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

            </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
