<html>
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <title>Cum Pangsit</title>
    </head>
    <body>

     <div class="container">
        <h2 class="alert alert-dark text-center mt-3">PENDAFTARAN MEMBER</h2>
        
        <form method="post" action="cekaccount.php" >
            <div class="form-group">
                <label>ID Member</label>
                <input type="text" name="id" class="form-control" placeholder="Masukan ID Member">
            </div>
            <div class="form-group">
                <label>Nama Member</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Member">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email">
            </div>

            <div class="form-group">
                <label>Level</label>
                <input type="text" name="level" class="form-control" placeholder="Masukan Level">
            </div>

            
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="submit" class="btn btn-primary">Kembali</button>
        </form>
    </body>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</html>