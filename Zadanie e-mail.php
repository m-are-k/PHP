<?php
$wzorzec = '/[-w.]+@([-A-z0-9]+\.)+[A-z]/';
$tekst = "w@8.pl";


if(preg_match($wzorzec, $tekst)){
    echo "Znaleziono email! twój e-mail to: $tekst";
} else {
    echo "nie znaleziono email!";
};


?>


