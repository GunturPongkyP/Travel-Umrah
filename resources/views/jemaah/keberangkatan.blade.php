@extends('jemaah.layout')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Keberangkatan</h1>
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
                            <h3 class="card-title">Keberangkatan Jamaah</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tanggal Keberangkatan</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ optional($jemaah)->tanggal_lahir }}">
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