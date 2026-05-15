<html>
<body>
    <form method ="POST">
        number 1:
        <input type="number"name="num1"><br>
        number 2:
        <input type="number"name="num2"><br>
        <input type="submit"name="add"value ="add">
    </form>
    <?php
    if(isset($_POST['add']))
    {
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        echo"sum=".($a+$b);
    }
?>
</body>
</html>