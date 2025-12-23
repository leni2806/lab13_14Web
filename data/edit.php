<?php
require "../config/koneksi.php";
require "../layout/header.php";

$id = $_GET['id'];

// Ambil data lama
$data = mysqli_fetch_assoc(
    mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'")
);

if (isset($_POST['update'])) {
    $nama   = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok   = $_POST['stok'];

    // Cek apakah ganti gambar
    if ($_FILES['gambar']['name'] != "") {
        $gambar = $_FILES['gambar']['name'];
        $tmp    = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmp, "../images/" . $gambar);

        mysqli_query($koneksi, "
            UPDATE barang SET
            nama_barang='$nama',
            kategori='$kategori',
            harga_jual='$harga_jual',
            harga_beli='$harga_beli',
            stok='$stok',
            gambar='$gambar'
            WHERE id_barang='$id'
        ");
    } else {
        mysqli_query($koneksi, "
            UPDATE barang SET
            nama_barang='$nama',
            kategori='$kategori',
            harga_jual='$harga_jual',
            harga_beli='$harga_beli',
            stok='$stok'
            WHERE id_barang='$id'
        ");
    }

    header("location:../index.php");
}
?>

<div class="card shadow border-0">
    <div class="card-header bg-light">
        <h5 class="mb-0">Edit Barang</h5>
    </div>

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control"
                       value="<?= $data['nama_barang']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control"
                       value="<?= $data['kategori']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control"
                       value="<?= $data['harga_jual']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control"
                       value="<?= $data['harga_beli']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control"
                       value="<?= $data['stok']; ?>" required>
            </div>

            <div class="mb-3">
                <label>Gambar (kosongkan jika tidak diganti)</label><br>
                <img src="../images/<?= $data['gambar']; ?>" width="80" class="mb-2">
                <input type="file" name="gambar" class="form-control">
            </div>

            <button name="update" class="btn btn-pink">
                Update
            </button>
            <a href="../index.php" class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>
</div>

<?php require "../layout/footer.php"; ?>
