<?php

/**
 * @return PDO
 */
function connexion():PDO{
    return new PDO('mysql:host=localhost;dbname=testApi','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

function sanitize(string $data){
    return htmlentities(strip_tags(stripslashes(trim($data))));
}