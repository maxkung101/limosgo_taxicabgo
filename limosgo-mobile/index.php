<?php  
	include("php/log.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<title>Limo Mobile Search</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" lang=""/>
<style>
body{ background-color:#0078BC;font-family:calibri; font-size:18px; letter-spacing:1px; }
.txt{ width:100%; padding:5px; height:50px; border:1px solid #666; border-radius:5px;color:#666;}
.service { font-size: 14px; }
.row_pad{ padding:7px 0 7px 0;color:#FFF;}
.btn_sign2{ min-width:100%; height:50px; background:#FFBA14;border-radius:5px; border:1px solid #999;font-size:16px; font-weight:bold;letter-spacing:1px;}
.a_link{ color:#FFF;}
.bol{font-size:20px; font-family:calibri; text-align:center; padding:5px; text-transform:capitalize;}
.container-fluid{background-color:#0078BC; padding-top: 2%; padding-bottom:10%;}
.container-in{background-color:#023856; padding:2%; margin:auto; border-radius:20px;}
.opt{width:100%;height:50px; padding:5px; border:1px solid #666; border-radius:5px; color:#666;}
.left_part{width:50%; float:left; vertical-align:top;}
.right_part{width:50%; float:right; vertical-align:top; text-align:left;}
</style>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/validation.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<script>
$(document).ready(function(){
$(function(){
// $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' } });
$("#datepicker").datepicker({ dateFormat: "mm/dd/yy", minDate: 0}).val()
//var dateTypeVar = $('#datepicker').datepicker('getDate');
//$.datepicker.formatDate('mm/dd/yy', dateTypeVar);
});
});
</script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript">
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('pickaddress'));
    new google.maps.places.SearchBox(document.getElementById('dropaddress'));
});
</script>
</head>

<body>
<div class="container-fluid">
<div class="row row_pad">
<div class="col-sm-12" align="left">
<table style="width:100%">
<tr>
<td align="left">
	<img src="images/limos.png" width="60" height="47" alt="" hspace="5"/>
	<img src="images/taxis.png" width="60" height="47" alt="" hspace="5"/>
</td>
<td align="right">
	<input type="button" name="button" id="button" value="Sign in"/>
</td>
</tr>
</table>
</div>
</div>
<div class="container-in">
<div class="row row_pad">
<div class="col-sm-12">
<p class="bol" align="center">
<b style="font-size:20px;">SERVICE PROVIDED BY LEGITIMATE COMPANIES</b><br>
<span class="service">Service You Can Count On.
Reliable On Time Service.
Honest & Helpful Drivers.</span>
<br/>BOOK WORRY FREE!
</p>
</div>
</div>

<form method="post" action="select.php" id="formID" name="formID">
<div class="row row_pad">
<div class="col-sm-12">
<div class="left_part">
    <input type="text" class="opt cal validate[required] text-input" placeholder="What Date you want to go ?" style="cursor:pointer;"id="datepicker" name="pickdate"/>
</div>
<div class="right_part">
    <select class="opt validate[required] text-input" style="width:50%;" name="pickhour">
        <option value='0'>12 AM (Midnight)</option>
        <option value='1'>1 AM</option>
        <option value='2'>2 AM</option>
        <option value='3'>3 AM</option>
        <option value='4'>4 AM</option>
        <option value='5'>5 AM</option>
        <option value='6'>6 AM</option>
        <option value='7'>7 AM</option>
        <option value='8'>8 AM</option>
        <option value='9'>9 AM</option>
        <option value='10'>10 AM</option>
        <option value='11'>11 AM</option>
        <option value='12'>12 PM (Noon)</option>
        <option value='13'>1 PM</option>
        <option value='14'>2 PM</option>
        <option value='15'>3 PM</option>
        <option value='16'>4 PM</option>
        <option value='17'>5 PM</option>
        <option value='18'>6 PM</option>
        <option value='19'>7 PM</option>
        <option value='20'>8 PM</option>
        <option value='21'>9 PM</option>
        <option value='22'>10 PM</option>
        <option value='23'>11 PM</option>
    </select>
    <select class="opt validate[required] text-input" style="width:50%; float:right" name="pickminute">
        <option>:00</option>
        <option>:10</option>
        <option>:20</option>
        <option>:30</option>
        <option>:40</option>
        <option>:50</option>
    </select>
</div>
</div>
</div>

<span id="pointopoint">
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="Pick up: Address, City or ZIP" class="txt" name="pickaddress" id="pickaddress" /></div>
    </div>
    </div>
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" class="txt" placeholder="Drop off: Address, City or ZIP" name="dropaddress" id="dropaddress"/></div>
    </div>
    </div>
</span>
<div class="row row_pad">
<div class="col-sm-12">
<div class="left_part" >&nbsp;</div>
<div class="right_part" style="width:50%; float:right; vertical-align:top; text-align:left;">
<input style="text-decoration:none; color:#000;" class="btn_sign2" type="submit" value="Find!" name="findtaxi"></a>
</div>
</div>
</div>
</div>
</div>
</form>
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
