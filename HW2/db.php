<?php

$conn = new mysqli("localhost", "root", "", "employee_db");

if(!$conn){
    echo "Database Not Connected";
}

?>