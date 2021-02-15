<?php
    
    $connection = 'mysql:host=localhost; dbname= (add database name)';
    $username = 'username';
    $password = 'password';

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
