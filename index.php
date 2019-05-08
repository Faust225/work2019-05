<?php

function square($x) {
    return $x * $x;
}
$result = '';

if(isset($_POST['done'])) {
    $calculate = $_POST['number'];
    $result = square($calculate);
} else {
    $result = '';
}

?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title></title> 
        <meta charset="utf-8"> 
    </head> 
    <body>
        <form method="post">
            <input type="text" name="number">
            <input type="submit" name="done">
        </form>
        <h3><?php print $result; ?></h3>
    </body> 
</html> 