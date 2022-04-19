
<?php

    // insert.php file taking care of insert operations

$sql = "INSERT INTO students(firstname, lastname, email, regdate)
            VALUES(:firstname, :lastname,:email, NOW())
            ";

    // prepare query to the database
    $st = $dbc->prepare($sql);

    // bind form data with placeholders
    $st->bindValue(':firstname', $firstname);
    $st->bindValue(':lastname', $lastname);
    $st->bindValue(':email', $email);

    // run query against the database
    if($st->execute()){
        $success = true;
    }

?>
