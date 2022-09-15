<?php
function error_mannager($nivel, $mensaje){
    switch($nivel){
        case 2:
            $str = "Advertencia";
            break;
        case 8:
            $str = "Notificación";
        default:
            $str = "Error";
    }
    echo "<br> <strong>$str</strong> <br> $mensaje <br>";
};

set_error_handler("error_mannager");