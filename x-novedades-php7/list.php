<pre><?php
require_once('Players.php');

$playersInstance = new Players;

//var_dump($playersInstance);

list(
        $proplayer['andre'],
        $proplayer['pete'],
        $proplayer['gustavo'],
    ) = $playersInstance;

var_dump($proplayer);