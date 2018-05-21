<?php

/*

1. A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too.

2. A cookie is created with the setcookie() function.

3. To delete a cookie, use the setcookie() function with an expiration date in the page

4. Syntax: setcookie(name, value, expire, path, domain, secure, httponly);

*/

if (!isset($_COOKIE["user"])) {

	// creating a cookie
	setcookie("user", "John", time()+60, "/") or die("Cookie is not set");
    echo "This is your first visit in the website </br>";

} else {
	echo "You are an old visitor  </br>";
}

// Deleting a cookie
setcookie("user", "", time()-3600);

?>