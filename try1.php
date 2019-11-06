<html>
<head>
    <title>OUR CITIES</title>
</head>
<body>
    <h1>Database Connected</h1>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
$sql = "SELECT DISTINCT REST_ADD FROM Resturant";
$result = mysql_query($sql,$con);
echo "<table border='1'>";
echo "<tr><td>REST_ADD</td><tr>\n";
while ($row=mysql_fetch_assoc($result)) {
    echo "<tr><td>{$row['REST_ADD']}</td><tr>";

}
echo "<table>";
?>