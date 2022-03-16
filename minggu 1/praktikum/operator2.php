<?php
$a = 2;
$b = 6;
echo "$a == $b : ". ($a == $b);
echo "<br>$a != $b : ". ($a != $b);
echo "<br>$a > $b : ". ($a > $b);
echo "<br>$a < $b : ". ($a < $b);
echo "<br>($a == $b) && ($a > $b) : ".(($a != $b) && ($a > $b));
echo "<br>($a == $b) || ($a > $b) : ".(($a != $b) || ($a > $b));
?>