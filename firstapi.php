<?php

$palstring = $_GET["palstring"];
if ($palstring==strrev($palstring)){
    echo "This string is palindrome";
}
else {echo "This string is not palindrome";}


?>