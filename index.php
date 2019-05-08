<?php

$result = 0;

if (isset($_POST['done'])) {
    
    $result = $_POST['done'];
    $result++;
}

$images = [];
for($i = 0; $i < $result; $i++) {
    $images[$i] = 'banana.jpg';
}
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <title></title> 
        <meta charset="utf-8"> 
    </head> 
    <body>
        <form method="post" action="index.php">
            <input type="submit" name="done" value="<?php print $result ?>">
        </form>
        <?php foreach($images as $img): ?>
        <img src="<?php print $img; ?>">
        <?php endforeach; ?>
    </body> 
</html> 