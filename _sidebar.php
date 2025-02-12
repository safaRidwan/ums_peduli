<div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">UMS Peduli</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="dashmin-1.0.0/img/adolf.jpeg" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">Musafa Ridwan</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="dashboard.php" class="nav-item nav-link
                    <?php if ($halaman == "dashboard") {
                        echo "active";
                    } ?>">
                    <i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                <a href="input.php" class="nav-item nav-link
                    <?php if ($halaman == "input") {
                        echo "active";
                    } ?>">
                    <i class="fa fa-keyboard me-2"></i>Tambah donasi</a>

                <a href="data_donasi.php" class="nav-item nav-link
                    <?php if ($halaman == "data_donasi") {
                        echo "active";
                    } ?>">
                    <i class="fa fa-table me-2"></i>Data donasi</a>
            </div>
        </nav>
    </div>
    <!-- Sidebar End -->