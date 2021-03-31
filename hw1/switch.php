<?php
$a = 80;
switch ($a) {
    case ($a < 50):
        echo "F";
       break;
    case ($a <55):
        echo "D";
        break;
    case ($a <60):
        echo "D+";
        break;
    case ($a <65):
        echo "C";
        break;
    case ($a <70):
        echo "C+";
        break; 
    case ($a <75):
        echo "B";
        break;   
        
    case ($a < 80):
        echo "B+";
        break;
    default:
        echo "A";
        break;
}