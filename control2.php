<?php
$per= 85;
if ($per>90){
    echo"A+";
}elseif ($per>80){
    echo"A";
}
elseif ($per>70){
    echo"B+";
}
else if ($per>60){
    echo"B";
}
else if ($per>50){
    echo"C+";
}
else if ($per>40){
    echo"C";
} 
else if ($per>35){
    echo"D+";
}      
else{
    echo"better luck next time";
}
?>