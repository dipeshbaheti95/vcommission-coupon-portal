<?php
include ('connect.php') ;
?>
<!DOCTYPE html>
<html>
<title>Coupons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<body>

<header class="w3-container w3-orange">
<h1>Coupons & Deals</h1>
</header>



<nav class="w3-topnav w3-black">
<a href="index.php">Home</a>
</nav>

<form method="get" action="display.php" class="w3-container w3-green">
<label>Search: </label><input class="w3-input w3-text-black" type="text" name="q" style="width:auto"> <input type="submit" value="Search" class="w3-btn"/>
</form> 



<?php include 'topnav.php'; ?>

<div class="w3-content">

<div class="w3-row w3-margin">
