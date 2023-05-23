<?php
include "ims_connect.php";
?>
<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
<hr>
    <div align="center">
        <a href="ims_common.php">HOME</a>
    </div>
    <hr>
    <fieldset>
        <legend>
            <h1>
            SEARCH CUSTOMER
            </h1>
        </legend>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <table align="center" bgcolor="aqua">

            <tr>
                <td align="center" colspan="2">
                    ID <input type="radio" name="radio" value="id">
                    NAME <input type="radio" name="radio" value="name">
                </td>
            </tr>
            <tr>
                <!-- <td>ENTER CUSTOMER NAME or ID -->
                <td>
                    <input type=" text" name="t1" class="inp" placeholder="Select Name or Id"
                        style="padding-left: 55px;">

            <tr>
                <td colspan="2" align="center" style="padding-top: 20px;">
                    <input type="submit" name="submit" value="SEARCH">
            <tr>
                <td align="center" colspan="2">
                    <a href="ims_common.php">BACK TO HOME PAGE</a>
                </td>

            </tr>
    </form>
    </table>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    $a = $_POST["t1"];

    if (isset($_POST["radio"])) {
        $checkVal = $_POST['radio'];
        if ($checkVal == "name") {
            // print_r($checkVal);
            // echo "<br>";
            $s = "select * from customer where cname='$a'";
            echo ("$s");
            $rs = mysqli_query($con, $s);
            $t = mysqli_num_rows($rs);
            if ($t > 0) {
                $r = mysqli_fetch_array($rs);
                echo "<table align='center' >";
                echo "<th colspan=2 align=center> <h2>Supplier's Details";
                echo "<tr><td>NAME : <td> $r[1]";
                echo "<tr><td>Id : <td> $r[0]";
            } else {
                echo "<script>alert('NO RECORD FOUND')</script>";
            }

        } elseif ($checkVal == "id") {
            // print_r($checkVal);
            // echo "<br>";
            $s = "select * from customer where cid=$a";
            echo ("$s");
            $rs = mysqli_query($con, $s);
            $t = mysqli_num_rows($rs);
            if ($t > 0) {
                $r = mysqli_fetch_array($rs);
                echo "<table align='center' >";
                echo "<th colspan=2 align=center> <h2>Supplier's Details";
                echo "<tr><td>Id : <td> $r[0]";
                echo "<tr><td>NAME : <td> $r[1]";
            }else {
                echo "<script>alert('NO RECORD FOUND')</script>";
            }

        }
    } else {
        echo "<script>alert('RADIO BUTTON IS NOT POSTED')</script>";
    }

}

?>