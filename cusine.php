<head>
    <title>CUISINE</title>
</head>
<body>
    <h1>CUISINE:</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
$sql = "SELECT * FROM resturant";
$result = mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr><td>CUISINE</td></tr>\n";
while ($row=mysql_fetch_assoc($result)) {
    echo"<tr><td>{$row['CUSINE']}</td><tr>";
}
echo "<table>";
?>
