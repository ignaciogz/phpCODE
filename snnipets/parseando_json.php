<?php
   $json ='{"id":1,"name":"foo","interest":["wordpress","php"]} ';

   $obj=json_decode($json);

   echo $obj->interest[1]; //prints php
?>