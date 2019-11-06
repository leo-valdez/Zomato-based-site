<html>
<head>
    <title>OUR USER</title>
</head>
<body>
    <h1>OUR USERS:</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
$sql = "SELECT * FROM Customer";
$result = mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr><td>NAME</td></tr>\n";
while ($row=mysql_fetch_assoc($result)) {
    echo "<tr><td>{$row['NAME']}</td><tr>";
}
echo "<table>";
?>
