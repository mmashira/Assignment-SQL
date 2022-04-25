<?php 
include "std.php";

if(isset($_POST['update'])){
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$id=$_POST['ID'];
$query = "UPDATE std SET first_name='$fname', last_name='$lname' WHERE ID='$id'";
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
                <input type="text" name="ID" placeholder="Entry ID to update">
            </div>
            <div class="textBox1">
                <input type="text" name="first_name" placeholder="First Name">
            </div>
            <div class="textBox2">
                <input type="text" name="last_name" placeholder="Last Name">
            </div>
            <div>

                <input type="submit" value="update" name="update" class="loginBtn">

            </div>
        </form>
    </body>
</html>