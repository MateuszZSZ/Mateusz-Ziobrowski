<DOCTYPE html>
    <html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza danych</title>
</head>
<body>
    <h1>Baza Danych</h1>
<form action="" method="post">
 
 


nazwa tabeli <input type="text" name="nazwa_bazy"> <br>
nazwa pola 1<input type="text" name="nazwa_bazy"> <br>
nazwa pola 2<input type="text" name="nazwa_bazy"> <br>
<input type="submit" value="wykonaj">

</form>
<?php 
if (isset($_POST['nazwa_bazy'])) {
$do_bazy = mysqli_connect('localhost','root','') ;
if (!$do_bazy) 
    exit("Błąd połączenia z serwerem MySQL.");

$baza_sqli = "CREATE DATABASE" . $_POST['nazwa_bazy'];
if (mysqli_query( $do_bazy, $baza_sqli)) 
    echo "Baza została utworzona";
 else {
    echo "Błąd! Nie można utworzyć bazy";
}
mysqli_close($do_bazy);
}
?>

</body>
</html>