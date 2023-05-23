<?php

include "ims_connect.php";

// $con = mysqli_connect("localhost", "root", "", "inventory");
// if (!$con) {
//     die("UNABLE TO CONNECT");
// }
if (isset($_POST["s-btn"])) {

    $sname = $_POST["sname"];
    $sid = $_POST["sid"];

    $s = "INSERT INTO `supplier`(`sid`, `sname`) VALUES ('$sid','$sname')";
    echo $s;

    mysqli_query($con, $s);
    mysqli_close($con);
    echo "<script>alert('SUPPLIER REGISTERED SUCCESSFULLY')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW SUPPLIER REGISTRATION</title>
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
            NEW SUPPLIER
            </h1>
        </legend>

    <form method="post" action="ims_NewSupplier.php" enctype="multipart/form-data">

        <table align="center" bgcolor="aquamarine">
            <th colspan="2" align="center">
                <h2>Register Supplier</h2>
            </th>
            <tr>
                <td>ENTER SUPPLIER NAME </td>
                <td><input type="text" name="sname" class="inp" placeholder=" Enter Supplier Name"></td>
            </tr>
            <tr>
                <td>ENTER SUPPLIER ID</td>
                <td><input type="text" name="sid" class="inp"placeholder=" Enter Supplier Id"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="s-btn" value="REGISTER SUPPLIER"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="ims_common.php">BACK</a></td>
            </tr>
        </table>
    </form>
    </fieldset>
</body>

</html>