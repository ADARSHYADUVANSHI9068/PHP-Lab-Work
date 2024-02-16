<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<FIELDSET>
    <form method="POST" action="">
       
        ENTER A NUMBER:<input type="number"name= "num1" placeholder="ENTER NUMBER">
        <input type="submit" name="submit"value='PRINT'>
</form>
</FIELDSET>
<?php
if ( isset($_POST["submit"])){
      $num=$_POST["num1"];
        if ($num% 3==0 && $num% 5==0)
       echo "GLA UNIVERSITY";
else if ($num% 3==0)
echo "GLA";
else if ($num% 5==0)
echo "UNIVERSITY";
else
echo "FUNNY INPUT";


}

?> 
</body>
</html>