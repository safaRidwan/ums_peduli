<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
    require_once('_koneksi.php'); 
    require_once('_css.php') ;
    ?>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"></i>UMS Peduli</h3>
                            </a>
                            <h3>Log In</h3>
                        </div>
                        <form method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" name="username">
                                <label>Username</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" required class="form-control" name="password">
                                <label>Password</label>
                            </div>
                            <button type="submit" class="btn btn-outline-primary rounded-pill m-2 py-3 w-100 mb-4" name="login">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>
    <?php
        require_once('crud.php')
    ?>

    <!-- JavaScript Libraries -->
    <?php require_once('_js.php') ?>
    <!-- Template Javascript -->
</body>

</html>