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

<!DOCTYPE html>
<html>
<head>
	<title>food</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href=" stylee.css">

</head>
<body>
	<header>
		<div class="row">
			<div class="logo">
				<img src="tag.png">
			<ul class="main-nav">
				<li><a href="FD.php">FOOD DELIVERY</a></li>
				<li><a href="cusine.php">FOOD ORDER</a></li>
				<li><a href="OU.php">TESTIMONIAL</a></li>
				<li><a href="try1.php">OUR CITIES</a></li>
				
				<li><a href="">SERVICE</a></li>
			</ul>
		</div>
		<div class ="hero">
			<h1>HUNGRY ? <br> KNOW RESTAURANTS NEAR YOU... </h1>
			<div class="button-awesome">
			<a href=""class="btn btn-half">Show me more</a>
			<a href=""class="btn btn-full">I am Hungry</a>
		</div>
		</div>
	</header>

	<section class="features">
		<h3 class="text-center">GET FOOD FAST - NOT THE FAST FOOD</h3>
		<p class="copy">
			Hello , we're Zomato , your premium food delivery service. We know you're always busy.<br>
			No time for cooking. So let us take care of that,we're really good at it, we promise!
		</p>
		<center><div class="container">
			<div class="row">
				<div class="col-md-2">
					<i class ="fa fa-clock-o"></i>
					<h4>READY IN 20 MINUTES</h4>
					<p class="arrange">
						You,re only twenty minutes away from your delicious and super healthy meals delivered to your home.We work with the best chefs in the town
						to ensure that you are 100% happy!
					</p>
				</div>
				<div class="col-md-2">
					<i class="fa fa-leaf"></i>
					<h4>100% ORGANIC</h4>
					<p class="arrange">
						All our vegetables are fresh organic and local. Animals are raised without added hormones or antibiotics.Good for your health the environment and it also tastes better!
					</p>
					
				</div>
				<div class="col-md-2">
					<i class="fa fa-shopping-cart"></i>
					<h4>ORDER ANYTHING</h4>
					<p class="arrange">
						We dont limit your creativity which means you can order whatever you feel like.You can also choose from our menu containing over 100 delicious meals.It's up to you!</p>
				</div>
			</div>
		</div></center>
	</section>
	<section class="find">
		<div class="wrap">
   		<div class="search">
      		
             <div id="form-wrapper" style="max-width:500px;margin:auto;">
        	<form action="try.php" method="post">
            <input type="text" name="valueToSearch" placeholder="What are you looking for?"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
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
		</div>
	</section>
	<section class="restaurant">
		<div id="form-wrapper" style="max-width:500px;margin:auto;">
		<div class="row">
  		<div class="column">
    	<div class="card"> <?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=1";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
  		<div class="column">
   		 <div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=2";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
  		<div class="column">
    	<div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=3";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
 		 <div class="column">
    	<div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=4";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>  		</div>
		</div>
		<div class="row">
  		<div class="column">
    	<div class="card"> <?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=5";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
  		<div class="column">
   		 <div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=6";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
  		<div class="column">
    	<div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=7";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
 		 <div class="column">
    	<div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=8";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
		</div>
		<div class="row">
  		<div class="column">
    	<div class="card"> <?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=9";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
  		<div class="column">
   		 <div class="card"><?php 
    						$con=mysql_connect("localhost","root","");
							$connection=mysql_select_db("Zomatoo",$con) or die(connection_aborted());
							$sql = "SELECT *FROM Resturant where REST_ID=10";
							$result = mysql_query($sql,$con);
							while ($row=mysql_fetch_assoc($result)) {
							echo "<br>{$row['REST_NAME']}<br>\n{$row['CUSINE']}<br>\n{$row['REST_ADD']}";} ?></div>
  		</div>
  		<div class="column">
    	<div class="card"><br>\n<br>COMING SOON!<br></div>
  		</div>
 		 <div class="column">
    	<div class="card"><br>\n<br>COMING SOON!<br></div>
  		</div>
		</div>
		</div>
	</section>
</body>
</html>