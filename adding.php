<!DOCTYPE html>
<html lang="en">
<head>


<style>
    h1{


    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 ALIGN="CENTER" >ADDITION OF TWO NUMBER USING PHP<H1>
        <?php
        $a=10;
        $b=20;
        $c=$a+$b;
        echo"$c ";
        echo "<br>";
        $current_date=date("d/m/y");
        echo "the current date is : $current_date ";
        echo "<br>";
        $current_date=date("D/M/Y");
        echo "the current date is : $current_date ";
        echo "<br>";
        $current_date=date("D,d M Y");
        echo "the current date is : $current_date ";
        echo "<br>";
        $current_date=date("D,d F Y");
        echo "the current date is : $current_date ";
        echo "<br>";
        $current_date=date("h:i:s");
        echo "the current time is : $current_date ";
        echo "<br>";
        $current_date=date("h:i:sa");
        echo "the current date is : $current_date ";
        echo "<br>";
        $current_date=date("h:i:sA");
        echo "the current time is : $current_date ";
        echo "<br>";
        $current_month=date("m");
        echo "the current month is : $current_month ";
        echo "<br>";
        $m=date("m");
        $y=date("y");

        if ($m==2)


     {
        if ($y%4==0)
        echo "this no of days is not 29";
        else 
        echo"this no of days is 28";
        else 
        if $m==1,$m==1,$m==3,$m==5,$m==7,$m==8,$m==10,$m==12;
        echo "the days are 31"
        else 
        echo "days are 30";


        
         }
        
        
        
        

     

        echo"THE ADDITION OF $a + $b  IS = $c";



?>
    
</body>
</html