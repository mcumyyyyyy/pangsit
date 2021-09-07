
<html>
    <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">

        <title>CUM PANGSIT</title>
    </head>
<body>
    <div class="container">
        <h2 class="alert alert-dark text-center mt-3">INPUT PANGSIT</h2>

        <form action="cekpangsit.php" method="post">
            <div class="form-group">
                <label>Kode Pangsit</label>
                <input type="text" name="kode" class="form-control" placeholder="Masukan Kode Pangsit">
            </div>

             <div class="form-group">
                <label>Nama Pangsit</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Pangsit">
            </div>

            <div class="form-group">
                <label>Kategori Pangsit</label>
                <input type="text" name="kategori" class="form-control" placeholder="Masukan Katagori">
            </div>
             
            <div class="form-group">
                <label>Kadaluarsa Pangsit</label>
                <input type="date" name="tahun" class="form-control" placeholder="Masukan Tanggal">
            </div>

            <button type = "submit" class = "btn btn-primary">Input</button>
   
         </form>
    </div>
</body>
<script scr="Bootstrap/js/bootstrap.min.js"></script>
</html>