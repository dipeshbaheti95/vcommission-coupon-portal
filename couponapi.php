<?php
    include 'connect.php';
	echo 'Dropping Existing Table...';
	$sql="drop table if exists vcommission;";
	if($connection->query($sql))
	{ 
     echo 'Executed Successfully<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	echo 'Creating New Table...';
	$sql="CREATE TABLE IF NOT EXISTS `vcommission` (
  `featured` varchar(10) NULL,
  `exclusive` varchar(10) NULL,
  `promo_id` varchar(10) NOT NULL,
  `offer_id` varchar(10) NULL,
  `offer_name` varchar(50) NULL,
  `coupon_title` varchar(500) NULL,
  `category` varchar(50) NULL,
  `coupon_description` varchar(1500) NULL,
  `coupon_type` varchar(10) NULL,
  `coupon_code` varchar(100) NULL,
  `ref_id` varchar(100) NULL,
  `link` varchar(500) NULL,
  `coupon_expiry` varchar(10) NULL,
  `added` varchar(10) NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
   if($connection->query($sql))
	{ 
     echo 'Executed Successfully<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	echo 'Populating Table With Data...';
    $jsondata = file_get_contents('http://tools.vcommission.com/api/coupons.php?apikey=1f40c66642ef1ce8d4b04010f810557a03299971394feebd501e401e7a9a460c');// Dont forget to replace with your api address
	$data=json_decode($jsondata, true);
	foreach ($data as $row) {
        // get the details
        $featured = $row['featured'];
        $exclusive = $row['exclusive'];
        $promo_id = $row['promo_id'];
		$offer_id = $row['offer_id'];
		$offer_name = $row['offer_name'];
        $coupon_title = $row['coupon_title'];
        $category = $row['category'];
		$coupon_description = $row['coupon_description'];
        $coupon_type = $row['coupon_type'];
        $coupon_code = $row['coupon_code'];
		$ref_id = $row['ref_id'];
        $link = $row['link'];
        $coupon_expiry = $row['coupon_expiry'];
		$added = $row['added'];
        
		$sql="INSERT INTO `vcommission`(`featured`, `exclusive`, `promo_id`, `offer_id`, `offer_name`, `coupon_title`, `category`, `coupon_description`, `coupon_type`, `coupon_code`, `ref_id`, `link`, `coupon_expiry`, `added`) VALUES ('$featured','$exclusive','$promo_id','$offer_id','$offer_name','$coupon_title','$category','$coupon_description','$coupon_type','$coupon_code','$ref_id','$link','$coupon_expiry','$added');";
        $result= $connection->query($sql);
		
	}
	echo 'Populating Data Success<br/>';
	echo 'Normalizing Data<br/>';
	include 'normalize.php';
	
	echo 'Success!!!'
	

	
	
	
?>