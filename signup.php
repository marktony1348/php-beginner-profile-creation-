<?php
    require "functions.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $date = date('Y-m-d H:i:s');
        // where i= minutes

    //insert query used here  
    $query = "insert into users (username,password,email,date) values ('$username','$password','$email','$date')";

    $result = mysqli_query($con, $query);
    // always the connection before the query

    // redirect to login page after signup
    header ("Location: login.php");
    die;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUP - My first php Website</title>
</head>
<body>
    <?php require "header.php";?>

    <div style="margin: auto;max-width: 600px">

    <h2 style="text-align:center;">Signup</h2>

        <form method="post"   style= "margin: center; padding: 10px; font-size: 20px;">
            <input type="text" name= "username" placeholder="Username" required><br>
            <input type="email" name= "email" placeholder="Email" required><br>
            <input type="text" name= "password" placeholder="Password" required><br>
            
            <button>Signup</button>
        </form>

    </div>   
    <?php require "footer.php"; ?>

</body>
</html>
