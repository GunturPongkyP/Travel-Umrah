function edit() {
    Swal.fire({
        title: 'Edit Data Diri?',
        text: "Apakah Anda yakin ingin merubah data diri Anda?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, do it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                method: "POST",
                url: "proses_ubah_biodata.html",
                data: {
                    nama_lengkap: $("#nama_lengkap").val(),
                    email: $("#email").val(),
                    tempat_lahir: $("#tempat_lahir").val(),
                    tanggal_lahir: $("#tanggal_lahir").val(),
                    nik: $("#nik").val(),
                    jenis_kelamin: $("#jenis_kelamin").val(),
                    pekerjaan: $("#pekerjaan").val(),
                },
                success: function (response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil merubah biodata diri.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.reload();
                        }
                    })
                },
                error: function (error) {
                    Swal.fire(
                        'Error!',
                        'Gagal merubah biodata diri.',
                        'error'
                    )
                    console.log("Error : ", error);
                }
            })

        }
    })
}