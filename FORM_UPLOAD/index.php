
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploading</title>
</head>
<body>
    <h1>Upload a File</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        select file: <input type="file" name="file" > <br> <br>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>