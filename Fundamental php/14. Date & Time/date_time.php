<?php

/*
The PHP date() function is used to format a date and/or a time
*/

// d, m, Y represents the day, month & year respectively
echo "Today's date is : " . date("d-m-Y") . "</br>"; // output: Today's date is : 25-04-2018

// l (lowercase 'L') - Represents the day of the week
echo "Today's weekday is : " . date("l") . "</br>"; // output: Today's weekday is : Wednesday

// h, i, s, a represents hour(12-hour format), minutes, seconds, Ante meridiem(am or pm)
echo "Default time is : " . date("h:i:sa") . "</br>"; // output: Default time is : 07:21:24pm

// date_default_timezone_get() function returns the default timezone
echo "Default timezone is " . date_default_timezone_get() . "</br>"; 
// output: Default timezone is Europe/Berlin

// date_default_timezone_set() function sets a timezone 
date_default_timezone_set("Asia/Dhaka"); 
echo "My time is: " . date("h:i:sa"); // output: My time is: 11:21:24pm

?>