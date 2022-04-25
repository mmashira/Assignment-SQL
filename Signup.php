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
                <input type="text" name="first_name" placeholder="First Name">
            </div>
            <div class="textBox2">
                <input type="text" name="last_name" placeholder="Last Name">
            </div>
            <div class="textBox3">
                <input type="text" name="email" placeholder="Email">
        
            </div>
            <div class="textBox4">
                <input type="text" name="user_name" placeholder="Username">
            </div>
            <div class="textBox5">
                <input type="text" name="password" placeholder="Password">
            </div>
            <div>
                <input type="submit" value="Sign Up" name="sign_up" class="loginBtn">
            </div>
        </form>
    </body>
</html>