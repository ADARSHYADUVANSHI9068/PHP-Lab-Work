<html>
<head>
</head>
<title>
</title>
<body>
<h1>Please input  your name:</h1>
<form method='GET'>
<input type="text" name="name">
<input type="SUMIT " value="SUMIT NAME">
</form>
<?php
//retrive name from quary string and store to a local variable
$name=$_GET['name'];
echo"<h3>hellow my name is $name</h3>"

?>

</body>
</html>