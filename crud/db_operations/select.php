<!-- established connection to the databse -->
<?php
    require_once 'db/connection.php';
?>

<?php
    // write query for select statement
    $sql = "select * from students";
    // prepare query for the database
    $st = $dbc->prepare($sql);
    // run query against the database
    $st->execute();
?>