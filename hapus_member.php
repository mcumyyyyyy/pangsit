<?php
//panggil file koneksi.php yang sudah anda buat
include "koneksi.php";

$id=$_GET['id_member'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($koneksi_db, "DELETE FROM tbl_members where id_member='$id'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='member.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='member.php'</script>";
}
?>