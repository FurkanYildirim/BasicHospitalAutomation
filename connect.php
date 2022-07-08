<?php

try {
    $db = new PDO("mysql:host=localhost; dbname=hospital_automation; charset=utf8", 'root', '');
    //echo 'database connection successful!';
}
catch(Exception $e) {
    echo $e->getMessage();
}

?>