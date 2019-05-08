<?php

function square($x) {
    return $x * $x;
}

if(isset($_POST['done'])) {
    $calculate = $_POST['number'];
    print square($calculate);
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
    </body> 
</html> 