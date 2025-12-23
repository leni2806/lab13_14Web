# 🌐 PRAKTIKUM 13/14
🏫 **Universitas Pelita Bangsa**

💐 **Nama:** Leni

🆔 **NIM:** 312410442

💻 **Kelas:** TI.24.A5

👨‍💻 **Mata Kuliah:** Pemrograman Web

📅 **Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom

 ## 📂 **Struktur Folder Project**

```
pagination/
│
├── config/
│   └── koneksi.php          # Konfigurasi koneksi database
│
├── data/
│   ├── barang.php           # Menampilkan daftar barang (bisa dengan pagination)
│   ├── tambah.php           # Form tambah barang
│   ├── simpan.php           # Proses simpan data barang ke database
│   └── hapus.php            # Proses hapus data barang
│
├── layout/
│   ├── header.php           # Bagian header halaman (load CSS, navbar)
│   └── footer.php           # Bagian footer halaman (tutup tag HTML, load JS)
│
├── images/                  # Folder untuk menyimpan gambar barang yang diupload
│   └── (gambar barang)
│
├── assets/
│   └── style.css            # File CSS custom dengan tema pink
│
└── index.php                # Halaman utama daftar barang dengan pagination
```

## 📄 **Deskripsi Singkat Project**
Aplikasi ini merupakan sistem manajemen data barang dengan fitur pagination, pencarian, dan CRUD 
(Create, Read, Update, Delete). Aplikasi ini menggunakan PHP dan MySQL untuk mengelola data barang beserta gambar produknya.

```
## Penjelasan Fungsi File
- `config/koneksi.php`: File ini berisi konfigurasi untuk menghubungkan aplikasi dengan database MySQL.
- `data/barang.php`: Menampilkan daftar barang dengan opsi pagination.
- `data/tambah.php`: Form untuk menambahkan data barang baru.
- `data/simpan.php`: Proses untuk menyimpan data barang baru ke database.
- `data/hapus.php`: Proses untuk menghapus data barang dari database.
- `layout/header.php`: Bagian header halaman yang memuat CSS dan navbar.
- `layout/footer.php`: Bagian footer halaman yang menutup tag HTML dan memuat JS.
- `images/`: Folder untuk menyimpan gambar barang yang diupload.
- `assets/style.css`: File CSS custom dengan tema pink untuk styling aplikasi.

```

## 🚀 **Fitur Utama**
- **Pagination:** Menampilkan data barang dalam halaman yang terpisah untuk memudahkan navigasi.
- **CRUD:** Menambahkan, mengedit, menghapus, dan menampilkan data barang.
- **Upload Gambar:** Setiap barang dapat memiliki gambar yang diupload dan ditampilkan.
- **Pencarian:** Memudahkan pencarian barang berdasarkan nama atau kategori.

```

## Kode Utama: 
```php
// Contoh kode untuk koneksi database (config/koneksi.php)
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "prak13";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

```

## 🛠️ **Teknologi yang Digunakan**
- PHP
- MySQL
- HTML/CSS (dengan tema pink)
- Bootstrap (untuk styling dan layout responsif)

```
## 📸 **Tangkapan Layar Aplikasi**
1. halaman utama dengan pagination
<img src="img/utama.png" width="450">

2. form tambah barang
<img src="img/tambah.png" width="450">

3. halaman edit barang
<img src="img/edit.png" width="450">

4. tampilan pagination
<img src="img/pagination.png" width="450">

5. tampilan pencarian data
<img src="img/cari.png" width="450">

```
## 📥 Cara Instalasi

1. **Persyaratan Sistem**
   - XAMPP (PHP 7.4 atau lebih tinggi)
   - MySQL
   - Web Browser (Chrome, Firefox, dll.)

2. **Langkah Instalasi**
   - Download dan instal XAMPP.
   - Jalankan Apache dan MySQL di XAMPP.
   - Buat database baru bernama `prak13`.
   - Import file SQL `prak13.sql` ke dalam database.
   - Copy folder project ke dalam direktori `htdocs` di XAMPP.
   - Buka browser dan akses `http://localhost/prak13`.
```
