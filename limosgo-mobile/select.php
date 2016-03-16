<?php
	include("php/find.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Limos Go</title>
<link rel="stylesheet" href="themes/taxicabgo.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
function switchTab(id1,id2) {
	document.getElementById(id1).style.display = "block";
	document.getElementById(id2).style.display = "none"; 
}
</script>
</head>
<body>

<div data-role="page" id="pageone">
	<div data-role="header">
		<a href="#" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>
		<h1><img src="images/m7.png" width="50" height="39" alt=""/><br/><em>Limos Go</em></h1>
	</div>

<div data-role="main" class="ui-content">
	<!--div><strong>Trip#:</strong>  100003</div-->
	<div><strong>Pick Up Date:</strong>&nbsp;&nbsp;<?php echo $_SESSION['pickdate'];?></div>
	<div><strong>Pick Up Time:</strong>&nbsp;&nbsp;<?php echo $_SESSION['pickhour'].$_SESSION['pickminute'].$_SESSION['am_pm'];?></div>
	<div><strong>Pick Up Address:</strong>&nbsp;&nbsp;<?php echo $_SESSION['pickaddress'];?></div>
	<div><strong>Drop Off Address:</strong>&nbsp;&nbsp;<?php echo $_SESSION['dropaddress'];?></div>
	<p>&nbsp;</p>
	<div class="ui-grid-a" align="center" style="font-size:20px;">
		<div class="ui-block-a">
			<div style="color:#FFF;width:90%;background-color:#888" onClick="switchTab('limosgo','taxicabgo');"><img src="images/limos.png" width="50" height="39" alt=""> Limos Go</div>
		</div>
		<div class="ui-block-b">
			<div style="color:#FFF;width:90%;background-color:#888" onClick="switchTab('taxicabgo','limosgo');"><img src="images/taxis.png" width="50" height="39" alt=""> Taxicab Go</div>
		</div>
	</div>
	<br/>
	<div id="limosgo" style="display:block">
		<div class="ui-grid-a">
			<div class="ui-block-a" align="right">
				<img src="images/limo.jpg" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
			</div>
			<div class="ui-block-b" align="left">
				<span style="width:50px; height:30px; padding:5px; color:#990000; font-weight:bold; font-size:20px;">$00.00</span><br/>
				1<img src="images/icon2.png" width="30" height="28" alt=""/> 1<img src="images/icon1.png" width="30" height="28" alt=""/>
			</div>
		</div><input type="button" data-icon="arrow-u" name="button" id="button" value="Select"/>
		<br/>
		<div class="ui-grid-a">
			<div class="ui-block-a" align="right">
				<img src="images/imgCar.png" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
			</div>
			<div class="ui-block-b" align="left">
				<span style="width:50px; height:30px; padding:5px; color:#990000; font-weight:bold; font-size:20px;">$00.00</span><br/>
				1<img src="images/icon2.png" width="30" height="28" alt=""/> 1<img src="images/icon1.png" width="30" height="28" alt=""/>
			</div>
		</div><input type="button" data-icon="arrow-u" name="button" id="button" value="Select"/>
		<br/>
		<div class="ui-grid-a">
			<div class="ui-block-a" align="right">
				<img src="images/limo.jpg" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
			</div>
			<div class="ui-block-b" align="left">
				<span style="width:50px; height:30px; padding:5px; color:#990000; font-weight:bold; font-size:20px;">$00.00</span><br/>
				1<img src="images/icon2.png" width="30" height="28" alt=""/> 1<img src="images/icon1.png" width="30" height="28" alt=""/>
			</div>
		</div><input type="button" data-icon="arrow-u" name="button" id="button" value="Select"/>
		<br/>
		<div class="ui-grid-a">
			<div class="ui-block-a" align="right">
				<img src="images/Passenger_Van.jpg" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
			</div>
			<div class="ui-block-b" align="left">
				<span style="width:50px; height:30px; padding:5px; color:#990000; font-weight:bold; font-size:20px;">$00.00</span><br/>
				1<img src="images/icon2.png" width="30" height="28" alt=""/> 1<img src="images/icon1.png" width="30" height="28" alt=""/>
			</div>
		</div><input type="button" data-icon="arrow-u" name="button" id="button" value="Select"/>
	</div>
	<div id="taxicabgo" style="display:none">
		<div class="ui-grid-a">
			<div class="ui-block-a" align="right">
				<img src="images/taxi.jpeg" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
			</div>
			<div class="ui-block-b" align="left">
				<span style="width:50px; height:30px; padding:5px; color:#990000; font-weight:bold; font-size:20px;">$00.00</span><br/>
				1<img src="images/icon2.png" width="30" height="28" alt=""/> 1<img src="images/icon1.png" width="30" height="28" alt=""/>
			</div>
		</div><input type="button" data-icon="arrow-u" name="button" id="button" value="Select"/>
		<br/>
		<div class="ui-grid-a">
			<div class="ui-block-a" align="right">
				<img src="images/taxi.jpeg" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
			</div>
			<div class="ui-block-b" align="left">
				<span style="width:50px; height:30px; padding:5px; color:#990000; font-weight:bold; font-size:20px;">$00.00</span><br/>
				1<img src="images/icon2.png" width="30" height="28" alt=""/> 1<img src="images/icon1.png" width="30" height="28" alt=""/>
			</div>
		</div><input type="button" data-icon="arrow-u" name="button" id="button" value="Select"/>
	</div>
</div>

<div data-role="footer">
<div>
<ul>
<li><a href="#">Partner</a></li>
</ul>
</div>
<div>
<ul>
<li><a href="#">Cancellation &amp; Refund Policy</a></li>
</ul>
</div>
<div>
<ul>
<li><a href="#">Terms &amp; Conditions</a></li>
</ul>
</div>
<div>
<ul>
<li><a href="#">Additional Fee</a></li>
</ul>
</div>
<div>
<ul>
<li><a href="#">Privacy Policy</a></li>
</ul>
</div>
<div>
<ul>
<li><a href="#">Contact US</a></li>
</ul>
</div>
<h1>&nbsp;</h1>
<h1>@2015 Taxi Cab GO All Right Reserved Designed By : Web Team</h1>
</div>
</div>

</body>
</html>