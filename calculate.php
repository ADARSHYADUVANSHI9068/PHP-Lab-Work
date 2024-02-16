<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <fieldset>
        enter first number1 :<br>
        <input type="number" name="num1"><br><br>
        Enter Second Number2:<br>
         <input type="number" name="num2"><br><br>

        
        <input type="submit" name="add" value="ADD">
        <input type="submit" name="sub" value="SUB">
        <input type="submit" name="mul" value="MUL">
        <input type="submit" name="div" value="DIV">
   
</form>
<?phP
if (isset ($_GET['add']))
{
$a=$_GET['num1'];
$b=$_GET['num2'];
$c= $a+$b;
echo "the sum of two  number is:  $c";
}

if (isset ($_GET['sub']))
{
$a=$_GET['num1'];
$b=$_GET['num2'];
$c= $a-$b;
echo "<br>the sum of two  number is:  $c";
}
if (isset ($_GET['mul']))
{
$a=$_GET['num1'];
$b=$_GET['num2'];
$c= $a*$b;
echo "the sum of two  number is:  $c";
echo"<br>";
}

if (isset ($_GET['div']))
{
$a=$_GET['num1'];
$b=$_GET['num2'];
$c= $a/$b;
echo "the sum of two  number is:  $c";
echo"<br>";
}
?>
         </fieldset>
</body>
</html>