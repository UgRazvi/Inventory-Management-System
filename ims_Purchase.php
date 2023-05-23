<?php

include "ims_connect.php";


if (isset($_POST["p-btn"])) {

    $bno = $_POST["bno"];
    $iname = $_POST["iname"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $amt = $_POST["amt"];
    $dop = $_POST["dop"];
    $sid = $_POST["sid"];

   
    $s = "SELECT `qty` FROM `stock` WHERE `itemname`='$iname'";
    echo $s,"<br>";
    mysqli_query($con, $s);
    
    $rs = mysqli_query($con, $s);
    if( mysqli_num_rows($rs) > 0){

        $s1 = "UPDATE `stock` SET qty=qty + $qty WHERE `itemname`='$iname'";

        echo "<br> Query : ",$s1;
        mysqli_query($con, $s1);
    }
    else{
        $s2 = "INSERT INTO `purchase`(`billno`, `itemname`, `qty`, `price`, `amt`, `dopurchase`, `sid`) VALUES ('$bno','$iname','$qty','$price','$amt','$dop','$sid')";
        $s3 = "INSERT INTO `stock`(`itemname`, `qty`) VALUES ('$iname','$qty')";
        echo $s2,"<br>";
        echo $s3,"<br>";
        mysqli_query($con, $s2);
        mysqli_query($con, $s3);
    }
    mysqli_close($con);
    echo "<script>alert('ITEM PURCHASED SUCCESSFULLY')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURCHASE</title>
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
            PURCHASE
            </h1>
        </legend>
    <form method="post" action="ims_Purchase.php" enctype="multipart/form-data">

        <table align="center" bgcolor="aquamarine">
            <th colspan="2" align="center">
                <h2>PURCHASE</h2>
            </th>

            <tr>
                <td>ENTER Bill No.</td>
                <td><input type="text" name="bno" class="inp" placeholder="Bill No."></td>
            </tr>
            <tr>
                <td>ENTER Name</td>
                <td><input type="text" name="iname" class="inp" placeholder="Item Name"></td>
            </tr>
            <tr>
                <td>ENTER Quantity</td>
                <td><input type="number" name="qty" class="inp" placeholder="Item Quantity"></td>
            </tr>
            <tr>
                <td>ENTER Price</td>
                <td><input type="number" name="price" class="inp" placeholder="Item Price"></td>
            </tr>
            <tr>
                <td>ENTER Amount</td>
                <td><input type="number" name="amt" class="inp" placeholder="Amount"></td>
            </tr>
            <tr>
                <td>ENTER D.O.P</td>
                <td><input type="text" name="dop" class="inp" placeholder="Date Of Purchase"></td>
            </tr>
            <tr>
                <td>ENTER Seller ID</td>
                <td><input type="text" name="sid" class="inp" placeholder="SELLER ID"></td>
            </tr>
           

            <tr>
                <td colspan="2" align="center"><input type="submit" name="p-btn" value="PURCHASE"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="ims_common.php">BACK</a></td>
            </tr>
        </table>
    </form>
</body>

</html>