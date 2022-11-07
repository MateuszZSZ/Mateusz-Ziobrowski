<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function familyname($fname,$year) {
        echo "$fname Refsnes. Born in $year <br>";
    }
    familyname("Hege","1975");
    familyname("stale","1968");
    familyname("kai Jim,","1983");
    ?>
</body>
</html>