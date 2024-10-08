
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploadings </title>
</head>
<body>
    <h1>Upload a File or many files </h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        select files: <input type="file" name="files[]" multiple> <br> <br>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>