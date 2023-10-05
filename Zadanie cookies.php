<?php
$_COOKIE_name = "promocja";
$_COOKIE_value="wycieczka";
setcookie($_COOKIE_name,$_COOKIE_value,
time()+(48*60*60));
$cookie_name = "promocja";

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name ."' is not set!";
} else {
    echo "Coookie: '".$cookie_name."' is set! <br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
};
setcookie($_COOKIE_name,$_COOKIE_value,
time() - (7200));

?>
