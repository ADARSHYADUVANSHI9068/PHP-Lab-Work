<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">

 ENTER FIRST N0:<input type="number" name="num1"><BR>
 ENTER SECOND NO :<input type ="number" name="num2"><BR>
<input type="submit" name="add" value=ADD>
</form>
    <?php
    if (isset ($_POST['add']))
    {

$run1=$_POST('num1');
$run2=$_POST('num2');
$run3=$num1+$num2;
echo "the value of num1 and num2 is = . $run3";


}


    

    ?>
</body>
</html>