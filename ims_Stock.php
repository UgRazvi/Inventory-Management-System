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
                STOCK
            </h1>
        </legend>
</body>

</html>

<?php

$s = "SELECT * FROM `stock` WHERE 1";

$rs = mysqli_query($con, $s);

echo "<table align='center' bgcolor='aquamarine'> <th colspan=2 align=center> <h2>STOCK'S DETAIL</h2> </th>";

echo "<tr> <td align='center'>Item Name </td>";
echo "<td align=center>Quantity </td> </tr>";

while ($r = mysqli_fetch_array($rs)) {
    echo "<tr> <td align=center>$r[0] </td>";
    echo "<td align=center>$r[1] </td> </tr>";
    // echo "<td align=center><img src='$r[5]' style='height:60px; width:60px; border-radius:50%;'>";
}
?>
<tr>
    <td colspan="2" align="center"><a href="ims_common.php">BACK</a></td>
</tr>