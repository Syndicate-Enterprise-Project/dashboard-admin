$(function () {
    const flashdata = $(".flash-data").data("flashdata");
    if (flashdata) {
        Swal.fire({
            title: flashdata.title,
            text: flashdata.pesan,
            icon: flashdata.icon,
        });
    }

    $(".tombol-hapus").on("click", function (e) {
        e.preventDefault();
        const href = $(this).attr("href");
        const pesan = $(this).data("pesan");

        Swal.fire({
<<<<<<< HEAD
            title: "Apakah Anda yakin?",
=======
            title: "Apakah Anda Yakin ?",
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
            text: pesan,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Delete",
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        });
    });
    $(".tombol-logout").on("click", function (e) {
        e.preventDefault();
        const href = $(this).attr("href");
        const pesan = $(this).data("pesan");

        Swal.fire({
            title: "Apakah Anda Yakin ?",
            text: pesan,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Logout",
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        });
    });
    $(".tampilModalTambahAkun").on("click", function () {
<<<<<<< HEAD
        $("#judulModal").html("Tambah Akun");
        $(".modal-footer button[type=submit]").html("Tambah");
=======
        $("#judulModal").html("Create Account");
        $(".modal-footer button[type=submit]").html("Create");
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        $("#id").val("");
        $("#name").val("");
        $("#username").val("");
        $("#email").val("");
        $("#password").val("");
        $("#role").val("0");
        $("#passwordDiv").show();
        $(".modal-body form").attr(
            "action",
<<<<<<< HEAD
            "http://admin.cherysamarinda.site//Account/create"
=======
            "http://localhost/awdd/public/Account/create"
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        );
    });
    $(".tampilModalUbahAkun").on("click", function () {
        $("#passwordDiv").hide();
<<<<<<< HEAD
        $("#judulModal").html("Ganti Akun");
=======
        $("#judulModal").html("Change Account");
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        $(".modal-footer button[type=submit]").html("Change");
        $("#name").val("");
        $("#id").val("");
        $(".modal-body form").attr(
            "action",
<<<<<<< HEAD
            "http://admin.cherysamarinda.site/Account/update"
=======
            "http://localhost/awdd/public/Account/update"
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
        );
        const id = $(this).data("id");

        $.ajax({
<<<<<<< HEAD
            url: "http://admin.cherysamarinda.site/Account/getUbah",
=======
            url: "http://localhost/awdd/public/Account/getUbah",
>>>>>>> c976bcdd5cdeb1a638f8733afe5bf260142cde2b
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#id").val(data.ID_pegawai);
                $("#name").val(data.nama_pegawai);
                $("#phone").val(data.hp_pegawai);
                $("#email").val(data.email_pegawai);
            },
        });
    });
});
