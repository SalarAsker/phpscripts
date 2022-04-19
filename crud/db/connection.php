<?php

    try{
        $dbc = new PDO('mysql:host=localhost;dbname=dbtest;charset=utf8',
        'it',
        'abc123!');
    }catch(PDOException $exception){
        echo "Connection Error: " . $exception->getMessage();
    }
    
    $query = "INSERT INTO students(firstname, lastname, email)
              VALUES(NULL, 'john', 'petter', 'john@abc.com') ";
   $dbc->exec($query);
   echo $dbh->errorCode();


?>