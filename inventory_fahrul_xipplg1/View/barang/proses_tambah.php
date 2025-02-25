<?php 

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$nama_barang = $_POST['nama_barang'];

include '../../Config/Koneksi.php';
$query = mysqli_query($conn, 
"INSERT INTO barang VALUES('$id_barang', '$id_jenis ', '$harga', '$stok', '$nama_barang')");

echo "
<script>
alert('Berhasil');
</script>
<script>
window.location.href='index.php';
</script>";