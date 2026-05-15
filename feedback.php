<html>
<body>
    <form method="post">
        name:
        <input type="text" name="name"><br>
        feed back:
        <text area name="feedback"></text area><br>
        <input type="submit"name="send"value="submit">
    </form>
    <?php
    if(isset($_POST['send']))
        {
            echo "thank you for feedback";
        }
    ?>
</body>
</html>