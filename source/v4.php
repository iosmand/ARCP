<?php
$set = $_GET['set'];
$pin = $_GET['pin'];
$wpi_pin = array(14, 14, 15, 18, 17, 27, 22, 23, 24);
$sets = array(dh,dl);

/*$read = shell_exec("raspi-gpio get $wpi_pin[$pin]");
$read = explode("=", $read);
$read = $read[1];
$read = substr($read,0,-5);
$read = $read*-1+1;
//echo $read;

//if($read!==$set)*/

	if($pin >= 1 && $pin <= 8){
		if($set >= 0 && $set <= 1){
	  $cmd = shell_exec("raspi-gpio set $wpi_pin[$pin] $sets[$set]");
			//echo $cmd;
	  } else {
		echo "ERR_SET";
	  }
		$read = shell_exec("raspi-gpio get $wpi_pin[$pin]");
		$read = explode("=", $read);
		$read = $read[1];
		$read = substr($read,0,-5);
		$read = $read*-1+1;
	  	//echo $read;
	  
	  if($read == 0) {
	$button = '<a href="?pin='."$pin".'&set=1" class="btn btn-danger btn-xs">On</a>'; // *-1+1
	}
	else if($read == 1) {
	$button = '<a href="?pin='."$pin".'&set=0" class="btn btn-success btn-xs">Off</a>';
	}
	}
	else if($pin == 0){
		if($set >= 0 && $set <= 1) {
			$cmd = shell_exec("python py/write-all.py $set");
		} else {
		echo "ERR_SET";
	  }	  	//ALL
	}
	else {
	echo "ERR_PIN";
	}

	#echo "PIN $pin | ";
	

echo $button; ?>
