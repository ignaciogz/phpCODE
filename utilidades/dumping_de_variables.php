<?php
    //Opfion 1 - PRINT_R
    echo "<h2>PRINT_R</h2>";
        $info = array('name' => 'frank', 12.6, array(3, 4));
    echo "<pre>";
        print_r($info);
    echo "</pre>";


    //Opcion 2 - VAR_DUMP
    echo "<h2>VAR_DUMP</h2>";
        $info = array('name' => 'frank', 12.6, array(3, 4));
    echo "<pre>";
        var_dump($info);
    echo "</pre>";


    //Opcion 3 - VAR_EXPORT
    echo "<h2>VAR_EXPORT</h2>";
        $info = array('name' => 'frank', 12.6, array(3, 4));
    echo "<pre>";
        var_export($info);
    echo "</pre>";