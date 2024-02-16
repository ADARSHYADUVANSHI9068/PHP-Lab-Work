<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Please input your name</h1>
    <form  method="POST" >
<input type ="text" name="name1">
<input type="submit" value= "submit name">
    </form>
 <?php
 $name1=$_POST["name1"] ;
 echo "<H3>Hello MY NAME IS  $name1</H3> ";

 
 
 ?>
</body>
</html>