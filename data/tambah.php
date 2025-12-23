<?php
require "../config/koneksi.php";
require "../layout/header.php";

if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok   = $_POST['stok'];

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp    = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($tmp, "../images/" . $gambar);

    mysqli_query($koneksi, "
        INSERT INTO barang 
        (nama_barang, kategori, harga_jual, harga_beli, stok, gambar)
        VALUES
        ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok', '$gambar')
    ");

    header("location:../index.php");
}
?>

<div class="card shadow border-0">
    <div class="card-header bg-light">
        <h5 class="mb-0">Tambah Barang</h5>
    </div>

    <div class="card-body">
        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Harga Beli</label>
                <input type="number" name="harga_beli" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" required>
            </div>

            <button name="simpan" class="btn btn-pink">
                Simpan
            </button>
            <a href="../index.php" class="btn btn-secondary">
                Kembali
            </a>

        </form>
    </div>
</div>

<?php require "../layout/footer.php"; ?>
