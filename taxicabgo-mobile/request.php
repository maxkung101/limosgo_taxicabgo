<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Taxi Cab GO</title>
<link rel="stylesheet" href="themes/taxicabgo.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
function ShowButton(id1,id2)
{
	if(document.getElementById(id1).checked)
		document.getElementById(id2).style.display = "block"; 
	else
		document.getElementById(id2).style.display = "none"; 
}
</script>
</head>
<body>

<div data-role="page" id="pageone">
	<div data-role="header">
		<a href="#" class="ui-btn ui-icon-home ui-btn-icon-left">Home</a>
		<h1><img src="images/m6.png" width="100" height="78" alt=""/><em>Taxicab Go</em></h1>
	</div>

<div data-role="main" class="ui-content"><form action="" method="get" onsubmit="">
	<h2>Continue Booking</h2>
	<p>Your Ride: Friday, 11/10/2015 at 9 :00 AM</p>
	<div>
		<div data-role="header">1. Primary Passenger Information</div>
		<p><strong>Primary Passenger</strong></p>
		<legend>Full Name<span class="red">*</span></legend>
		<input type="text" name="fname" value="" placeholder="First Name" required />
		<input type="text" name="lname" value="" placeholder="Last Name" required />
		<legend>Email Address<span class="red">*</span></legend>
		<div>
			<input type="text" value="" name="newemail" id="newemail" required />
		</div>
		<legend>Mobile Number<span class="red">*</span></legend>
		<div>
			<input type="text" name="mobile" maxlength="12" required />
			<br/>
			<input type="checkbox" name="favbox1" id="c1" value="c1"/><label for="c1">Send a text message with my driver's information to this number at time of pickup.</label>
		</div>
		<div>
			Alternate Number
			<input type="text" name="mobile" maxlength="12"/>
		</div>
	</div>
	<div>
		<div data-role="header">2. Request Details</div>
		<p><strong>Pick Up Address</strong></p>
		<legend>Location<span class="red">*</span></legend>
		<div>
			<input type="text" placeholder="Hotel, Restaurants, Business etc" name="picklocation" required />
		</div>
		<legend>Address<span class="red">*</span></legend>
		<div>
			<input type="text" placeholder="Address" name="pickaddress" value="2 Willowbrook Dr" required />
		</div>
		<legend>City<span class="red">*</span></legend>
		<div>
			<input type="text" name="pickcity" value=" North Brunswick Township" required />
		</div>
		<legend>State<span class="red">*</span></legend>
		<div>
			<input type="text" name="pickstate" value=" NJ" required />
		</div>
		<legend>ZIP/Postal<span class="red">*</span></legend>
		<div>
			<input type="text" readonly name="pickzip" maxlength="6" value="08902" required />
		</div>
		<hr/>
		<p><strong>Drop Off Address</strong></p>
		<legend>Location<span class="red">*</span></legend>
		<div>
			<input type="text" placeholder="Hotel, Restaurants, Business etc" name="droplocation" required />
		</div>
		<legend>Address<span class="red">*</span></legend>
		<div>
			<input type="text" placeholder="Address" name="dropaddress" value="BrewsterRoad" required />
		</div>
		<legend>City<span class="red">*</span></legend>
		<div>
			<input type="text" name="dropcity" value="Newark" required />
		</div>
		<legend>State<span class="red">*</span></legend>
		<div>
			<input type="text" name="dropstate" value="NJ" required />
		</div>
		<legend>ZIP/Postal<span class="red">*</span></legend>
		<div>
			<input type="text" name="dropzip" maxlength="6" value="07114" required />
		</div>
		<hr/>
		<p><strong>Service Options</strong></p>
		<legend>Extra Stops</legend>
		<select name="extrastops" id="extrastops" width="80%">
			<option value="">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>@ $15
		<legend>Special requests or additional trip information</legend>
		<div>
			<textarea rows="15" name="additionaltrip"></textarea>
		</div>
		<legend>Gratuity</legend>
		<div class="ui-grid-b" style="color:#C41911; font-size:16px;">
			<div class="ui-block-a">
				<input type="radio" name="gratuity" id="10" value="10" checked onChange="showUser(extrastops.value +','+ gratuity.value +','+ ratepromo.value +','+ promocode.value +','+ tax.value, 'rateaftrpromo', 'ShowGratuity');" /><label for="10">10%</label>
			</div>
			<div class="ui-block-b">
				<input type="radio" name="gratuity" id="15" value="15" onChange="showUser(extrastops.value +','+ gratuity.value +','+ ratepromo.value +','+ promocode.value +','+ tax.value, 'rateaftrpromo', 'ShowGratuity');"/><label for="15">15%</label>
			</div>
			<div class="ui-block-c">
				<input type="radio" name="gratuity" id="20" value="20" onChange="showUser(extrastops.value +','+ gratuity.value +','+ ratepromo.value +','+ promocode.value +','+ tax.value, 'rateaftrpromo', 'ShowGratuity');"/><label for="20">20%</label>
			</div>
		</div>
	</div>
	<div>
		<div data-role="header">3. Payment</div>
		<p><strong>Payment Card</strong></p>
		<legend>Card Number<span class="red">*</span></legend>
		<div class="row">
			<input type="text" maxlength="16" name="" required />
			<select name="" id="" onchange="">
				<option value="">Select card type</option>
				<option value="visa">Visa</option>
				<option value="mastercard">Master card</option>
				<option value="discover">Discover</option>
				<option value="americanexpress">American Express</option>
			</select>
		</div>
		<legend>Security Code<span class="red">*</span></legend>
		<div>
			<input type="text" placeholder="" name="" required />
		</div>
		<legend>Exp. Date</legend>
		<div class="ui-grid-a">
			<div class="ui-block-a" align="center">
				<select name="" id="" onchange="">
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
			</div>
			<div class="ui-block-b" align="center">
				<select name="" id="" onchange="">
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="2023">2023</option>
					<option value="2024">2024</option>
					<option value="2025">2025</option>
					<option value="2026">2026</option>
				</select>
			</div>
		</div>
		<legend>Cardholder Name<span class="red">*</span></legend>
		<div>
			<input type="text" name="" value="" placeholder="First Name" required />
			<input type="text" name="" value="" placeholder="Last Name" required />
		</div>
		<legend>ZIP/Postal Code<span class="red">*</span></legend>
		<div>
			<input type="text" placeholder="" name="" required />
		</div>
	</div>
	<div>
		<div data-role="header">4. Offers and promotions</div>
		<hr/>
		<p><strong>Promotion Code</strong></p>
		<legend>Enter Code</legend>
		<div>
			<input type="text" name="code" value=""/>
			<input type="button" name="button" id="button" value="Apply"/>
		</div>
		<hr/>
		<div>
			<input type="checkbox" name="term" id="termss" value="c3" onClick="ShowButton('termss','submitbuttons');"/><label for="termss">&nbsp;&nbsp;I agree to the <a href="http://taxicabgo.com/useragreement.php" target="_blank" style="color:#000;">TERMS OF SERVICE</a> and BOOKING CONDITIONS.<br/>&nbsp;&nbsp;I acknowledge that tolls and estimated time will be adjusted in final Invoice.</label>
		</div>
	</div>
	<span id="submitbuttons" style="display:none"><div align="center">
		<div data-role="header">Selected Vehicle</div>
		<p>Lincoln Town Car</p>
		<img src="images/limo.jpg" width="100%" style="height:auto; max-width:142px; max-height:70px" alt=""/>
		3<img src="images/icon2.png" width="30" height="28" alt=""/> 3<img src="images/icon1.png" width="30" height="28" alt=""/>
	</div>
	<div>
		<div data-role="header">Payment Options</div>
		<p>
			Amount: $121.00 (Tolls & tip not included)
		</p>
		<legend>Credit Card</legend>
		<div>
			<input type="button" name="button" id="button" value="Add Credit Card"/>
		</div><br/>
		<legend>Horray! Car Cash is available for you</legend>
		<div>
			<input type="checkbox" name="favbox4" id="c4" value="c4"/><label for="c4">Use the Car Cash I have and charge the balance to my credit card</label>
		</div><br/>
		<legend>Pay in the Car</legend>
		<div>
			<input type="button" name="button" id="button" value="I'll pay by cash or credit card in the car"/>
		</div><br/>
		<legend>Corporate Account</legend>
		<div class="ui-grid-a">
			<div class="ui-block-a" align="left"><input type="text" name="code" placeholder="Account Number" value=""/></div>
			<div class="ui-block-b" align="left"><input type="text" name="code" placeholder="Password" value=""/></div>
		</div>
	</div>
	<input type="submit" value="Find My Ride" class="button" name="bookflightlimo"></span>
</form></div>

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