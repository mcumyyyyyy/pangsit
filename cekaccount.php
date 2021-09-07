<?php
include "koneksi.php";

$id = $_POST['id'];
$nama    = $_POST['nama'];
$alamat    = $_POST['alamat'];
$mail    = $_POST['email'];
$status    = $_POST['level'];

$query = mysqli_query($koneksi_db, 'insert into tbl_members(id_member,usernameac,alamatac,emailac,level) values 
                    ("'.$id.'","'.$nama.'","'.$alamat.'","'.$mail.'","'.$status.'")');
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='member.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='inputmember.php'</script>\n";
}
?>