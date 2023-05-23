<?php

include "ims_connect.php";

// $con = mysqli_connect("localhost", "root", "", "inventory");
// if (!$con) {
//     die("UNABLE TO CONNECT");
// }
if (isset($_POST["c-btn"])) {

    $cname = $_POST["cname"];
    $cid = $_POST["cid"];

    $s = "INSERT INTO `Customer`(`cid`, `cname`) VALUES ('$cid','$cname')";
    echo $s;

    mysqli_query($con, $s);
    mysqli_close($con);
    echo "<script>alert('Customer REGISTERED SUCCESSFULLY')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW CUSTOMER REGISTRATION</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body> <hr>
    <div align="center">
        <a href="ims_common.php">HOME</a>
    </div>
    <hr>
    <fieldset>
        <legend>
            <h1>
                New Customer
            </h1>
        </legend>

    <form method="post" action="ims_NewCustomer.php" enctype="multipart/form-data">

        <table align="center" bgcolor="aquamarine">
            <th colspan="2" align="center">
                <h2>Register Customer</h2>
            </th>
            <tr>
                <td>ENTER CUSTOMER NAME </td>
                <td><input type="text" name="cname" class="inp" placeholder=" Enter Customer Name"></td>
            </tr>
            <tr>
                <td>ENTER CUSTOMER ID</td>
                <td><input type="text" name="cid" class="inp"placeholder=" Enter Customer Id"></td>
            </tr>

            <tr>
                <td colspan="2" align="center"><input type="submit" name="c-btn" value="REGISTER CUSTOMER"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="ims_common.php">BACK</a></td>
            </tr>
        </table>
    </form>
</body>

</html>