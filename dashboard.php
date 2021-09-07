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

    <title>Halaman Dashboard</title>
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
          <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

          <div class="row text-white">
          <div class="card bg-info ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="fas fa-users"></i>
              </div>
              <h5 class="card-title">JUMLAH MEMBER</h5>
              <div class="display-4">500</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-3"></i></p></a>
            </div>
          </div>

          <div class="card bg-success ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
              <i class="fas fa-utensils"></i>
              </div>
              <h5 class="card-title">MENU PANGSIT</h5>
              <div class="display-4">5</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-3"></i></p></a>
            </div>
          </div>

          <div class="card bg-danger ml-5" style="width: 18rem;">
            <div class="card-body ">
              <div class="card-body-icon">
              <i class="fas fa-boxes"> </i>
              </div>
              <h5 class="card-title">STOCK PANGSIT</h5>
              <div class="display-4">1000</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-3"></i></p></a>
            </div>
          </div>
          </div>
          <div class="row mt-4">
          <div class="card ml-5 text-white text-center" style="width: 18rem;">
              <div class="card-header bg-danger display-4 pt-4 pb-4">
              <i class="fab fa-instagram"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title text-danger">INSTAGRAM</h5>
                <a href="https://www.instagram.com/mcumyyyyyy/" class="btn btn-danger">FOLLOW</a>
              </div>
            </div>

            <div class="card ml-5 text-white text-center" style="width: 18rem;">
              <div class="card-header bg-info display-4 pt-4 pb-4">
              <i class="fab fa-facebook-square"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title text-info">FACEBOOK</h5>
                <a href="https://www.facebook.com/rumy.togubu/" class="btn btn-info">LIKE</a>
              </div>
            </div>

            <div class="card ml-5 text-white text-center" style="width: 18rem;">
              <div class="card-header bg-success display-4 pt-4 pb-4">
              <i class="fab fa-twitter-square"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title text-success">TWITTER</h5>
                <a href="https://twitter.com/Ruummmmm" class="btn btn-success">FOLLOW</a>
              </div>
            </div>

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