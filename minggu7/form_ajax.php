<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP dan jQuery</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h2>Contoh Form dengan PHP dan jQuery</h2>
        <form id="myForm" method="post" action="proses_lanjut.php">
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>

        <div id="hasil">
        </div>

        <script>
            $(document).ready(function() {
                $("#myForm").submit(function(e) {
                    e.preventDefault(); // Mencegah pengiriman form secara default

                    // Mengumpulkan data form
                    var formData = $("#myForm").serialize();

                    // Kirim data ke server PHP menggunakan AJAX
                    $.ajax({
                        url: "proses_lanjut.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: formData,
                        success: function(response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>