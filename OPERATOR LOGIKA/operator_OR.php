<?php
$a = true;
$b = false;

echo ($a || $b); // true (karena salah satu benar)
echo "<br>";
echo ($b || false); // false (karena dua-duanya salah)
?>