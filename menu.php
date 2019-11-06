<html>
<head>
    <title>FOOD</title>
</head>
<body>
    <h1>MENU:</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
$sql = "SELECT DISTINCT DISH_NAME FROM MENU";
$result = mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr><td>DISHES</td><tr>\n";
while ($row=mysql_fetch_assoc($result)) {
    echo "<tr><td>{$row['DISH_NAME']}</td><tr>";

}
echo "<table>";
?>