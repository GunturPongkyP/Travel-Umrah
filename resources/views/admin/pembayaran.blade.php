@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pemabayaran</h1>
                    </div>
                    <div class="col-sm-6">
                        <!-- <button class="btn btn-primary" style="float: right;" id="openAddModal">Tambah jemaah</button> -->
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
                                <h3 class="card-title">List Data Jemaah</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nama Peserta</th>
                                            <th>Tanggal Keberangkatan</th>
                                            <th>Adminitrasi</th>
                                            <th>Pembayaran</th>
                                            <th>No HP</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($jemaah as $value)
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td>
                                                    {{ $value->nama_lengkap }} <br />

                                                </td>
                                                <td>
                                                    Keberangkatan {{ $value->tanggal_keberangkatan }} <br />

                                                </td>
                                                <td>
                                                    Adminitrasi : {{ $value->adminitrasi }} <br />
                                                </td>
                                                <td>
                                                    Pembayaran : {{ $value->pembayaran }} <br />
                                                </td>
                                                <td>
                                                    No HP : {{ $value->no_hp }} <br />
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
