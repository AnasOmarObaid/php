<?php

/*

    exp1;

    while(exp2){

        something;

        exp3;
    }

    we can say that
    
    while():
        something;
    endwhile;

*/

    $learns  = array("html", "css", "javaScript", "php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>while loop</title>
</head>
<body>

    <p> what i learn  </p>
    <ul name = "Learns">

        <?php
        
            $i = 0;
            while($i < count($learns) ):
                echo "<li value = ' $learns[$i] '>  $learns[$i]  </li>";
                ++$i;
            endwhile;
        
        ?>
    </ul>

</body>
</html>