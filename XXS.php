<?php

IF(isset($_POST['dane']))
{
    echo 'Wpisałeś następujące dane:<br>';
    echo $_POST['dane'];
    // zapisać dane itd.
}
echo '<form action="bug.php" method="post"><input type="submit" value="wyślij"><input type="text" name="dane" size="14"></form>';
?>
