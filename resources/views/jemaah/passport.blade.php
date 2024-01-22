@extends('jemaah.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Lengkapi Passport</h1>
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
                                <h3 class="card-title">No Passport Jemaah</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label>No Passport</label>
                                    <input type="integer" class="form-control" name="no_passport" id="no_passport"
                                        value="{{ optional($jemaah)->no_passport }}">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama_passport" id="nama_passport"
                                        value="{{ optional($jemaah)->nama_passport }}">
                                </div>
                                <div class="form-group">
                                    <label>Tempat Dikeluarkan</label>
                                    <input type="text" class="form-control" name="tempat_dikeluarkan"
                                        id="tempat_dikeluarkan" value="{{ optional($jemaah)->tempat_dikeluarkan }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal dikeluarkan</label>
                                    <input type="date" class="form-control" name="tanggal_berlaku"
                                        id="tanggal_dikeluarkan" value="{{ optional($jemaah)->tanggal_dikeluarkan }}">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Berlaku</label>
                                    <input type="date" class="form-control" name="tanggal_berlaku" id="tanggal_berlaku"
                                        value="{{ optional($jemaah)->tanggal_berlaku }}">
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
