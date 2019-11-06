<html>
<head>
    <title>ORDER</title>
</head>
<body>
    <h1>ORDER:</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
$sql = "SELECT * FROM MENU WHERE REST_ID IN (SELECT REST_ID FROM RESTURANT WHERE REST_NAME='BeHive')";
$result = mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr><td>ITEM_ID</td><td>DISH_NAME</td><td>DISH_PRICE</td><td>REST_ID</td><tr>\n";
while ($row=mysql_fetch_assoc($result)) {
    echo "<tr><td>{$row['ITEM_ID']}</td><td>{$row['DISH_NAME']}</td><td>{$row['DISH_PRICE']}</td><td>{$row['REST_ID']}</td><tr>";

}
echo "<table>";

?>