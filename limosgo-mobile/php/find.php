<?php
if($_POST['findtaxi']=='Find!') {
	$_SESSION['pickaddress'] = $_POST['pickaddress'];
	$_SESSION['dropaddress'] = $_POST['dropaddress'];
	$_SESSION['pickdate'] = $_POST['pickdate'];
	if ($_POST['pickhour'] < 12) {
		$_SESSION['am_pm'] = "AM";
		if ($_POST['pickhour'] == 0) {
			$_SESSION['pickhour'] = 12;
		} else {
			$_SESSION['pickhour'] = $_POST['pickhour'];
		}
	} else {
		$_SESSION['am_pm'] = "PM";
		if ($_POST['pickhour'] == 12) {
			$_SESSION['pickhour'] = 12;
		} else {
			$_SESSION['pickhour'] = $_POST['pickhour'] - 12;
		}
	}
	$_SESSION['pickminute'] = $_POST['pickminute'];
	//header("Location: select.php");
	//exit(0);
}
?>