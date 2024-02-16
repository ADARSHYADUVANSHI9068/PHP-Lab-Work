<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM METHOD="POST">
        <FIELDSET>
        USER NAME: <INPUT TYPE="TEXT" NAME="user" placeholder="ENTER YOUR NAME">
        PASSWARD:<INPUT TYPE ="PAASWARD" NAME="pass" PLACEHOLDER= 'ENTER YOUR PASSWARD'>
        <INPUT TYPE = "SUBMIT" VALUE = "LOGIN" NAME= submit>
</FIELDSET>
</FORM>
<?php
if(isset($_POST['submit'])){
$name=$_POST['user'];
$passward=$_POST['pass'];
if($name=='adarsh'){
if ($passward=='adarsh@1234'){
echo 'WELCOME TO SYSTEM';
}

else
echo'PASSWARD MISMATCH';
}
else
echo'invalid user';
}








?>
    
</body>
</html>