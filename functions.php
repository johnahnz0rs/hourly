<?php 

	$activities = ['foam roll', 'sun salutation(s)', 'visit whole foods', 'walk around the block'];
	$random = rand(0, (count($activities) -1));
	$suggestion = $activities[$random];



	$dbase = mysqli_connect('localhost', 'root', 'root', 'hourly');
	if ($dbase) {
		echo "We are connected";
	} else {
		die("No dbase connexion");
	}


	$date = date()



?>