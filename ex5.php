<?php
    $my_year = 2010;
    
    if ($my_year %400 == 0) {
        echo "Este un an bisect";
    } elseif($my_year %100 == 0) {
        echo " Nu este un an bisect";
    }
?>   