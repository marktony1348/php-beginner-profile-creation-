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
    <h2 style="text-align:center;">Login</h2>
        <form method="post"   style= "margin: center; padding: 10px; font-size: 20px;">
            <input type="text" name= "email" placeholder="Email"><br>
            <input type="text" name= "password" placeholder="Password"><br>
            
            <button>Login</button>
        </form>

    </div>   
    <?php require "footer.php"; ?>

</body>
</html>
