<?php
    include 'koneksi.php';
    $query = mysqli_query($koneksi_db, "SELECT max(kd_pembelian) as maxKode FROM tbl_pembelians");
    $data = mysqli_fetch_array($query);
    $kodepinjam = $data['maxKode'];
    $noUrut = (int) substr($kodepinjam, 3, 3);
    $noUrut++;
    $char = 'PJ';
    $kode = $char . sprintf("%03s", $noUrut);
    ?>    
<!DOCTYPE html>
<html>
<head>
    <title>Cum Pangsit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'koneksi.php';
    $kdpangsit ="";
    $np ="";
    $kate ="";
    $idmember ="";
    $user ="";
    $status = "";

    if(isset($_POST['cari'])){
        $kdpangsit = $_POST['kd_pangsit'];

        $query = "SELECT * from tbl_pangsits WHERE kd_pangsit = '$kdpangsit'";
        $hasil = mysqli_query($koneksi_db, $query);
        $data = mysqli_fetch_array($hasil);

        if($hasil){
            $np = $data['namapangsit'];
            $kate = $data['kat_pangsit'];
        }else{
            echo "gagal";
        }
        $idmember = $_POST['id_member'];

        $query1 = "SELECT * from tbl_members WHERE id_member = '$idmember'";
        $hasil1 = mysqli_query($koneksi_db, $query1);
        $data1 = mysqli_fetch_array($hasil1);

        if ($hasil1) {
                     # code...
            $user = $data1['usernameac'];
                 }         
    }
        if(isset($_POST['submit'])){
            $kdpinjam = $_POST['kode'];
            $kode_pangsit = $_POST['kd_pangsit'];
            $nama_pangsit = $_POST['namapangs'];
            $kategori = $_POST['kategori'];
            $kode_user = $_POST['id_member'];
            $nama_user = $_POST['user'];
            $tglpembelian = $_POST['pembelian'];
            

            $add = mysqli_query($koneksi_db, "INSERT INTO tbl_pembelians (kd_pembelian, kd_pangsit, id_member, tgl_pembelian, status) 
            VALUES ('$kdpinjam', '$kode_pangsit', '$kode_user', '$tglpembelian', 'LAKU')");

            if($add){
                echo "<script>alert('data berhasil disimpan');
                document.location.href='pembelian.php'</script>\n";"";
            } else {
                echo 'Data Gagal Disimpan <br> <a href="inputpembelian.php">Kembali</a>';
            }
        }
    ?>
            <div class="container">
                <form action="inputpembelian.php" method="post">
                <h2 class="alert alert-dark text-center mt-3">PEMBELIAN PANGSIT</h2>
                <div class="form-group">
                    <label for="kode" class="text-dark">Kode Pembelian</label>
                    <input type="text" class="form-control" name="kode" value="<?php echo $kode ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="sel1">Kode Pangsit</label><br>
                    <input type="text" name="kd_pangsit" value="<?php echo $kdpangsit?>">
                    <input type="submit" name="cari" value="cari"><br>
                    <label>Nama Pangsit</label>
                    <input class="form-control" type="text" name="namapangs" value="<?php echo $np ?>" readonly>
                    <label>kategori</label>
                    <input class="form-control" type="text" name="kategori" value="<?php echo $kate ?>" readonly>                                        
                </div>
                <div class="form-group">
                    <label>Id Member</label><br>
                    <input type="text" name="id_member" value="<?php echo $idmember?>">
                    <input type="submit" name="cari" value="cari"><br>
                    <label>Nama Member</label>
                    <input type="text" name="user" class="form-control" value="<?php echo $user ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="pembelian" class="text-dark">Tgl Pembelian</label>
                    <input type="date" class="form-control" name="pembelian" >
                </div>

                
            

                <div class="form-group">
                    <a href="#" class="btn btn-dark">Cancel</a>
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>
                </form>
            </div>
</body>