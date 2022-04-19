<!-- established connection to the databse -->
<?php
    require_once 'db/connection.php';
?>

<?php

if(isset($_POST['register'])){
   
    // read information for the fields
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    //include insert.php
    require_once 'db_operations/insert.php';

  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\css_add.css">
    <title>User Info</title>
</head>
<body>

    <?php
      // check if $success exists
      if(isset($success)){
        echo '<div class="alert-success">
            Query was good.
        </div>
        ';
    }
    ?>

    <div>
        <a class="add-links" href="index.php">Add More Records</a>
    </div>
    <div>
        <a class="add-links" href="show.php">Show Records</a>
    </div>

</body>
</html>
