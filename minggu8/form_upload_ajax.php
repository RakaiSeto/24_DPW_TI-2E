<html>
    <head>
        <title>Upload File</title>
        <link rel="stylesheet" href="upload.css">
    </head>
    <body>
        <div class="upload-form-container">
            <h2>Unggah File Dokumen</h2>
            <form id="upload-form" action="upload.php" method="post" enctype=
            "multipart/form-data">
                <div class="file-input-container">
                    <input type="file" name="file" id="file" class="file-input">
                    <label for="file" class="file-label">Pilih File</label>
                </div>
                <button type="submit" name="submit" class="upload-button" id="upload-button"
                        disabled>Unggah</button>
            </form>
            <div id="status" class="upload-status"></div>
        </div>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $('#file').change(function () {
                    if (this.files.length > 0) {
                        $('#upload-button').prop('disabled', false).css('opacity', 1);
                    } else {
                        $('#upload-button').prop('disabled', true).css('opacity', 0.5);
                    }
                });

                $('#upload-form').submit(function (e) {
                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: 'proses_upload.php',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            $('#status').html(response);
                        },
                        error: function () {
                            $('#status').html('Terjadi kesalahan saat mengunggah file.');
                        }
                    });
                });
            });
        </script>
    </body>
</html>