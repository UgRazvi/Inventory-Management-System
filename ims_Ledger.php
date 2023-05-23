<?php
include "ims_connect.php";
?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IMS LEDGER</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <style>
        .inp:hover {
            color: black;
            /* background-style: none; */
            background-color: dodgerblue;
        }
    </style>
</head>

<body>
<br>
<!-- <hr> -->
<div align="center">
    <a href="ims_common.php">HOME</a>
</div>
<br>
<hr>
    <fieldset>
        <legend>
            <h1>
                LEDGER
            </h1>
        </legend>

        <form method="post" action="ims_Ledger.php" enctype="multipart/form-data">
            <table align="center" bgcolor="dodgerblue" cellspacing="10" cellpading="10">
                <tr>
                    <td bgcolor="white">
                        <table align="right" border="1 solid black">

                            <tr>
                                <td>Selling DATE</td>
                                <td><input type="text" name="dos" class="inp"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="s-btn" id="sell" class="inp"
                                        style=" background-color:black; color: thistle;"></td>
                            </tr>
                        </table>
                    </td>
                    <td bgcolor="white">
                        <table align="left" border="1 solid black">

                            <tr>
                                <td>Purchasing DATE</td>
                                <td><input type="text" name="dop" class="inp"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="p-btn" id="purchase"
                                        class="inp" style="background-color:black; color: thistle;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>

<?php

if (isset($_POST["s-btn"])) {

    $dos = $_POST["dos"];

    $s = "SELECT * FROM sell WHERE dosale = '$dos'";
    echo $s;
    $rs = mysqli_query($con, $s);
    echo " <br> Sell : ", mysqli_num_rows($rs), "<br>";

    echo "<table align='center' bgcolor='aquamarine'>";

    echo "<th colspan=7 align=center><h2>SELL LEDGER DETAILS";
    echo "<tr>";
    echo "<td align=center>Bill Number";
    echo "<td align=center>Item Name";
    echo "<td align=center>Quantity";
    echo "<td align=center>Price";
    echo "<td align=center>Amount";
    echo "<td align=center>Date Of Sale";
    echo "<td align=center>Customer ID</tr>";

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

    // mysqli_query($con, $s);
// mysqli_close($con);
    echo "<script>alert('YOUR SELL LEDGER')</script>";
}

if (isset($_POST["p-btn"])) {

    $dop = $_POST["dop"];

    $s = "SELECT * FROM purchase WHERE dopurchase = '$dop'";
    echo $s;
    $rs = mysqli_query($con, $s);
    echo " <br> Purchase : ", mysqli_num_rows($rs), "<br>";

    echo "<table align='center' bgcolor='aquamarine'>";

    echo "<th colspan=7 align=center><h2>PURCHASE LEDGER DETAILS";
    echo "<tr>";
    echo "<td align=center>Bill Number";
    echo "<td align=center>Item Name";
    echo "<td align=center>Quantity";
    echo "<td align=center>Price";
    echo "<td align=center>Amount";
    echo "<td align=center>Date Of Purchase";
    echo "<td align=center>Seller ID</tr>";

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
    // mysqli_query($con, $s);
    // mysqli_close($con);
    echo "<script>alert('YOUR PURCHASE LEDGER')</script>";
}

?>
