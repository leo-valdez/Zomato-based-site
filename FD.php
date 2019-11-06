<html>
<head>
    <title>FOOD PATNER</title>
</head>
<body>
    <h1>FOOD PATNER:</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
$sql = "SELECT * FROM Partner";
$result = mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr><td>PARTNER_ID</td><td>REST_ID</td><td>PHONE_NO</td><td>VEHICLE_NO</td></tr>\n";
while ($row=mysql_fetch_assoc($result)) {
    echo "<tr><td>{$row['PARTNER_ID']}</td><td>{$row['REST_ID']}</td><td>{$row['PHONE_NO']}</td><td>{$row['VEHICLE_NO']}</td><tr>";
}
echo "<table>";
?>
