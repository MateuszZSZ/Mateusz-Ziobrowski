<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Dane Osobowe</title>
      <style>
         body{
            text-align: center;
         }
        </style> 
<body>
 

   
<table border="1px" id="table" >  
    <thead>
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>wiek</th>
</tr>
</thead>
</tbody>
       <?php 
        echo "<p>Dane osobowe: </p>";
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $wiek = $_POST["wiek"];
        
        echo "<tr>";
        echo "<td>$imie</td>";
        echo "<td>$nazwisko</td>";
        echo "<td>$wiek</td>";
        echo "</tr>";
        ?>

        </tbody>
</table>

