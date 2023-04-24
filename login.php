<?php
    require "functions.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        

    //"select & where" query used here  
    $query = "select * from users where email = '$email' && password = '$password' limit 1";
    
    // always the connection before the query
    $result = mysqli_query($con, $query);
   
        
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result);
            // save info in every session
            $_SESSION['loggedinfo'] = ($row);
            
            // redirect to profile page after signup
            header ("Location: profile.php");
            die;
        }else{
            $error = "email or password is not correct";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My first php Website</title>
</head>
<body>
    <?php require "header.php";?>
    <div style="margin: auto;max-width: 600px">
        
        <!-- TO SHOW THE ERROR -->
        <?php
            if(!empty($error)) {
                echo "<div>".$error."</div>";
            }
        
        ?>

        <h2 style="text-align:center;">Login</h2>
            <form method="post"   style= "margin: center; padding: 10px; font-size: 20px;">
                <input type="email" name= "email" placeholder="Email" required><br>
                <!-- to hide password change the input to password -->
                <input type="password" name= "password" placeholder="Password" required><br>
                
                <button>Login</button>
            </form>

    </div>   
    <?php require "footer.php"; ?>

</body>
</html>
