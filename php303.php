<?php
    $star = "Damax star"; //Global varoable

    function drakonball(){
        //echo "สวัสดีชาว $star";
        $star = "Earth star"; //Local variable

        echo "1.Local variable $star";
        echo "<br />";
    }
    drakonball(); //call function drakonball
    
    echo "2.Global varoable $star";
?> 