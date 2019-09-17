<?php
    
    $connection = 'localhost;
    $username = ""; //add db name
    $password = ""; //add db pass

    try 
    {
        $db = new PDO($connection, $username, $password);
    } catch (PDOException $e) 
    
    {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
