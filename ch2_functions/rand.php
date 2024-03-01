<?php
//this code will produce different random numbers at each run hence different greetings will show up;
    switch(rand(1,6)) {
        case 1:
            $greet = 'Hello!'; break;
        case 2:
            $greet = 'Welcome!'; break;
        case 3:
            $greet = 'Greetings!'; break;
        case 4:
            $greet = 'Salutations!'; break;
        case 5:
            $greet = 'Good day!'; break;
        case 6:
            $greet = 'Bye!'; break;
    }
    
    echo $greet;
?>