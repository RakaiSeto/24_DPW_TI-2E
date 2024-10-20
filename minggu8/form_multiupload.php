<html>
    <head>
        <title>Upload File</title>
    </head>
    <body>
        <h2>Upload File</h2>
        <form method="post" action="proses_upload.php" enctype="multipart/form-data">
            <input type="file" multiple name="files[]" accept=".pdf, .doc, .docx">
            <input type="submit" value="Unggah">
        </form>
    </body>
</html>