<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <?php 
include "std.php";

$query = "SELECT * FROM std";
$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($result)){
echo $row['first_name'] . " " . $row['last_name'];
}

?>
    </body>
</html>