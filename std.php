<html>
    <title>
        Connecting MySQL
    </title>
    <body>
        <?php
// host name
$host = "localhost";
// username
$username = "root";
//passwords
$password = "";
$database = "assignment-1";

$connection = mysqli_connect($host,$username,$password,$database) or die("Connection failed");
echo "Connection successfully" . "<br>";
?>
</body>
</html>



