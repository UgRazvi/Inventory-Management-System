<?php
include "ims_connect.php";
// include "ims_common.php";

?>
<html>

<head>
    <link rel="stylesheet" href="newstyle.css">
</head>


    <hr>
    <div align="center">
        <a href="ims_common.php">HOME</a>
    </div>
    <hr>
    <fieldset>
        <legend>
            <h1>
                SEARCH SUPPLIER
            </h1>
        </legend>
        
    <form method="POST" action="ims_SearchSupplier.php">
        <table align="center" bgcolor="aqua">

            <tr>
                <td>ENTER SUPPPLIER NAME or ID
                <td>
                    <input type=" text" name="t1" class="inp" placeholder="Enter Name or Id"
                        style="padding-left: 58px;">

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

    $s = "select * from supplier where sname='$a'";
    $rs = mysqli_query($con, $s);
    $t = mysqli_num_rows($rs);

    if ($t >= 1) {
        $r = mysqli_fetch_array($rs);
        echo "<table align='center' >";
        echo "<th colspan=2 align=center> <h2>Supplier's Details";
        echo "<tr><td>NAME : <td> $r[1]";
        echo "<tr><td>Id : <td> $r[0]";
    } else {
        $s = "select * from supplier where sid=$a";
        $rs = mysqli_query($con, $s);
        $t = mysqli_num_rows($rs);

        if($t >= 1) {
            $r = mysqli_fetch_array($rs);
            echo "<table align='center' >";
            echo "<th colspan=2 align=center> <h2>Supplier's Details";
            echo "<tr><td>NAME : <td> $r[1]";
            echo "<tr><td>Id : <td> $r[0]";
        } else {
            echo "<script>alert('NO RECORD FOUND')</script>";
        }
    }

    
/*
    $s = "select * from supplier where sname='$a'";
    echo ("$s");
    $rs = mysqli_query($con, $s);
    $t = mysqli_num_rows($rs);

    if ($t == 0) {
        $s = "select * from supplier where sname=$a";
        echo ("$s");
        $rs = mysqli_query($con, $s);
        $t = mysqli_num_rows($rs);
    } elseif ($t == 0) {
        echo "<script>alert('NO RECORD FOUND')</script>";
    } else {
        $r = mysqli_fetch_array($rs);
        echo "<table align='center' >";
        echo "<th colspan=2 align=center> <h2>Supplier's Details";
        echo "<tr><td>NAME : <td> $r[1]";
        echo "<tr><td>Id : <td> $r[0]";
    }*/
}
?>