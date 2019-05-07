<?php

$sound = 'blee';

$sheeps = [];

for($i = 0; $i < 5; $i++) {
    $sheeps[$i] = &$sound; 
}

var_dump($sheeps);

for($i = 0; $i < 5; $i++) {
    unset($sheeps[0]);
    $sheeps[0] = 'bb system';
}

var_dump($sheeps);
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title></title> 
        <meta charset="utf-8"> 
    </head> 
    <body>
    </body> 
</html> 