<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        HINDI=<Input type="number" name ='hindi'><BR>
        ENGLISH=<Input type="number" name ='english'><BR>
        MATHS=<Input type="number" name ='maths'><BR>
        SCIENCE=<Input type="number" name ='science'><BR>
        SST=<Input type="number" name ='sst'><BR><br>
       
        

<?php
if(isset($_POST["submit"])){
    $hin=$_POST['hindi'];
    $eng=$_POST['english'];
    $mat=$_POST['maths'];
    $sci=$_POST['science'];
    $sst=$_POST['sst'];
    
    $total=$hin+$eng+$mat+$sci+$sst;
    $per=$total/5;
    
    //if( $total>=80){
      //  echo 'O';
     //else if ()
    }
    ?>
    TOTAL MARKS= <Input type="number" name ='number' value= "<?php echo $total; ?>" ><br>
       GRADE=<Input type="text" name ='grade' >
       <Input type="SUBMIT" name ='submit' value="GENERATE RESULT">

    </form>
</body>
</html>