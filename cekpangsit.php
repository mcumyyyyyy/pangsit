<?php
include "koneksi.php";

$kode        = $_POST['kode'];
$namaa       = $_POST['nama'];
$kat         = $_POST['kategori'];
$tahun        = $_POST['tahun'];



$query = mysqli_query($koneksi_db,'insert into tbl_pangsits(kd_pangsit,namapangsit,kat_pangsit,awet_pangsit) values 
                        ("'.$kode.'","'.$namaa.'","'.$kategori.'","'.$tahun.'")');
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='menu.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='inputpangsit.php'</script>\n";
}
?>