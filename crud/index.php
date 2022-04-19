<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css\css_index.css">
    <title>User Info</title>
</head>
<body>
    
    <form action="add.php" method="post" class="user-form">
       <!-- firstname -->
        <div class="form-group">
            <label for="firstname" class="control-label">
                Förnamn
            </label>
            <input type="text" id="firstname" name="firstname">
        </div>
        <!-- lastname -->
        <div class="form-group">
            <label for="lastname" class="control-label">
                Efternamn
            </label>
            <input type="text" id="lastname" name="lastname">
        </div>
        <!-- email -->
        <div class="form-group">
            <label for="email" class="control-label">
                Email
            </label>
            <input type="text" id="email" name="email">
        </div>

        <input type="submit" value="Lägg till" name="register" class="btn-register">
    </form>

</body>
</html>