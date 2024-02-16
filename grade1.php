<?php
function determinefunction($score){
if($score<60){
    return"F";
    }
elseif($score>=60 && $score<=70){
    return "D";

    }
elseif($score>=71 && $score<=80){
    return"C";
    }
elseif($score>=81 && $grade<=90){
    return"B";

    }
else{
    return"A";
    }
}
$student_score=75;
$grade= determineGrade ($student_score);
echo   $grade;


?>