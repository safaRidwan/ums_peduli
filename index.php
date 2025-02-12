<?php
require_once('_koneksi.php');
require_once('_css.php');
require_once('_js.php');

$query = "SELECT * FROM donasi ORDER BY id ASC";
$datadonasi = mysqli_query($conn, $query);

$queryDana = "SELECT SUM(nominal) AS total_dana FROM donasi";
$resultDana = mysqli_query($conn, $queryDana);
$dataDana = mysqli_fetch_assoc($resultDana);
$totalDana = $dataDana['total_dana'] ?? 0;

$queryDonatur = "SELECT COUNT(DISTINCT nama) AS total_donatur FROM donasi";
$resultDonatur = mysqli_query($conn, $queryDonatur);
$dataDonatur = mysqli_fetch_assoc($resultDonatur);
$totalDonatur = $dataDonatur['total_donatur'] ?? 0;

$queryTanggal = "SELECT MAX(tgl_diterima) AS tgl_terakhir FROM donasi";
$resultTanggal = mysqli_query($conn, $queryTanggal);
$dataTanggal = mysqli_fetch_assoc($resultTanggal);
$tglTerakhir = $dataTanggal['tgl_terakhir'] ?? 'Belum ada donasi';
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>UMS Peduli</title>
        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="TopicListing-1.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="TopicListing-1.0.0/css/bootstrap-icons.css" rel="stylesheet">
        <link href="TopicListing-1.0.0/css/templatemo-topic-listing.css" rel="stylesheet">      
    </head>

    <body id="top">
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <img src="dashmin-1.0.0/img/ums1.png" alt="" style="width: 100px; height: auto; margin-right: 10px;">
                    <a class="navbar-brand" href="home.php">
                        <span> Peduli</span>
                    </a>
                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="login.php">Login</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container-fluid px-10">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">UMS Peduli</h1>
                            <h6 class="text-center mb-4">yuk, kita donasikan sebagian rezeki kita kepada orang yang membutuhkan</h6>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Rp <?= number_format($totalDana, 0, ',', '.') ?></h5>
                                                            <p class="mb-0">Dana Terkumpul</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2"><?= $totalDonatur ?></h5>
                                                            <p class="mb-0">Donatur Tergabung</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2"><?= $tglTerakhir ?></h5>
                                                            <p class="mb-0">Tgl Donasi Terakhir</p>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                            
                        </div>
                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row justify-content-center">

                    <div class="col-lg-12 col-6 mb-4 mb-lg-0">
                                <div class="custom-block bg-white shadow-lg">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Nominal</th>
                                                    <th scope="col">metode</th>
                                                    <th scope="col">Tanggal Diterima</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($datadonasi as $donasi) { ?>
                                                    <tr>
                                                        <th><?= $no; ?></th>
                                                        <td><?= $donasi['nama'] ?></td>
                                                        <td>Rp <?= number_format($donasi['nominal']) ?></td>
                                                        <td><?= $donasi['metode'] ?></td>
                                                        <td><?= $donasi['tgl_diterima'] ?></td>
                                                    </tr>
                                                <?php $no++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>

            <footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="home.php">
                            <span>Terimakasih telah berdonasi</span>
                        </a>
                    </div>


                </div>
            </div>
        </footer>
        </main>


        <!-- JAVASCRIPT FILES -->
        <script src="TopicListing-1.0.0/js/jquery.min.js"></script>
        <script src="TopicListing-1.0.0/js/bootstrap.bundle.min.js"></script>
        <script src="TopicListing-1.0.0/js/jquery.sticky.js"></script>
        <script src="TopicListing-1.0.0/js/click-scroll.js"></script>
        <script src="TopicListing-1.0.0/js/custom.js"></script>

    </body>
</html>
