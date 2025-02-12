<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$halaman = ('dashboard');
require_once('_koneksi.php');
require_once("_css.php");
require_once("_js.php");
require_once("_sidebar.php");
require_once("_header.php");
?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-light rounded-top p-4">
        <div class="row">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                <h5 class="card-title text-primary"> Selamat datang min ! 🎉</h5>
                    <p class="mb-4">
                        <?= $_SESSION['nama']; ?>
                    </p>
            </div>
            <div class="col-12 col-sm-6 text-center text-sm-end">
                <img src="dashmin-1.0.0/img/admin.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
            </div>
        </div>
    </div>
</div>
