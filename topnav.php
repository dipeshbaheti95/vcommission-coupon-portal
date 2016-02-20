<nav class="w3-topnav w3-red">  
 <?php
$s1=1;
$src="SELECT DISTINCT(offer_name) FROM `vcommission`";
$rs=$connection->query($src);
$row_cnt = $rs->num_rows;
if($row_cnt>0)
{
	while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC))
	{
	
		?>
		<a href="display.php?q=<?php echo $row['offer_name'] ?>"><?php echo $row['offer_name'] ?></a>   
		<?php
	}
	
?>

<?php
}
else
{
	echo "No Categories found";
}
?>   
</nav>