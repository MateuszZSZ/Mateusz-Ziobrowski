<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_coonect('localhost','root','','dane osobowe');
    if(!$conn) {
        die("connection failed: ".mysqli_connect_error());
    }
    ?>
</body>
</html>