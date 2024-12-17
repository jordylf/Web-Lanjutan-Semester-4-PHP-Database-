<?php 
    //  Jordy Lian Ferdinand
    //  2022230009

    $nilai = 88; 
    
    if ($nilai > 90) { 
        $grade = "A+"; 
    } else if ($nilai > 80) { 
        $grade = "A"; 
    } else if ($nilai > 70) { 
        $grade = "B+"; 
    } else if ($nilai > 60) { 
        $grade = "B"; 
    } else if ($nilai > 50) { 
        $grade = "C+"; 
    } elseif ($nilai > 40) {
        $grade = "C"; 
    } else if ($nilai > 30) { 
        $grade = "D";  
    } else if ($nilai > 20) { 
        $grade = "E";  
    } else {   
        $grade = "F"; 
    } echo "Nilai Jordy: $nilai<br>"; echo "Grade: $grade"; 
    ?>