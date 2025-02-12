<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$halaman = 'input';

require_once('_koneksi.php');
require_once('_css.php');
require_once('_js.php');
require_once("_sidebar.php");
require_once("_header.php");
?>

<form action="crud.php" method="POST">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah data Donatur</h6>

            <div class="form-floating mb-3">
                <input name="nama" type="text" class="form-control" placeholder="Nama">
                <label>Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input name="nominal" type="number" class="form-control" placeholder="Nominal">
                <label>Nominal</label>
            </div>
            <div class="form-floating mb-3">
                <select name="metode" class="form-select">
                    <option selected=""></option>
                    <option value="Transfer">Transfer</option>
                    <option value="Qris">Qris</option>
                    <option value="Shopeepay">Shopeepay</option>
                    <option value="Gopay">Gopay</option>
                </select>
                <label>Metode Pembayaran</label>
            </div>
            <div class="form-floating mb-3">
                <input type="datetime-local" class="form-control" name="tgl_diterima">
                <label>Tanggal Diterima</label>
            </div>

            <div class="">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>

        </div>
    </div>
</form>
<?php require_once("_footer.php") ?>