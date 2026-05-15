<html>
<head>
    <title>registration<form></title>
</head>
<body>
    <form method="post">
        name:
        <input type="text"name="name"><br>
        email:
        <input type="email" name="email"><br>
        <input type="submit" name="submit"value="register">
        </form>
        <?php
        if (sset($_post['submit']))
        {
            $name=$_post['name'];
            $email=$_post['emali'];
            echo"registeration sucessful<br>";
            echo"name:$name<br>";
            echo"email'$email<br>";
        }
        ?>
    </body>
    </html>