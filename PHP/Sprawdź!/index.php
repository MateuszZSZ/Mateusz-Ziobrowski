<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
</head>
<body>
<form  action="" method="post">
<p><input type="number" name="a">
<p><input type="submit" name="oblicz">
</form>
<?php
if (isset($_POST['a'])
{

$a = $_POST["a"]
if ($a>0)
    {
        echo "liczba $a jest > 0" 
    }
if ($a<0)
    {
    echo "liczba $a jest < 0"
    }
if ($a=0){
    echo "liczba $a jest = 0"
    }
}    
?>

</body>
</html>