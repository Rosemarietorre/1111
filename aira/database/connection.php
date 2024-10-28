<?php
    //declare variable//

    $host ="localhost";
    $user ="root";
    $pass = "";
    $dbname = "johnbenedict_db";

    //Connection string to connect database//

    $conn = new mysqli($host,$user,$pass,$dbname);

    if($conn->connect_error)
    {
        die("Connection Failed:".$conn -> connect_error);
    }

?>