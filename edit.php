<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

require_once('_koneksi.php');
require_once('_css.php');
require_once('_js.php');

$id = $_GET['id'];
$query = "SELECT * FROM donasi WHERE id = $id";
$datadonasi = mysqli_query($conn, $query);
?>

<?php foreach ($datadonasi as $donasi) { ?>
<form action="crud.php" method="POST">
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Perbarui data Donatur</h6>
            <div class="form-floating mb-3">
                <input type="hidden" name="id" value="<?= $donasi['id'] ?>">
                <input name="nama" type="text" class="form-control" value="<?= $donasi['nama'] ?>">
                <label>Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input name="nominal" type="number" class="form-control" value="<?= $donasi['nominal'] ?>">
                <label>Nominal</label>
            </div>
            <div class="form-floating mb-3">
                <select name="metode" class="form-select">
                    <option><?= $donasi['metode'] ?></option>
                    <option value="Transfer">Transfer</option>
                    <option value="Qris">Qris</option>
                    <option value="Shopeepay">Shopeepay</option>
                    <option value="Gopay">Gopay</option>
                </select>
                <label>Metode Pembayaran</label>
            </div>
            <div class="form-floating mb-3">
                <input type="datetime-local" class="form-control" name="tgl_diterima" value="<?= $donasi['tgl_diterima'] ?>">
                <label>Tanggal Diterima</label>
            </div>

            <div class="">
                <a href="data_donasi.php" class="btn btn-secondary">Kembali</a>
                <button type="submit" name="edit" class="btn btn-primary">Simpan Perubahan</button>
            </div>


        </div>
    </div>
</form>
<?php } ?>
