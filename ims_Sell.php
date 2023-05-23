<?php
include "ims_connect.php";

if (isset($_POST["p-btn"])) {

    $bno = $_POST["bno"];
    $iname = $_POST["iname"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $amt = $_POST["amt"];
    $dos = $_POST["dos"];
    $cid = $_POST["cid"];

    $s = "SELECT `qty` FROM `stock` WHERE `itemname`='$iname'";
    echo $s,"<br>";
    mysqli_query($con, $s);

    $rs = mysqli_query($con, $s);
    $qavl = mysqli_num_rows($rs);

    if ($qavl == 0) {
        echo "<script>alert('Oops! The item is currently not available on our platform .... Thanks')</script>";

    } else {
        if ($qavl < $qty) {
            echo "<script>alert('Oops! The item is currently out of stock, we'll let you now when it get back into the stock. Be stick .... Thanks')</script>";
        } else {
            $s1 = "INSERT INTO `sell`(`billno`, `itemname`, `qty`, `price`, `amt`, `dosale`, `cid`) VALUES ('$bno','$iname','$qty','$price','$amt','$dos','$cid')";
            echo $s;
            echo ("<br>");
            
            $s2 = "UPDATE `stock` SET qty=qty - $qty WHERE `itemname`='$iname'";
            echo $s1;
            echo ("<br>");

            mysqli_query($con, $s1);
            mysqli_query($con, $s2);
            echo "<script>alert('ITEM SELLED SUCCESSFULLY')</script>";
        }
    }
    mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELL</title>
    <link rel="stylesheet" href="newstyle.css">
</head>

<body>
    <hr>
    <div align="center">
        <a href="ims_common.php">HOME</a>
    </div>
    <hr>

    <fieldset >   <!-- style = "max-width : fit-content " -->
        <legend>
            <th colspan="2" align="center">
                <h1>SELL</h1>
            </th>
        </legend>

        <form method="post" action="ims_Sell.php" enctype="multipart/form-data">

            <table align="center" bgcolor="aquamarine">


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
                    <td>ENTER D.O.S</td>
                    <td><input type="text" name="dos" class="inp" placeholder="Date Of Sell"></td>
                </tr>
                <tr>
                    <td>ENTER Customer ID</td>
                    <td><input type="number" name="cid" class="inp" placeholder="CUSTOMER ID"></td>
                </tr>


                <tr>
                    <td colspan="2" align="center"><input type="submit" name="p-btn" value="SELL"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><a href="ims_common.php">BACK</a></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <br>
    
</body>

</html>