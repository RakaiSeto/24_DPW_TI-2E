<html>
<head>
    <title>Upload File</title>
</head>
<body>
    <h2>Upload File</h2>
    <form id="upload-form" method="post" action="upload_ajax.php" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#upload-form").submit(function (e){
                e.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "upload_ajax.php",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        $("#status").html(data);
                    }
                    error: function(){
                        $("#status").html("Terjadi kesalahan saat mengupload file");
                    }
                });
            })
        }
    </script>
</body>
</html>