<?php

$user['bernard'] = 8;
$user['mark'] = 9;
$user['frank'] = 8;

echo $user['bernard'] <=> $user['mark']; //-1

echo '<br/>';

echo $user['bernard'] <=> $user['frank']; //0

echo '<br/>';

echo $user['mark'] <=> $user['frank']; //1