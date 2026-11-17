<?php

$conn = new mysqli("localhost","root","","user_db");

if(!$conn){
    echo 'Database Not Connected';
}

?>