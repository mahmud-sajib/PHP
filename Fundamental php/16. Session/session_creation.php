<?php

/*

1. A session is a way to store information (in variables) to be used across multiple pages.
Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.

2. A session is started with the session_start() function.

3. session_unset() removes all session

4. session_destroy() destroy the session

*/

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session </title>
</head>
<body>

<?php

// Set session variables

$_SESSION["favcolor"] = "red";

$_SESSION["favanimal"] = "dog";

echo "Session variables are set.";

?>

</body>
</html>