<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($koneksi_db, "select *from tbl_members where usernameac = '$user' and 
         passac = '$pass'");
$cek = mysqli_num_rows($query);
if($cek>0){
    echo '<script>
        alert("Login Account Succes!");
        location.href = "../projectakhir/dashboard.php";
    </script>';
} else{
    echo '<script>
    location.href = "form_login.php";
    </script>';
}
?>
