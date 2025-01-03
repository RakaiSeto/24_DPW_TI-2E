<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
        <title>Data Anggota</title>

        <!-- Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlW2g9ThtTtUHHuWQxa8bKHQ4IYQiW0OJfS5iCjaA17K4J/UOegkiP3yFx" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php" style="color: #fff;">Aplikasi Dengan Ajax</a>
        </nav>

        <div class="container">
            <h2 align="center" style="margin: 3px;">Data Anggota</h2>

            <form method="post" class="form-data" id="form-data">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="hidden" name="id" id="id">
                            <input type="text" name="id" id="id" class="form-control" required="true">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required="true">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jenis_kelamin" id="jenisKel1" value="L" required="true"> Laki-laki
                    <input type="radio" name="jenis_kelamin" id="jenisKel2" value="P"> Perempuan
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="number" name="no_telp" id="no_telp" class="form-control" required="true">
                </div>

                <div class="form-group">
                    <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>

            <div id="data"></div>
        </div>

        <div class="text-center">© <?php echo date('Y'); ?> Copyright <a href="https://google.com"> Desain Dan Pemrograman Web</a>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // Mencegah CSRF Token Kemanan
                $.ajaxSetup({
                    headers: {
                        'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(".data").load("data.php");

            });
        </script>
    </body>
</html>