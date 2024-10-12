<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>
            <input type="submit" value="Submit">
            <br>
            <div id="hasil"></div>
        </form>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("#email").val();
                    var valid = true;

                    if (nama === "") {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }

                    if (email === "") {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }

                    if (!valid) {
                        event.preventDefault(); // Mencegah pengiriman form jika validasi gagal
                    } else {
                        // Jika validasi berhasil, lanjutkan dengan pemrosesan data
                        event.preventDefault(); // Mencegah pengiriman form secara default

                        // Mengumpulkan data form
                        var formData = $("#myForm").serialize();

                        // Kirim data ke server PHP menggunakan AJAX
                        $.ajax({
                            url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
                            type: "POST",
                            data: formData,
                            success: function(response) {
                                // Tampilkan hasil dari server di div "hasil"
                                $("#hasil").html(response);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>