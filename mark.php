<html>
<body>
    <form method="post">
        tamil:
        <input type="number" name="tamil"><br>
        english:
        <input type="number" name="english"><br>
        maths:
        <input type="number" name="maths"><br>
        <input type="submit" name="calc" value="calculate">
    </form>
<?php
if(isset($_POST['calc']))
    {
        $t=$_POST['tamil'];
        $e=$_POST['english'];
        $m=$_POST['maths'];
        $total=$t+$e+$m;
        $avg=$total/3;
        echo"total=$total<br>";
        echo"average=$avg";
    }
    ?>
    </body>
    </html>
    