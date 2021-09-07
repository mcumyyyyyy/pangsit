<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Admin CSS -->
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

    <title>Halaman Pembelian</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">WELCOME ADMIN! | <b>CUM PANGSIT</b></a>
       
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

          <div class="icon ml-4">
            <h5>
              <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
              <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
              <a href="form_login.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i></a>
            </h5>
          </div>
        </div>
      </nav>

      <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.php"> <i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a> <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="member.php"> <i class="fas fa-users mr-2"></i> Daftar Member</a> <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="menu.php"><i class="fas fa-utensils mr-2"></i> Menu Pangsit</a> <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="pembelian.php"><i class="fas fa-shopping-basket mr-2"></i> Pembelian Pangsit</a> <hr class="bg-secondary">
          </li>
        </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
          <h3><i class="fas fa-shopping-basket mr-2"></i> DAFTAR PEMBELIAN</h3><hr>
          <div class="row text-white">
          <table class="table table-dark" >
            <thead>   
                <tr>
                    <th scope="row">No</th>
                    <th scope="col">Tanggal Pembelian Pangsit</th>
                    <th >Kode Pembelian</th>
                    <th >Kode Pangsit</th>
                    <th >ID Member</th>
                    <th >Nama Member</th>
                    <th >Nama Pangsit</th>
                    <th >Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $query    = mysqli_query($koneksi_db,"SELECT * FROM tbl_pembelians INNER JOIN tbl_members on(tbl_pembelians.id_member = tbl_members.id_member) 
                            INNER JOIN tbl_pangsits on(tbl_pembelians.kd_pangsit = tbl_pangsits.kd_pangsit)where tbl_pembelians.status = 'LAKU'");
                $no = 1;
                while ($data=mysqli_fetch_array($query)) {
                ?>           
                <tr class="odd gradeX">
                    <td><?php echo $no?></td>
                    <td><?php echo $data['tgl_pembelian'];?></td>
                    <td><?php echo $data['kd_pembelian'];?></td>
                    <td><?php echo $data['kd_pangsit'];?></td>
                    <td><?php echo $data['id_member'];?></td>
                    <td><?php echo $data['usernameac'];?></td>
                    <td><?php echo $data['namapangsit'];?></td>
                    <td class="center"><?php echo $data['status'];?></td>
                    <td class="center"><a href="edit.php" ><i class="fas fa-edit"></i></a></td>
                    <td class="center"><a href="hapus_account.php"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php $no++; }?>
            </tbody>
            </table> 
            <a href="inputpembelian.php" class="btn btn-success">Input Pembelian</a>
          </div>    
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/Javascript" src="js/admin.js"></script>
  </body>
</html>