<!-- established connection to the databse -->
<?php
    require_once 'db/connection.php';
?>

<!-- include select.php -->
<?php
    require_once 'db_operations/select.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css_show.css">
    <title>User Data</title>
</head>
<body>
    <table class="styled-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Förnamn</th>
                <th>Efternamn</th>
                <th>Epost</th>
            </tr>
        </thead>
       <tbody>
           <?php
                // to se if there is any row
                if($st->rowCount() > 0){
                   while($row = $st->fetch(PDO::FETCH_ASSOC)){
                       echo '
                            <tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['firstname'].'</td>
                                <td>'.$row['lastname'].'</td>
                                <td>'.$row['email'].'</td>
                            </tr>
                       ';
                   }
                }else{
                    echo '
                        <tr>
                            <td colspan="4"> No record to show</td>
                        </tr>
                    ';
                }
           ?>
       </tbody>
        
    </table>
</body>
</html>