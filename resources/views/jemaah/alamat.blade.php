@extends('jemaah.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lengkapi Alamat</h1>
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
                                <h3 class="card-title">Alamat Jamaah</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat"
                                        value="{{ optional($jemaah)->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label>RT/RW</label>
                                    <input type="integer" class="form-control" name="rt" id="rt"
                                        value="{{ optional($jemaah)->rt_rw }}">
                                </div>
                                <div class="form-group">
                                    <label>Kelurahan/Desa</label>
                                    <input type="text" class="form-control" name="kelurahan_desa" id="kelurahan_desa"
                                        value="{{ optional($jemaah)->kelurahan_desa }}">
                                </div>
                                <div class="form-group">
                                    <label>Kecematan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                        value="{{ optional($jemaah)->kecamatan }}">
                                </div>
                                <div class="form-group">
                                    <label>Kabupaten</label>
                                    <input type="text" class="form-control" name="kabupaten" id="kabupaten"
                                        value="{{ optional($jemaah)->kabupaten }}">
                                </div>
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="integer" class="form-control" name="kodepos" id="kodepos"
                                        value="{{ optional($jemaah)->kodepos }}">
                                </div>



                                <div class="form-group">
                                    <button class="btn btn-primary" style="float: right;"
                                        onclick="editAlamat()">Simpan</button>
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
