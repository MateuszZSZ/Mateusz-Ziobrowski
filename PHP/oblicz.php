<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Kasa biletowa</title>

      <style>
#kontener
 {
    width:550px;
    height:150px;
    border:2px solid #330000;
    text-align: center;
    background-color: #CC9966;
 }

 #blok

 {
    width:350px;

    float: left;
 }

 img{
    width: 200px;
    height: 150px;
 }

#obraz
{
    float:left;

}
</style>

<body>
<div id="kontener">
    <div id="blok">
        <?php
        echo "<p>Dokonałeś następującego zamóweinia: </p>";
        $norm=$_POST['adult']; //pobranie liczby biletów normalnych
        $ulg=$_POST['child']; //pobranie liczby biletów ulgowych
        echo "<ul><li>bilety normalne: $norm sztuki </li>";
        echo "<li>bilety ulgowe: $ulg sztuki</li></ul>";
        $koszt=$norm*27+$ulg*18;
        echo "<h3>"Koszt Twojego zamówienia wynosi: $koszt zł.</h3>;
        ?>
        </div>
        <div id="obraz"><img src="logo.png"></div>
        </div>
</head>
</body>
</html>
