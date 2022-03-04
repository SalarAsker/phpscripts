<!-- include checkuser.php -->
<?php require_once 'checkuser.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >

<!-- include header -->
<?php include_once 'inc/header.php'; ?>';
   
<!-- MAIN -->
<!-- html form -->
    <form action="login.php" method="post">
    <fieldset>
        <legend>Enter your login</legend>
        <ul class="lg_ul">
            <li class="lg_li">
                <label for="username">Username</label>
                <input type="text" name="username">
            </li>
            <li class="lg_li">
                <label for="password">Password</label>
                <input type="password" name="password">
            </li>
        </ul>
        <div class="button"><input type="submit" value="Log In" name="submit"></div>
    </fieldset>

    </form>

<div class="error">
    <?php
    // check for errors and print them out
    if(count($errors) > 0) {
       foreach($errors as $er){
           echo '
            <ul>
                <li>'. $er. '</li>
            </ul> ';
       }
    }
?>
</div>

<!-- footer -->

</body>
</html>
