<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post">
    a<input type="number" name="A">
    b<input type="number" name="B">
    <input type="submit" value="wypisz">
<?php
if (isset($_POST['A']) && (isset$_POST['B'])) {
for ($i =  $a < $b ; $i++) { 
    echo "$i<br>"
}
}
</body>
</html>
