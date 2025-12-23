<?php
$per_page = 2;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;

$start = ($page - 1) * $per_page;

$keyword = isset($_GET['cari']) ? $_GET['cari'] : '';
$keyword = mysqli_real_escape_string($koneksi, $keyword);

$where = "";
if ($keyword != "") {
    $where = "WHERE nama_barang LIKE '%$keyword%' 
              OR kategori LIKE '%$keyword%'";
}

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM barang $where LIMIT $start, $per_page"
);

$total = mysqli_fetch_assoc(
    mysqli_query(
        $koneksi,
        "SELECT COUNT(*) AS total FROM barang $where"
    )
)['total'];

$total_page = ceil($total / $per_page);
