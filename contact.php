<html>
<body>
    <form method="post">
        name:
        <input type="text" name="name"><br>
        mobile:
        <input type="text" name="mobile"><br>
        message:
        <text area name="message"></text area><br>
        <input type="submit" name="submit" value="send">
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            echo"message sent to successfully";
        }
        ?>
        </body>
        </html>