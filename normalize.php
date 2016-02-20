<?php 
    include 'connect.php';
    $sql="UPDATE `vcommission` SET `offer_name`=SUBSTRING_INDEX( `offer_name` , ' ', 1 );";
	if($connection->query($sql))
	{ 
     echo 'Executed Successfully...Rows Affected:'.$connection->affected_rows.'<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	$sql="UPDATE `vcommission` SET `coupon_description`=REPLACE(`coupon_description`,'&amp;','&');";
	if($connection->query($sql))
	{ 
     echo 'Executed Successfully...Rows Affected:'.$connection->affected_rows.'<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	$sql="UPDATE `vcommission` SET `coupon_description`=REPLACE(`coupon_description`,'&amp;','&');";
	if($connection->query($sql))
	{ 
     echo 'Executed Successfully...Rows Affected:'.$connection->affected_rows.'<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	$sql="UPDATE `vcommission` SET `coupon_description`=REPLACE(`coupon_description`,'&ndash;','–');";
	if($connection->query($sql))
	{ 
    echo 'Executed Successfully...Rows Affected:'.$connection->affected_rows.'<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	$sql="UPDATE `vcommission` SET `coupon_title`=REPLACE(`coupon_title`,'&amp;','&');";
	if($connection->query($sql))
	{ 
     echo 'Executed Successfully...Rows Affected:'.$connection->affected_rows.'<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	$sql="UPDATE `vcommission` SET `coupon_title`=REPLACE(`coupon_title`,'&amp;','&');";
	if($connection->query($sql))
	{ 
     echo 'Executed Successfully...Rows Affected:'.$connection->affected_rows.'<br/>'; 
	}
    else
    { 
     echo 'Not Executed Successfully';
     exit;
    }
	?>