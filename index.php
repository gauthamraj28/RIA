<html>
<head>
  <title>RIA Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src = "script.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  <style>
  .switch {
  position: relative;
  display: inline-block;
  width: 30px;
  height: 10px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 10px;
  width: 16px;
  left: 1px;
  bottom: 1px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(12px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 4px;
}

.slider.round:before {
  border-radius: 50%;
}
  
  html {
    font-size: 20px;
}
.unbehaved-element {
    font-size: 2em;
}
@media(max-width: 1580px) {
  html {
    font-size: 18px;
  }
  .unbehaved-element {
    font-size: 1.9em; /* Fine tune unbehaved elements */
  }
}
@media(max-width: 980px) {
  html {
    font-size: 16px;
  }
}
  li{
	  position:relative;
	  float:left;
	  list-style: none;
	  margin-left:20px;
	  font-size:140%;
  }
  input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}



.container-fluid{
-webkit-box-shadow: 10px 16px 10px 38px rgba(193,227,235,0.84);
-moz-box-shadow: 10px 16px 10px 38px rgba(193,227,235,0.84);
box-shadow: 10px 16px 10px 38px rgba(193,227,235,0.84);
min-height:100%;
min-width:80%;
max-width:80%;

}
.sel li {
	float:left;
	width:20%;
	height:10px;
	margin-left:10px;
}
.pan{
	width:100%;
	height:370px;
	min-height:370px;
	
	
}

  .links{
	  position:absolute;
	  right:13%;
	  
	  
  }
  <!--Float the list items -->
  .head li  {
	  float:left;
	  
  }
 <!-- Main Heading-->
  .text1{
	font-size:200%;
	color:blue;
	
}
<!--Sub Heading-->
.text2{
	font-size:100%;
	color:red;
	
}
<!--Sub Heading 2-->
.text3{
	font-size:90%;
	color:red;
	
	
}
.head2 li{
	
	float: left;
	width: 20em;  /* accommodate the widest item */
}
.head3 li{
	float: left;
	width: 20em;  /* accommodate the widest item */
}
.head2{
	width: 100%;
	height: 50%;
	max-width: 100%;
	max-height: 50%;
	
}
.head3{
	width:100%;
	height:20%;
	max-width:100%;
	max-height:20%;
	
}
div.wrapper{
	margin-bottom: 1em;
}
.chk li
{
   display:inline-block;
   margin:6px;
   width:3%;
}
  </style>
  
</head>
<body>

<div class=" navbar ">

    
   <!-- Second navbar for profile settings -->
    <nav class="navbar navbar-inverse" style="color:#F9FBE7;margin-top:20px;background-color:#BBDEFB">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">RIA DATA</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-4">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Contact</a></li>
            <li>
              <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse4" aria-expanded="false" aria-controls="nav-collapse4">Profile <i class=""></i> </a>
            </li>
          </ul>
          <ul class="collapse nav navbar-nav nav-collapse slide-down" role="search" id="nav-collapse4">
            <li><a href="#">Support</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img class="img-circle" src="images/sam.png" alt="maridlcrmn" width="20" /> Maridlcrmn <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">My profile</a></li>
                <li><a href="#">Favorited</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->


<!--Sample Mega Search Code...-->
<div class="container-fluid" style="background-color:#81D4FA;">
	 <span class="text1">Mega Search:</span>
	 <hr>
	
	  <?php
	  require("config.php");
		$states=array("AK","AL","AR","AZ","CA","CO","CT","DC","DE","FL","GA","GU","HI","IA","ID","IL","IN","KS","KY","LA","MA","MD","ME","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX","UT","VA","VT","WA","WI","WV","WY","VI");
		?>
		
	 		<ul>
			 <div class="row">
							<li><span class="text2">Search:</span></li>
							<li><input for="search" class="form-control" id="any" type="text" placeholder="Any Keyword"/></li>
							<!--SATTES SELECT--><br>
							<li><?php
							echo "<div class=\"form-group\">";
							echo "<select   class=\"form-control\"  id=\"select1\">";
							echo "<option selected value=\"\">-State-</option>";
								foreach ($states as $x)
								echo "<option value=$x>".$x."</option>";
							echo "</select>";
							echo "</div>";
							?></li>
							
							<li><label class="btn btn-primary"><input type="radio" id="mega_search" name="mega_search" value="firm"/> Firm</label></li>
							<li><label class="btn btn-primary"><input type="radio" id="mega_search" name="mega_search" value="crd" />  Crd</label></li>
							<li><label class="btn btn-primary"><input type="radio" id="mega_search" name="mega_search" value="contact" />  Contact</label></li>
							<li><label class="btn btn-primary"><input type="radio" id="mega_search" name="mega_search" value="broucher" />  Broucher</label></li>
							<li><input type="submit" value="GO..!!" id="search" class="btn btn-success" /></li>
				</div>
			</ul>
		
		
		
								
								
								<!--SAmple Searched results -->
							 <div  style = "width: 200px; height: 100px; resize: none;">
							 
							 <p id = "response">
							 
							 </p>
							 
							 </div>						


	
		<!--DYnamic Tabs In Bootstrap-->
		
			
			<span class="text2">Detailed Search:</span>
						  <ul class="nav nav-tabs">
						 
							
						  	<li><a data-toggle="tab" id="crd" href="#crd_tag" >Search By FirmCrd</a></li>
							<li ><a data-toggle="tab" id="state" href="#state_tag"  >Search By State</a></li>
							<li><a data-toggle="tab" id="postal" href="#postal_tag"  >Search By Postal Code</a></li>
							<li><a data-toggle="tab" id="city" href="#city_tag" >Search By City</a></li>
						  </ul>
				<div class="tab-content" style="width:80%;height:20%;clear:bottom;">
							<div  id="crd_tag" class="tab-pane fade in active ">
							  <h3>FirmCrd  Search</h3>
							  <p id="crd_response">crd</p>
							</div>
							
			<!--State-->	<div  id="state_tag" class="tab-pane fade in ">
					
								<ul>
									<li><input type="checkbox" id="selectAll" class="selectAll" /> Select All</li>
									<li><input class="btn btn-primary btn-success" type="button" name="show"  " value="GO" /></li>
								</ul><br><br>
							   <ul class="chk" style="margin-top:5px;">
												 <?php
												 foreach ($states as $x)
												 {					
												 echo "<li>".$x."<label class=\"switch\"><input type=\"checkbox\" style=\"float:inherit;\" value=".$x." class=\"codes\" name=\"codes\"/><span class=\"slider round\"></span></label></li>";
												 //echo "";
												 }
												 ?>
								</ul>
							</div>
							
							<div id="postal_tag" class="tab-pane fade ">
							  <h3>Postal id Search</h3>
							  <p id="postal_response">postal</p>
							</div>
							<div id="city_tag" class="tab-pane fade">
							  <h3>City Search</h3>
							  <p id="city_response">city</p>
							</div>
				</div>
		<br><br><br>
<hr>

<!--Assets Under Management-->
	<div class="panel-heading " style="clear:top" >
		<table>
			<tbody>
				<tr ><td colspan="3"><span class="text2">Assets Under Management</span></td></tr>
				
							<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">$0</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
									<select id="zero" class="form-control "  >
									<option value="500">greater than $500 billion</option>
									</select>
								</td>
							</tr>
		
			
<!--TOtal Accounts-->
		
				<tr ><td colspan="3" style="align:center"><span class="text2">Total Accounts</span></td></tr>
				
							<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">0</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
									<select id="zero" class="form-control "  >
									<option value="500">Greater than 100</option>
									</select>
								</td>
							</tr>
		
<!--Discretionary assets under management-->
	
				<tr ><td colspan="3" style="align:center"><span class="text2">Discretionary Assets Under Management</span></td></tr>
				
							<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">$0</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
									<select id="zero" class="form-control "  >
									<option value="500">greater than $500</option>
									</select>
								</td>
							</tr>
			
	<!--Discretionary Accounts-->
	<tr ><td colspan="3" style="align:center"><span class="text2">Discretionary Accounts</span></td></tr>
						<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">0</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
								<select id="zero" class="form-control "  >
								<option value="500">greater than 1000</option>
								</select>
								
								</td>
						</tr>
<!--Average  Accounts Size-->
	<tr ><td colspan="3" style="align:center"><span class="text2">Average  Accounts Size</span></td></tr>
						<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">$0</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
								<select id="zero" class="form-control "  >
								<option value="500">greater than $5 million</option>
								</select>
								
								</td>
						</tr>
<!--Total Clients-->
	<tr ><td colspan="3" style="align:center"><span class="text2">Total Clients</span></td></tr>
						<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">Include All</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
								<select id="zero" class="form-control "  >
								<option value="500">greater than 500</option>
								</select>
								
								</td>
						</tr>
<!--Finalcial Planning Assets-->
	<tr ><td colspan="3" style="align:center"><span class="text2">Finalcial Planning Assets</span></td></tr>
						<tr>
								<td>
									<select id="zero" class="form-control ">
									<option value="0">$0</option>
									</select>
								</td>
								<td>
									<label>to</label>
								</td>
								<td>
								<select id="zero" class="form-control "  >
								<option value="500">greater than $500 billion</option>
								</select>
								
								</td>
						</tr>
					</tbody>
			</table>
</div>
<hr>
<!--Bussiness Type-->
	<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
	<div class="links"><a href="#">Show More Options</a></div>
	 <div  class="wrapper">
		<ul class="list-group head" >
			<li><span class="text3">Bussiness Type and product Offering</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
		</ul>
	</div>
	
			<br>
	 <div  class="wrapper">
		<ul class="list-group head2" >
			<li><label class="btn btn-primary"><input type="checkbox">Free-Only</label></li>
			<li><label class="btn"><input type="checkbox">Family office or multi-family office</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Wealth manager</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Asset manager</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using socially responsible investments</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using DFA</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using retirement products</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using insurance products</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">ETF Strategist</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Runs fund of funds</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Private fund invests in 40 Act funds</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using exchange traded funds (ETFs)</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using alternatives</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using real estate</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using publicly traded (TEITs)</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Turnkey asset manager (TAMP)</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using mutual funds</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using seperately managed accounts</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Using Structured Notes</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Runs Private Funds</label></li>
			<li><label class="btn btn-primary"><input type="checkbox">Runs Private Funds</label></li>			
		</ul>
	</div>
	</div>
	<hr>
<!--Investment Intrest-->
	<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3">Investment Intrest</span></li><li><label class="btn btn-primary"><input type="checkbox">Select All</label></li><li><label class="btn btn-primary"><input type="checkbox">Match All</label></li><li><label class="btn btn-primary"><input type="checkbox">Match Any</label></li><li><label class="btn btn-primary"><input type="checkbox">Match None</label></li>
			</ul>
		</div>
		
				<br>
		 <div  class="wrapper">
			<ul class="list-group head2" >
				<li><label class="btn btn-primary"><input type="checkbox">MLPs/Energy</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Alternative Investment</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Income Solutions</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Fixed Income</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">International Fixed Income</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Active Indexing</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Closed End Funds</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">ETFs</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">ESG</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">REITs</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Smart Beta</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Emerging Markets</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">International Markets</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Alternative Beta Strategies</label></label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Large Cap Value</label></label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Small Cap Value</label></label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Small Cap Growth</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">hedge Funds</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Private Equity</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Real Assets</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Commodities</label></li>
			</ul>
		</div>
	</div>	
		<hr>
		
<!-- Top Advisor Rankings-->
	<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group" >
				<li><span class="text3"> Top Advisor Rankings</span></li><li><label class="btn btn-primary"><input type="checkbox">Select All</label></li><li><label class="btn btn-primary"><input type="checkbox">Match All</label></li><li><label class="btn btn-primary"><input type="checkbox">Match Any</label></li><li><label class="btn btn-primary"><input type="checkbox">Match None</label></li>
			</ul>
		</div>
		
				<br>
		 <div  class="wrapper">
			<ul class="list-group head3" >
				<li><label class="btn btn-primary"><input type="checkbox">Top Fee-Only Advisors by Assets</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Top-regional Advisors</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Top Fee-Only by Growth in Assets</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Top Emerging Advisors</label></li>
				<li><label class="btn btn-primary"><input type="checkbox">Top Financial Planners</label></li>
				
			</ul>
		</div>
	</div>	
	<hr>
<!--ETF Data-->
	<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3"> ETF Data</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div><br>
		<div style="position:relative;margin-left:2%;margin-top:2%;"><input type="checkbox">Equities</div>
		<br>
			<div  class="wrapper">
			 <ul class="list-group" style="float:left;height:20%;width:100%;">
				<li><input type="textbox" id="etf"></li>
					<li>as of</li>
					<li>
					<select multiple id="etf_select">
						<option value="03/31/2015">03/31/2015</option>
						<option value="06/30/2015">06/30/2015</option>
						<option value="09/30/2015">09/30/2015</option>
					</select>
					</li>
					<li><input type="checkbox">Select All Quarters
					</li>
			</ul>
			</div>
	</div>
	<br>
<hr>
<!--Equity Data-->
<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3"> Equity Data</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div>
		<br><br>
		<div style="position:relative;margin-left:2%;margin-top:2%;"><input type="checkbox">Equities</div>
		<br>
			<div  class="wrapper">
			 <ul class="list-group" style="float:left;height:20%;width:100%;">
				<li><input type="textbox" id="etf"></li>
					<li>as of</li>
					<li>
					<select multiple id="etf_select">
						<option value="03/31/2015">03/31/2015</option>
						<option value="06/30/2015">06/30/2015</option>
						<option value="09/30/2015">09/30/2015</option>
					</select>
					</li>
					<li><input type="checkbox">Select All Quarters
					</li>
			</ul>
			</div>
	</div>
	<br>




<hr>	
<!--Client Type-->	
	<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3">Client Type</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div>
		
				<br>
		 <div  class="wrapper">
			<ul class="list-group head2" >
				<li><input type="checkbox">High net worth individuals</li>
				<li><input type="checkbox">Pooled Investment Vehicles</li>
				<li><input type="checkbox">Banking or thrift Institutions</li>
				<li><input type="checkbox">Pension and profit sharing plans </li>
				<li><input type="checkbox">Investment companies</li>
				<li><input type="checkbox">Charitable organizations</li>
				<li><input type="checkbox">Business development companies</li>
				<li><input type="checkbox">Corporations</li>
				<li><input type="checkbox">Individuals (other than HNW)</li>
				<li><input type="checkbox">State or municipal entities</li>
				<li><input type="checkbox">Other Investment advisers</li>
				
			</ul>
		</div>
	</div>	
<!--Compensation-->			
		<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3">Compensation</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div>
		
				<br>
		 <div  class="wrapper">
			<ul class="list-group head2" >
				<li><input type="checkbox">A percentage of assets under management</li>
				<li><input type="checkbox">Fixed fees</li>
				<li><input type="checkbox">Hourly charges</li>
				<li><input type="checkbox">Commissions</li>
				<li><input type="checkbox">Subscription fees</li>
				<li><input type="checkbox">performance based fees</li>
			</ul>
		</div>
	</div>		
<!--Advisory Services-->	
<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3">Advisory Services</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div>
		
				<br>
		 <div  class="wrapper">
			<ul class="list-group head2" >
				<li><input type="checkbox">Financial planning</li>
				<li><input type="checkbox">Portfolio management of Institutions</li>
				<li><input type="checkbox">Portfolio management of Investment companies</li>
				<li><input type="checkbox">Pension consulting services</li>
				<li><input type="checkbox">Portfolio management for Individuals</li>
				<li><input type="checkbox">Educational seminars/workshops</li>
				<li><input type="checkbox">Selection of other Advisors</li>
				<li><input type="checkbox">Security rating and pricing services</li>
				<li><input type="checkbox">Publication of newsletters</li>
				<li><input type="checkbox">Market timing services </li>
				<li><input type="checkbox">Portfolio management for pooled Investment vehicles </li>
				
			</ul>
		</div>
	</div>		
<hr>
<!--Other Business-->
<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group head" >
				<li><span class="text3">Other Business</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div>
		
				<br>
		 <div  class="wrapper">
			<ul class="list-group head2" >
				<li><input type="checkbox">Broker/dealer</li>
				<li><input type="checkbox">Real Estate Broker</li>
				<li><input type="checkbox">Insurance broker and agent</li>
				<li><input type="checkbox">Futures Advisors</li>
				<li><input type="checkbox">Commodity Trading Advisor</li>
				<li><input type="checkbox">Registered representative</li>
				<li><input type="checkbox">Bank</li>
				<li><input type="checkbox">Trusted Company</li>
				<li><input type="checkbox">Municipal advisor</li>
				<li><input type="checkbox">Swap dealer</li>
				<li><input type="checkbox">Swap participant</li>
				<li><input type="checkbox">Accountant</li>
				<li><input type="checkbox">Lawyer</li>
				<li><input type="checkbox">Financial Product Sales</li>
							
			</ul>
		</div>
	</div>		
<hr>
<br>
<!--Affiliations-->
<div class="panel-heading" style="margin-left:20px;margin-right:20px;">
		<div class="links"><a href="#">Show More Options</a></div>
		 <div  class="wrapper">
			<ul class="list-group head">
				<li><span class="text3">Affiliations</span></li><li><input type="checkbox">Select All</li><li><input type="checkbox">Match All</li><li><input type="checkbox">Match Any</li><li><input type="checkbox">Match None</li>
			</ul>
		</div>
		<br>
		 <div  class="wrapper">
			<ul class="list-group head2">
				<li><input type="checkbox">Broker/dealer</li>
				<li><input type="checkbox">Bank</li>
				<li><input type="checkbox">Swap participant</li>
				<li><input type="checkbox">Accounting firm</li>
				<li><input type="checkbox">Security swap dealer</li>
				<li><input type="checkbox">Other Investment advisor</li>
				<li><input type="checkbox">Trust company</li>
				<li><input type="checkbox">Mutual fund</li>
				<li><input type="checkbox">Futures merchant</li>
				<li><input type="checkbox">Municipal advisor</li>
				<li><input type="checkbox">Commodity trading advisor</li>
				<li><input type="checkbox">Law firm</li>
				<li><input type="checkbox">Insurance company</li>
				<li><input type="checkbox">Pension consultant</li>
				<li><input type="checkbox">Real estate broker</li>
				<li><input type="checkbox">Sponsor of LPs</li>
				<li><input type="checkbox">Sponsor of pooled  vehicles</li>

			</ul>
		</div>
</div>		




	
			
</div><!--END oF MAIN CONTAINER-->
</body>
</html>