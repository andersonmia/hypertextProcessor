<?php
$grade = 'A';
switch ($grade) {
    case 'A':
        echo "Excellent student, you scored grade A!!!!!! <br>";
        break;
    case 'B':
        echo "Good try, you scored grade B!!!!!<br>";
        break;
    case 'C':
        echo "Fair, you scored grade C!!!!<br>";
        break;
    case 'D':
        echo "Pull up your socks, you scored grade D!!!<br>";
        break;
    case 'F':
        echo "You failed, you scored grade D!!<br>";
        break;                  
    default:
    echo "You're ungraded!";
        break;
}
?>