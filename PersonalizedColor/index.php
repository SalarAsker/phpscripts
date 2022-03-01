  
  <?php include 'process.php'; ?>

   <script>
       window.addEventListener('load', function(){
        let php_var = "<?php echo $color; ?>";
        document.body.style.backgroundColor = php_var;
       
        });
  </script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personalize color</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- <script src="change.js"></script> -->
    <span>Select your favorite color</span>
    
    <form action="" method="post">
        <select name="color" class="color">
        
            <option value="red" class="red">Red</option>
            <option value="blue" class="blue">Blue</option>
            <option value="green" class="green">Green</option>
            <option value="purple" class="purple">Purple</option>
            <option value="yellow" class="yellow">yellow</option>
        </select>
        <input type="submit" name="submit" value="Select">
    </form>
</body>
</html>