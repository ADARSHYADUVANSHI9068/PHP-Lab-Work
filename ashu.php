








<?php
define ("pi",3.14);
$variable1=34;
$variable2=45;

echo $variable1+$variable2;
echo "<br>";
/* operater in php*/
echo "the value of variable1 + variable2 is";
echo $variable1 +$variable2;
echo "<br>";
echo pi;




/* using logical operater
AND*/
$myvar=(true and false);
echo var_dump ($myvar);
echo"<br>";
$myvar=(false and false);
echo var_dump ($myvar);
echo "<br>";
$myvar1=(true and true);
echo var_dump($myvar1);
echo "<br>";
// using or operater
$vardump=(true or false);
echo var_dump($vardump);
echo "<br>";
$var=(false or false);
echo var_dump ($var);
echo "<br>";
//  using xor in php
$var= (true xor false);
echo var_dump ($var);
echo"<br>";
$var=(false xor false);
echo var_dump($var);
echo "<br>"
// using data type in php
// 1.string
// error
// echo "this is php data type<br>"
// $vardar=("this is data type of ");
// echo  ($vardar);
// // 2.integer
// $var2=45;
// echo var_dump ($var2);
// echo "<br>"
// $var=67.1;
// echo ($var);

?>