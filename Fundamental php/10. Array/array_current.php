<?php

/*

1. The current() function prints the current element of an array

2. The end() function prints the last element of an array

3. The next() function prints the next element of an array

4. The prev() function prints the prev element of an array

*/

$name = array("Rony", "Johny", "Shely", "Doly");

echo "<pre>";

print_r($name);

echo "</pre>";

// current()
echo "Current name: " .current($name). "</br>"; // output: Rony

// next()
echo "Next name: " .next($name). "</br>"; // output: Johny

// end()
echo "Ending name: " .end($name). "</br>"; // output: Doly

// prev()
echo "Previous name: " .prev($name). "</br>"; // output: Shely

?>