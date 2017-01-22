<?php
$execution_time = microtime(); // Start counting
    $cantidad = 0;

    for ($i=0; $i < 10000; $i++) { 
        $cantidad++;
    }
$execution_time = microtime() - $execution_time;

echo "Tiempo 1: $execution_time segundos.<br/>";
printf('Tiempo 2 formateado: %.5f segundos <br/><br/>', $execution_time);




//EJEMPLO 2:
    $long_str = uniqid(php_uname('a'), true);
    
    // start timing from here
    $start = microtime(true);
        // function to test
        $md5 = md5($long_str);
    $elapsed = microtime(true) - $start;

    echo "Tiempo 2: $elapsed segundos.<br/>";
    printf('Tiempo2 formateado: %.5f segundos <br/>', $elapsed);