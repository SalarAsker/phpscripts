<?php

$show_form = true; // variable to control the form show
$notok = false; // variable to keep track of valid data
// variables for error messages
$nameErr = "";
$emailErr = "";
// variables for holding data
$name = "";
$email ="";

      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
            if (isset($_POST["name"]) && !empty($_POST["name"])) {
               $name = test_input($_POST["name"]);
               } else {
                  $nameErr = "Please enter a valid name";
                  $notok = true;
            }

            if (isset($_POST['email']) && !empty($_POST["email"])) {
               $email = test_input($_POST["email"]);
               } else {
                  $emailErr = "The email address is incorrect";
                  $notok = true;
            }  
      // check to show the form or not
               if($notok){
                  $show_form = true;
               }else{
                  $show_form = false;
               }
      }
// function 
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>
<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>

<body>  
<?php
  // returns the path of the file
  $call_self = htmlspecialchars($_SERVER["PHP_SELF"]);
  
  if($show_form)
  {
?>
   <h2>PHP Form Validation Example</h2>
   <p><span class="error">* required field</span></p>

<?php
  echo <<<FORM
   <form method="post" action={$call_self}>  

      FullName: <input type="text" name="name" value="{$name}">
      <span class="error">*{$nameErr}</span>

      <br><br>

      E-mail address: <input type="text" name="email" value={$email}>
      <span class="error">*{$emailErr}</span>

      <br><br>

      <input type="submit" name="submit" value="Submit">  

   </form>
   FORM;
  }
?>

</body>
</html>

<?php
if(!$show_form)
{
  echo "<h2> Final Output:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
}
?>

