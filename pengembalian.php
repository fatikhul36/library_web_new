<?php
include './koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = ("UPDATE peminjaman set id_anggota = null,tanggal_dipinjam = null, tanggal_pengembalian = null WHERE id_buku = '$id_buku'");
$result = $conn->query($sql);

if($result){
    echo "<div class='alert alert-primary alert-success' role='alert'> <a href='tampil.php' >Kembali</a> <br>berhasil dikembalikan</div>";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>