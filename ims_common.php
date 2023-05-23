<?php
$con = mysqli_connect("localhost", "root", "", "inventory");
if (!$con) {
    die("UNABLE TO CONNECT");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTORY MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="ims_style.css">
</head>

<body class="cmn-body">
    <form action="ims_common.php" method="get">
        <table align="center"  class="header_table">
            <tbody class="header-title">
                <th align="center" colspan="12">
                    <h1> <strong>INVENTORY STOCK</strong> </h1>
                </th>
                <tr>
                    <td colspan="12"><hr></td>
                </tr>
                <tr>
                    <td align="center"><a href="ims_NewSupplier.php">NEW SUPPLIER</a></td>
                    <td align="center"><a href="ims_AllSupplier.php">ALL SUPPLIER</a></td>
                    <td align="center"><a href="ims_SearchSupplier.php">SEARCH SUPPLIER</a></td>
                    <td align="center"><a href="ims_NewCustomer.php">NEW CUSTOMER</a></td>
                    <td align="center"><a href="ims_AllCustomer.php">ALL CUSTOMER</a></td>
                    <td align="center"><a href="ims_SearchCustomer.php">SEARCH CUSTOMER</a></td>
                    <td align="center"><a href="ims_Purchase.php">PURCHASE</a></td>
                    <td align="center"><a href="ims_Sell.php">SELL</a></td>
                    <td align="center"><a href="ims_Stock.php">STOCK</a></td>
                    <td align="center"><a href="ims_Ledger.php">LEDGER</a></td>
                    <td align="center"><a href="ims_Bill.php">BILL</a></td>
                    <td align="center"><a href="ims_.Logout">LOGOUT</a></td>
                </tr>
                <tr>
                    <td colspan="12"><hr></td>
                </tr>
                <tr>
                    <td colspan="12"><img src="./img/test.png" alt="BG - IMAGE"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>