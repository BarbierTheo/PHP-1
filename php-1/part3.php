<?php 
    $string = "i";
    $int = 0;
    $float = 1.2;
    $boolean = true;

    echo "$string ";
    echo gettype($string);
    echo get_debug_type($string);

    echo " / $int ";
    echo gettype($int);
    echo get_debug_type($int);

    echo " / $float ";
    echo gettype($float);
    echo get_debug_type($float);

    echo " / $boolean ";
    echo gettype($boolean);
    echo get_debug_type($boolean);


?>