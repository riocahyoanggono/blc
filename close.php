<!DOCTYPE html>
<?php
session_start();
if ($_SESSION["closed"] != 1) {
    echo "<script> window.location = './';</script>";
} else {
?>
<html lang="id">
    <head>
        <title>Update Data Ditutup</title>
        <link rel="apple-touch-icon" sizes="57x57" href="lib/fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="lib/fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="lib/fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="lib/fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="lib/fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="lib/fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="lib/fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="lib/fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="lib/fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="lib/fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="lib/fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="lib/fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="lib/fav/favicon-16x16.png">
        <link rel="manifest" href="lib/fav/manifest.json">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Colorlib Templates">
        <meta name="author" content="Colorlib">
        <meta name="keywords" content="Colorlib Templates">
        <link href="view/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <link href="view/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <!-- Font special for pages-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- Vendor CSS-->
        <link href="view/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="view/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

        <!-- Main CSS-->
        <link href="view/css/main.css" rel="stylesheet" media="all">

    </head>
    <body style="background: #eee url(https://uploads.toptal.io/blog/image/123686/toptal-blog-image-1501178946393-ce513b02e7d488a192ed06a88c2f2759.png);">
        <div class="page-wrapper p-t-100 p-b-100 font-robo">
            <div class="wrapper wrapper--w680">
                <div class="card card-1">
                    <div class="card-heading"></div>
                    <div class="card-body">
                        <h3 class="title" style="text-align: center;">Update Data Online Untuk Akun Anda<br>Telah Ditutup.</h3>
                        <h4><br><strong>Informasi Lebih Lanjut:</strong></h4>
                        <br>WhatsApp : <a href="http://wa.me/6281217135053">081217135053</a>
                        <br>Instagram : <a href="http://instagram.com/brawijaya_language_center">@brawijaya_language_center</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
}
session_unset();