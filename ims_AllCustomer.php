<?php
include "ims_connect.php";
// include "ims_common.php";
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
            ALL CUSTOMER
            </h1>
        </legend>
    <!-- <h2 align="center">ALL CustomerS DETAIL -->
</body>

</html>

<?php
// $con = mysqli_connect("localhost", "root", "", "inventory");
// if (!$con)
//     die("Unbale to connect to the Server");

$s = "select * from customer";

$rs = mysqli_query($con, $s);

echo "<table align='center' bgcolor='aquamarine'> <th colspan=2 align=center> <h2>CUSTOMER'S DETAIL</h2> </th>";

echo "<tr> <td align='center'>Customer Name </td>";
echo "<td align=center>Customer ID </td> </tr>";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr> <td align=center>$r[0] </td>";
    echo "<td align=center>$r[1] </td> </tr>";
    // echo "<td align=center><img src='$r[5]' style='height:60px; width:60px; border-radius:50%;'>";
}      
?>
<tr>
    <td colspan="2" align="center"><a href="ims_common.php">BACK</a></td>
</tr>