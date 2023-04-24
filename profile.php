<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - My first php Website</title>
</head>
<body>
    <?php require "header.php";?>
    <div style="margin: auto;max-width: 600px">
        <h2 style="text-align:center;">User profile</h2>
        <table style="text-align: center;">
            <tr>
                <td><img src="img.jpg" alt="" style="height: 150px; width: 150px; object-fit: cover;"></td>
            </tr>
            <tr>
                <td>Mark</td>
            </tr>
            <tr>
                <td>Mark@email.com</td>
            </tr>

        </table>
        <hr>
        <h5>Write a post</h5>
        <form method="post"   style= "margin: center; padding: 10px; font-size: 20px;">
      
            <textarea name="post" rows="8"></textarea><br>
            
            <button>Login</button>
        </form>

    </div>   
    <?php require "footer.php"; ?>

</body>
</html>
