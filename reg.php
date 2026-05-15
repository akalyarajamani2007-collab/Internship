<html>
<head>
    <title>registeration<form></title>
</head>
<body>
    <form method="post">
        name:
        <input type="text"name="name"><br>
        email:
        <input type="email" name="email"><br>
        password:
        <input type="password"name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
    <?php
    if (isset($_POST['submit']))
    {
            $name=$_POST['name'];
            $email=$_POST['email'];
            echo"registeration sucessful<br>";
            echo"name:$name<br>:";
            echo"email:$email<br>";
    }
     ?>
</body>
</html>