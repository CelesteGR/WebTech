<?php

$cookie_name = "cs4413";

if (isset($_COOKIE[$cookie_name])) {
    echo "The cookie '$cookie_name' is already set with the value: " . $_COOKIE[$cookie_name];
} else {

    $cookie_value = "Cookies";


    $expiration_time = time() + 60 * 60 * 24; // 1 day in seconds

    // Set the cookie
    setcookie($cookie_name, $cookie_value, $expiration_time);

    echo "The cookie '$cookie_name' has been set with the value: $cookie_value";
}
?>
