<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
    table {
      border: 5px solid black; 
      
    }
    td{
      border: 5px solid green
      ;
      text-align:center;
     width:60%;
    }
    th {
      width:60%;
      border:5px solid red;
    }
    </style>
</head>
<body>


   <?php
   

   for ($i=1; $i <=4 ; $i++) { 
     for ($x=1; $x <=4 ; $x++) {
      echo "*";
     }
     echo "<br>";
     
    }

     ?>
     
    <table>
    <form action="" method="post">
     <input type="number" name="wiersze"> Wierszy<br>
     <input type="submit" Value="generuj">
    </form>
    <?php
      if (isset($_POST['wiersze'])) {
    echo "<th>Imię</th><th>Nazwisko</th>";
    echo "<br>","<br>";
    
     $z = 1;
     
     
    
    function tabela($wiersze)
    {
        $z = 1;
     for ($i=1; $i <=$wiersze ; $i++) { 
    
      
     echo "<tr><td>".($z++)."</td>  <td> ".($z++)." </td></tr>";

     }
    }
    tabela($_POST['wiersze']);
    tabela(5);

    ?>
     <?php
  
function tabela($wiersze) {
    tabela($wiersze);
   for ($i=1; $i <=4 ; $i++) { 
     for ($x=1; $x <=4 ; $x++) {
      echo "*";
     }
     echo "<br>";
    
    }
}
tabela($_POST['liczba']);
tabela(3);
     ?>

      



      </table>
      

      
     
    
      
      
        
   
   
</body>
</html>