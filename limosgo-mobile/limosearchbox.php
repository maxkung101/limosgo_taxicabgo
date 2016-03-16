<?php  
	include("admin/include/log.php");
	//include("user/include/coding.php");
	include("include/coding.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Limo Mobile Search</title>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" lang="" />
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
<script src="<?php echo SITE_PATH; ?>js/jquery-1.7.2.min.js"></script>
<script src="<?php echo SITE_PATH; ?>js/jquery-ui.js"></script>
<script src="<?php echo SITE_PATH; ?>js/validation.js"></script>
<link rel="stylesheet" href="<?php echo SITE_PATH; ?>css/jquery-ui.css">
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
    new google.maps.places.SearchBox(document.getElementById('toairportpick'));
    new google.maps.places.SearchBox(document.getElementById('toairportdrop'));
    new google.maps.places.SearchBox(document.getElementById('fromairportpick'));
    new google.maps.places.SearchBox(document.getElementById('fromairportdrop'));
    new google.maps.places.SearchBox(document.getElementById('ptoppick'));
    new google.maps.places.SearchBox(document.getElementById('ptopdrop'));
    new google.maps.places.SearchBox(document.getElementById('justhourly'));
});
</script>
</head>

<body>
<div class="container-fluid">
<div class="row row_pad">
<div class="col-sm-12" align="center">
<img src="images/limos.png" alt="">
</div>
</div>
<div class="container-in">
<div class="row row_pad">
<div class="col-sm-12">
<p class="bol" align="center">
<b style="font-size:20px;">SERVICE PROVIDED BY LEGITIMATE PARTNERS</b><br>
<span class="service">Service You Can Count On.
Reliable On Time Service.
Honest & Helpful Drivers.</span>
<br/>BOOK WORRY FREE!
</p>
</div>
</div>
<div class="row row_pad">
<div class="col-sm-12">
<div class="left_part">
	<select id="wheretogoselect" name="wheretogoselect" onChange="WhereToGoSelect('wheretogoselect','wheretogo','airport','fromairport','pointopoint');" class="opt validate[required] text-input">
		<option value="">Where You Want To Go ?</option>
		<option value="To Airport">To Airport</option>
		<option value="From Airport">From Airport</option>
		<option value="Point-to-Point">Point To Point (one-way)</option>
</select>
</div>
<div class="right_part" >
<input type="text" class="opt cal validate[required] text-input" placeholder="What date you want go ?" style="cursor:pointer;"id="datepicker" name="datepicker"/>
</div>
</div>
</div>
<div class="row row_pad">
<div class="col-sm-12">
<div class="left_part" >
	<select id="noofpassenger" name="noofpassenger" class="opt validate[required] text-input">
		<option value="">No. of Passenger</option>
		<?php 
			for($i=1; $i<=6; $i++)
			{
			?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php } ?>

	</select>
</div>
<div class="right_part" style="width:50%; float:right; vertical-align:top; text-align:left;">
            <select id="noofluggage" name="noofluggage"  class="opt validate[required] text-input">
            	<option value="">No. of Lugg</option>
                <?php 
				for($i=1; $i<=9; $i++)
				{
				?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
</div>
</div>
</div>
<div class="row row_pad">
<div class="col-sm-12">
<div class="left_part" >
<select class="opt validate[required] text-input" name="picktime">
           
            <option value="">Pick Up Time</option>
            <option>12 AM (Midnight)</option>
             <option>1 AM</option>
             <option>2 AM</option>
             <option>3 AM</option>
             <option>4 AM</option>
             <option>5 AM</option>
             <option>6 AM</option>
             <option>7 AM</option>
             <option>8 AM</option>
             <option>9 AM</option>
             <option>10 AM</option>
             <option>11 AM</option>
             <option>12 PM (NOON)</option>
             <option>1 PM</option>
             <option>2 PM</option>
             <option>3 PM</option>
             <option>4 PM</option>
             <option>5 PM</option>
             <option>6 PM</option>
             <option>7 PM</option>
             <option>8 PM</option>
             <option>9 PM</option>
             <option>10 PM</option>
             <option>11 PM</option>
            </select>
            </div>
<div class="right_part" style="width:50%; float:right; vertical-align:top; text-align:left;">
            <select class="opt" name="picktime2">
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
<span id="wheretogo">
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="Pick Up address" class="txt" name="wheretogopick" /></div>
    </div>
    </div>
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" class="txt" placeholder="Drop Off address"  name="wheretogodrop"  /></div>
    </div>
    </div>
</span>
<span id="airport" style="display:none; margin-left:0px;">
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="PickUp: Address, City or ZIP" name="toairportpick" id="toairportpick" class="txt validate[required] text-input" autocomplete="off"/></div>
    </div>
    </div>
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="Drop-Off, Airport Name, Code or City" name="toairportdrop" id="toairportdrop" class="txt validate[required] text-input" autocomplete="off" /></div>
    </div>
    </div>
</span>
<span id="fromairport" style="display:none; margin-left:0px;">
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="Pickup: Airport Name, Code or City" name="fromairportpick" id="fromairportpick" class="txt validate[required] text-input" /></div>
    </div>
    </div>
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="DropOff: Address, City or ZIP" name="fromairportdrop" id="fromairportdrop" class="txt validate[required] text-input" /></div>
    </div>
    </div>
</span>
<span id="pointopoint" style="display:none; margin-left:0px;">
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" placeholder="Pickup: Address, City or ZIP" class="txt" name="ptoppick" id="ptoppick" /></div>
    </div>
    </div>
    <div class="row row_pad">
    <div class="col-sm-12">
    <div class="left_part" style="width:100%; float:left; vertical-align:top;"><input type="text" class="txt" placeholder="DropOff: Address, City or ZIP" name="ptopdrop" id="ptopdrop"/></div>
    </div>
    </div>
</span>
<div class="row row_pad">
<div class="col-sm-12">
<div class="left_part" >&nbsp;</div>
<div class="right_part" style="width:50%; float:right; vertical-align:top; text-align:left;">
<a href="limosearchresult.php" style="text-decoration:none; color:#000;"><input class="btn_sign2" type="button" value="Find"></a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
