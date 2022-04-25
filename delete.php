<?php 
include "std.php";

if(isset($_POST['delete'])){
$id=$_POST['ID'];
$query = "DELETE FROM std WHERE ID='$id'";
$result = mysqli_query($connection, $query);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <form method="post" action="insert.php">
            <h1>Sign Up</h1>
            <div class="textBox1">
                <input type="text" name="ID" placeholder="Entry ID to delete">
            </div>
            
            <div>

                <input type="submit" value="delete" name="delete" class="loginBtn">

            </div>
        </form>
    </body>
</html>