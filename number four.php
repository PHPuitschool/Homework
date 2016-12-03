<?php
    $age = 1 ;
    echo "<h1>";
    switch ($age)
    {
    case ($age > 100):
        echo "It is time you die" ;
        break ;
    case ($age >= 60):
        echo "Time for you to retire" ;
        break ;
    case ($age >= 21):
        echo "You have to go to work" ;
        break ;
    case ($age >= 15):
        echo "It is time you learn at the institute" ;
        break ;
    case ($age >=6):
        echo "It is time you learn at school" ;
        break ;
    case ($age > 1.5):
        echo "It is time you to kindergarten" ;
        break ;
    default:
        echo "Suck tits and scream" ;
    }


