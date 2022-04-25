<?php
    include_once 'std.php';
    if(isset($_POST['sign_up']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user_name = $_POST['user_name'];

        $sql = "INSERT INTO users(FirstName, LastName, Email,  Username, Password) VALUES('$first_name', '$last_name', '$email', '$user_name', '$password')";

        $outcome = $connection->query($sql);

        //Insert query results
        if($outcome == TRUE)
        {
            echo "Record Creation Successful";
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>