<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/sidebars.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
</head>
<style>
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="d-flex">