<html>
<head>
    <title>login form</title>
</head>
<body>
    <form method="Post">
username:
<input type ="text"name ="username"><br>
password:
<input type="password"name="password"><br>
<input type="submit"name="login"value="login">
    </form>
    <?php
    if(isset($_POST['login']))

        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            if($username=="admin"&&password=="1234")
                {
                    echo"login successful";
                }
                else
                {
                    echo"invalid username or password";
                }
        }
                    ?>
                    </body>
                    </html>
                
        