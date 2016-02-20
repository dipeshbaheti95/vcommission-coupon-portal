<?php
include ('header.php');
?>
<?php
$q=$_GET['q'];
$sql="select * from `vcommission` where `offer_name` like '%".$q."%'";
$rs=$connection->query($sql);
$row_cnt = $rs->num_rows;
if($row_cnt>0)
{
	echo '<header class="w3-container w3-indigo"><h1>'.$q.' Coupons and Offers:</h1> </header><br/>';
	while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC))
	{
	
		?>
		<div class="w3-card-4" style="width:auto">
        <header class="w3-container w3-blue">
        <h1><?php echo $row['coupon_title'] ?></h1>
        </header>

<div class="w3-container">
<p><?php echo $row['coupon_description'] ?></p>
<p class="w3-container"><?php if(!empty($row['coupon_code']))
	echo 'Coupon Code:'.$row['coupon_code'].'<br/> Copy the coupon code and click on avail offer.';
else
	echo 'No code required, just click on avail offer.';
?></p>
<a class="w3-btn w3-red" href="<?php echo $row['link'] ?>">Avail Offer</a>

</div>
<br/>
</div>
<br/>
        
		<?php
	}
	
?>

<?php
}
else
{
	echo "No coupons or promotions found";
}
?>
<?php
include ('footer.php');
?>