<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `resturant` WHERE CONCAT(`REST_NAME`, `REST_ADD`, `CUSINE`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
 $query = "SELECT * FROM `resturant`";
 $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "zomatoo");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>



<html>
<head>
<title></title>
<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href=" stylee.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
  <div class="navbar-nav align">
     <a class="nav-item nav-link" href="FD.php">FOOD PATNER <span class="sr-only">(current)</span></a>
     <a class="nav-item nav-link" href="order.php">FOOD ORDER</a>
     <a class="nav-item nav-link" href="OU.php#">OUR USER </a>
     <a class="nav-item nav-link" href="rec.php">OUR RECOMMENDATION</a>
     <a class="nav-item nav-link" href="cusine.php">CUISINE</a>
     <!-- <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
   </div>
 </nav>
 <header>
<div class="jumbotron-fluid justify-content-center text-center">
 <h1 class="display-4">HUNGRY?</h1>
 <h1 class="display-4">KNOW RESTAURANTS NEAR YOU...</h1>
 <p class="lead">
   <a href="food.php"class="btn btn-half">Show me more</a>
<a href="menu.php"class="btn btn-full">I am Hungry</a>
 </p>
</div>
</header>
<section class="features">
<div class="jumbotron-fluid justify-content-center text-center">
 <h1 class="display-4">GET FOOD FAST - NOT THE FAST FOOD</h1>
<center><p class="lead">Hello , we're Zomato , your premium food delivery service. We know you're always busy.</p>
 <p class="lead">No time for cooking. So let us take care of that,we're really good at it, we promise!</p></center>
</div>

<div class="container">
<div class="row">
<div class="col-4">
<i class ="fa fa-clock-o" ><h4>READY IN 20 MINUTES</h4></i>
<p class="arrange">
You,re only twenty minutes away from your delicious and super healthy meals delivered to your home.We work with the best chefs in the town
to ensure that you are 100% happy!
</p>
</div>
<div class="col-4">
<i class="fa fa-leaf"></i>
<h4>100% ORGANIC</h4>
<p class="arrange">
All our vegetables are fresh organic and local. Animals are raised without added hormones or antibiotics.Good for your health the environment and it also tastes better!
</p>
</div>
<div class="col-4">
<i class="fa fa-shopping-cart"></i>
<h4>ORDER ANYTHING</h4>
<p class="arrange">
We dont limit your creativity which means you can order whatever you feel like.You can also choose from our menu containing over 100 delicious meals.It's up to you!
</p>
</div>
</div>
</div>
</section>
<div class="container justify-content-center">
<div class="row">
<div class="col-12">
<section class="find">
<div class="wrap">
  <div class="search">
            <form action="food.php" method="post">
            <input type="text" name="valueToSearch" placeholder="What are you looking for?"><br><br>
            <input type="submit" name="search" value="searchButton"><br><br>
       <i class="fa fa-search"></i>
      <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
            <table>
                <tr>
                    <th>REST_NAME</th>
                    <th>REST_ADD </th>
                    <th>CUSINE</th>
                </tr>


                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['REST_NAME'];?></td>
                    <td><?php echo $row['REST_ADD'];?></td>
                    <td><?php echo $row['CUSINE'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
    </form>
  </div>
</div>
</section>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-4">
<div class="card">
 <?php 

              $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=1";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=2";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=3";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
</div>

<div class="row">
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=4";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=5";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=6";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
</div>

<div class="row">
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=7";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=8";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
<div class="col-4">
<div class="card">
<?php 
                $con=mysql_connect("localhost","root","");
              $connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
              $sql = "SELECT *FROM Resturant where REST_ID=9";
              $result = mysql_query($sql,$con);
              while ($row=mysql_fetch_assoc($result)) {
              echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?>
</div>
</div>
</div>
</div>


</body>
</html>