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
            title: "Are you sure ?",
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
    $(".tampilModalTambah").on("click", function () {
        $("#judulModal").html("Create Category");
        $(".modal-footer button[type=submit]").html("Create");
        $("#name").val("");
        $("#id").val("");
        $(".modal-body form").attr(
            "action",
            "http://localhost/minpro%203/public/admin/create"
        );
    });
    $(".tampilModalUbah").on("click", function () {
        $("#judulModal").html("Change Category");
        $(".modal-footer button[type=submit]").html("Update");
        $(".modal-body form").attr(
            "action",
            "http://localhost/minpro%203/public/admin/category_edit"
        );

        const id = $(this).data("id");

        $.ajax({
            url: "http://localhost/minpro%203/public/admin/getUbah",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                $("#name").val(data.name);
                $("#id").val(data.id);
            },
        });
    });
    $(".tampilModalTambahAkun").on("click", function () {
        $("#judulModal").html("Create Account");
        $(".modal-footer button[type=submit]").html("Create");
        $("#id").val("");
        $("#name").val("");
        $("#username").val("");
        $("#email").val("");
        $("#password").val("");
        $("#role").val("0");
        $("#passwordDiv").show();
        $(".modal-body form").attr(
            "action",
            "http://localhost/minpro%203/public/superadmin/create"
        );
    });
    $(".tampilModalUbahAkun").on("click", function () {
        $("#passwordDiv").hide();
        $("#judulModal").html("Change Account");
        $(".modal-footer button[type=submit]").html("Change");
        $("#name").val("");
        $("#id").val("");
        $(".modal-body form").attr(
            "action",
            "http://localhost/minpro%203/public/superadmin/update"
        );
        const id = $(this).data("id");

        $.ajax({
            url: "http://localhost/minpro%203/public/superadmin/getUbah",
            data: { id: id },
            method: "post",
            dataType: "json",
            success: function (data) {
                console.log(data);
                $("#id").val(data.id);
                $("#name").val(data.name);
                $("#username").val(data.username);
                $("#email").val(data.email);
                $("#role").val(data.is_admin);
            },
        });
    });
});
