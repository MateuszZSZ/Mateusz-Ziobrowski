<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>kalkulator</title>
</head>
<body>
<form action="" method="post">
<p>A<input type="number"  name="a"> </p>
<p>B<input type="number" name="b" > </p>
<p>działania</p>
<p> 
Dodawanie +<input type="radio" name="działania" value="+"> <br>
Odejmowanie -<input type="radio" name="działania" value="-"> <br>
Mnożenie *<input type="radio" name="działania" value="*"> <br>
Dzielenie /<input type="radio" name="działania" value="/"> 
<p colspan="2" style="text-align: right" ><input type="submit" name="oblicz" value="oblicz"> </p>
<?php
if (isset($_POST['a']) && isset($_POST['b'] )&& isset($_POST['działania'])) {


$a = $_POST['a'];
$b = $_POST['b'];
$działania = $_POST[działania]; 

switch (działania) {
    case '+' :
    echo "$a + $b = " . $a + $b;
    break;
    case '-' :
    echo "$a - $b = " . $a - $b;
    break;
    case '*' :
    echo "$a * $b = " . $a * $b;
    break;
    case '/' :
    echo "$a / $b = " . $a / $b;
    break;
    default:
    break;
}
}
?>
</form>
</body>
</html>