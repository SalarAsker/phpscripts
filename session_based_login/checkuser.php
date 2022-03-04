<?php // php to process the form when its submitted ?>
<?php 
    // declare a user
    $user = 'admin';
    $pass = 'admin';
?>
<?php
    //session start
    session_start();
    //array for storing errors
    $errors = array();
    // check if submit is clicked
    if(isset($_POST['submit']))
    {
        // check if the fields are empty
        if(empty($_POST['username']) || empty($_POST['password']))
        {
            // set an error
            $errors[] = 'Provide username or passwrod!';
        }
        // check if the username and password provided in the textboxes is equal to the
        // declare user or not. 
        if($_POST['username'] != $user || $_POST['password'] != $pass)
        {
            // set an error
            $errors[] = 'The username or the password is wrong.';
        }
        // check for the error count. If no error, everything is fine
        if(count($errors) == 0)
        {
            // create a session named userid with data username
            $_SESSION['userid']  = $_POST['username'];
            // print_r($_SESSION['userid']);
            // send user to the profile page
            header('Location: profile.php');
        }
    }

?>