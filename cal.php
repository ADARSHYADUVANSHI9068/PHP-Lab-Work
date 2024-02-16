<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type= "number" name="num1">
        <input type="number" name="num2">
        <input type="submit" name="add" value="ADD">


</form>
<?php
if ( isset ($_POST["add"]))



{
$number1=$_POST['num1'];
$number2=$_POST['num2'];
$number3=$num1+$num2;
echo "the value of num1 and num2 is: . $number3";

?>
}




    
</body>
</html>