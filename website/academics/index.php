<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./upload.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="sem" placeholder="sem">
        <input type="text" name="subject" placeholder="sub">
        <input type="text" name="type" placeholder="type">
        <input type="text" name="name" placeholder="name">
        <input type="file" name="file">
        <button type= "submit" name = "submit" >UPLOAD</button>
    </form>
    </body>
</html>