<?php
    // start the session
    session_start();
    // check if the session userid previously created
    if(!isset($_SESSION['userid'])){
        // send the user to the login page
        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="change()">

<!-- include header -->
<?php include_once 'inc/header.php'; ?>';

   <!-- javascript to show the login user name. Not a good solution. There are otherways to do that. -->
    <script>
        function change(){
            let p = document.getElementById('profile');
            let str = '<?php echo $_SESSION['userid'] ?>';
            p.innerHTML = "User: "+ str;
        }
    </script>
<!-- main -->
    <div class="main-page">
        <p>Welcome user <?php echo $_SESSION['userid'] ?></p>
    </div>

    
    <p class="logout">
        <a href="logout.php">Log Out</a>
    </p>

    <!-- footer -->
</body>
</html>