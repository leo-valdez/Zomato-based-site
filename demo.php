<html>
<head>
	<title>Database</title>
</head>
<body>
	<h1>Database Connected</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomato",$con) or die(connection_aborted());
$sql = "SELECT *FROM Resturant";
$result = mysql_query($sql,$con);
#or die(mysqli_error($con))
echo "<table border='1'>";
echo "<tr><td>REST_ID</td><td>REST_NAME</td><tr>\n";
while ($row=mysql_fetch_assoc($result)) {
	echo "<tr><td>{$row['REST_ID']}</td><td>{$row['REST_NAME']}</td><tr>";

}
echo "<table>";
?>