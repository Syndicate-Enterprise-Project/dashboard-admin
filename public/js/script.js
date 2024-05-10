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
            title: "Apakah Anda yakin?",
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
        $("#judulModal").html("Tambah Akun");
        $(".modal-footer button[type=submit]").html("Tambah");
        $("#id").val("");
        $("#name").val("");
        $("#username").val("");
        $("#email").val("");
        $("#password").val("");
        $("#role").val("0");
        $("#passwordDiv").show();
        $(".modal-body form").attr(
            "action",
            "http://admin.cherysamarinda.site//Account/create"
        );
    });
    $(".tampilModalUbahAkun").on("click", function () {
        $("#passwordDiv").hide();
        $("#judulModal").html("Ganti Akun");
        $(".modal-footer button[type=submit]").html("Change");
        $("#name").val("");
        $("#id").val("");
        $(".modal-body form").attr(
            "action",
            "http://admin.cherysamarinda.site/Account/update"
        );
        const id = $(this).data("id");

        $.ajax({
            url: "http://admin.cherysamarinda.site/Account/getUbah",
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
