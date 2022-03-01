
<?php
    // set the cookie for one week.
    define('ONE_WEEK', 7*86400); 
?>

<?php
    // where there is no cookie is set, the default color is while
    $color = "white";
    // the following if checks, if any cookie set previously.
    // if yes, update the $color variables
    if(isset($_COOKIE['color'])){
        // var_dump($_COOKIE);
        $color = $_COOKIE['color'];
    }
    // if user selects another color and click on the submit,
    // the following if statement executes.
    if(isset($_POST['submit'])){
        if(isset($_POST['color'])){ // see if the new color is choosen
            $color = $_POST['color']; // update the color variables
           setcookie('color', "", time()-3600); // remove the previous stored cookie
           setcookie("color","$color",time()+ONE_WEEK); // set the cookie with new color
            // var_dump($color);
        }
    }
?>
