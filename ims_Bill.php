<?php
include "ims_connect.php";

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMS BILL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        .inp:hover {
            color: white;
            /* background-style: none; */
            background-color: black;
        }
    </style>
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
                Bill
            </h1>
        </legend>

        <form method="post" action="ims_Bill.php" enctype="multipart/form-data">
            <table align="center" bgcolor="dodgerblue" cellspacing="10" cellpading="10">
                <tr>
                    <td>ITEM NAME</td>
                    <td><input type="text" name="iname" class="inp"></td>
                </tr>
                <tr>
                    <td align="left"><input type="submit" name="s-btn" id="sell"
                            style="background-color:black; color: thistle;" class="inp" value="SELL"></td>

                    <td align="right"><input type="submit" name="p-btn" id="purchase"
                            style="background-color:black; color: thistle;" class="inp" value="PURCHASSE"></td>
                </tr>
            </table>
        </form>

    </fieldset>
</body>

</html>

<?php

if (isset($_POST["s-btn"])) {
$iname = $_POST["iname"];
    $s = "SELECT * FROM sell WHERE itemname = '$iname'";
    //  echo $s;

    $rs = mysqli_query($con, $s);
    // echo " <br> Sell : ", mysqli_num_rows($rs), "<br>";

    echo "<table align='center' bgcolor='aquamarine'>";

    echo "<th colspan=7 align=top><h2> Sell ";
    echo "<tr>";
    echo "<td align=center>Bill Number";
    echo "<td align=center>Item Name";
    echo "<td align=center>Quantity";
    echo "<td align=center>Price";
    echo "<td align=center>Amount";
    echo "<td align=center>Date Of Sale";
    echo "<td align=center>Customer ID";
    echo "<tr>";

    while ($r = mysqli_fetch_array($rs)) {
        echo "<tr>";
        echo "<td align=center>$r[0]";
        echo "<td align=center>$r[1]";
        echo "<td align=center>$r[2]";
        echo "<td align=center>$r[3]";
        echo "<td align=center>$r[4]";
        echo "<td align=center>$r[5]";
        echo "<td align=center>$r[6]";
    }
    echo "<script>alert('BILL : SELL')</script>";
}
if (isset($_POST["p-btn"])) {
$iname = $_POST["iname"];    
    $s2 = "SELECT * FROM purchase WHERE itemname = '$iname'";
    // $s2 = "SELECT `billno`, `itemname`, `qty`, `price`, `amt`, `dopurchase`, `sid` FROM `purchase` WHERE 'itemname' = '$iname'";
    //echo $s2;
    $rs2 = mysqli_query($con, $s2);
    // echo " <br> Purchase : ", mysqli_num_rows($rs2), "<br>";

    echo "<table align='center' bgcolor='aquamarine'>";

    echo "<th colspan=7 align=center><h2> Purchase ";
    echo "<tr>";
    echo "<td align=center>Bill Number";
    echo "<td align=center>Item Name";
    echo "<td align=center>Quantity";
    echo "<td align=center>Price";
    echo "<td align=center>Amount";
    echo "<td align=center>Date Of Purchase";
    echo "<td align=center>Seller ID</tr>";

    while ($r2 = mysqli_fetch_array($rs2)) {
        echo "<tr>";
        echo "<td align=center>$r2[0]";
        echo "<td align=center>$r2[1]";
        echo "<td align=center>$r2[2]";
        echo "<td align=center>$r2[3]";
        echo "<td align=center>$r2[4]";
        echo "<td align=center>$r2[5]";
        echo "<td align=center>$r2[6]";
        echo "<tr>";
    }
    echo "<script>alert('BILL : PURCHASE')</script>";
}


?>