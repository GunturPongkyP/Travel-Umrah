function editAlamat() {
    Swal.fire({
        title: 'Tambah data?',
        text: "Apakah Anda sudah benar memasukan Alamat?",
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
                url: "proses_ubah_alamat.html",
                data: {
                    alamat: $("#alamat").val(),
                    rt_rw: $("#rt_rw").val(),
                    kelurahan_desa: $("#kelurahan_desa").val(),
                    kecematan: $("#kecematan").val(),
                    kabupaten: $("#kabupaten").val(),
                    kodepos: $("#kodepos").val(),
                    
                },
                success: function (response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Berhasil menambahkan Alamat.',
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