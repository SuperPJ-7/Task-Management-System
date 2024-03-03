<?php
    $server = 'localhost';
    $dbname = 'todolist';

    $username = 'root';
    $password = '';
    $con = new mysqli($server,$username,$password,$dbname);
    // if(!$con){
    //     echo "couldn't establish connection with the database";
    // }
    // else{
    //     echo "database connectione established successfully";
    // }


?>