<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script src = "script.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
	.checkbox {
  padding-left: 20px; }
  .checkbox label {
    display: inline-block;
    position: relative;
    padding-left: 5px; }
    .checkbox label::before {
      content: "";
      display: inline-block;
      position: absolute;
      width: 17px;
      height: 17px;
      left: 0;
      margin-left: -20px;
      border: 1px solid #cccccc;
      border-radius: 3px;
      background-color: #fff;
      -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
      -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
      transition: border 0.15s ease-in-out, color 0.15s ease-in-out; }
	  .checkbox label::after {
      display: inline-block;
      position: absolute;
      width: 16px;
      height: 16px;
      left: 0;
      top: 0;
      margin-left: -20px;
      padding-left: 3px;
      padding-top: 1px;
      font-size: 11px;
      color: #555555; }
  .checkbox input[type="checkbox"] {
    opacity: 0; }
    .checkbox input[type="checkbox"]:focus + label::before {
      outline: thin dotted;
      outline: 5px auto -webkit-focus-ring-color;
      outline-offset: -2px; }
    .checkbox input[type="checkbox"]:checked + label::after {
      font-family: 'FontAwesome';
      content: "\f00c"; }
    .checkbox input[type="checkbox"]:disabled + label {
      opacity: 0.65; }
      .checkbox input[type="checkbox"]:disabled + label::before {
        background-color: #eeeeee;
        cursor: not-allowed; }
  .checkbox.checkbox-circle label::before {
    border-radius: 50%; }
	 .checkbox.checkbox-inline {
    margin-top: 0; }
	.checkbox-info input[type="checkbox"]:checked + label::before {
  background-color: #5bc0de;
  border-color: #5bc0de; }
.checkbox-info input[type="checkbox"]:checked + label::after {
  color: #fff; }
  
  #navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}
.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

.sticky + .content {
  padding-top: 60px;
}

<!--SIde Bar Styless-->
#wrapper {
  padding-left: 250px;
  transition: all 0.4s ease 0s;
}

#sidebar-wrapper {
  margin-left: -250px;
  top: 51px;
  left: 250px;
  width: 250px;
  background: #000;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
  transition: all 0.4s ease 0s;
}

#wrapper.active {
  padding-left: 0;
}

#wrapper.active #sidebar-wrapper {
  left: 0;
}

#page-content-wrapper {
  width: 100%;
  padding-top: 70px;
  transition: all 0.4s ease 0s;
}

.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: #999999;
  display: block;
  text-decoration: none;
  padding-left: 60px;
}

.sidebar-nav li a span:before {
  position: absolute;
  left: 0;
  color: #41484c;
  text-align: center;
  width: 20px;
  line-height: 18px;
}

.sidebar-nav li a:hover,
.sidebar-nav li.active {
  color: #fff;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}

#menu-toggle {
    text-decoration: none;
    float: left;
    color: #fff;
    padding-right: 15px;
}

@media (max-width:767px) {

#wrapper {
  padding-left: 0;
}

#sidebar-wrapper {
  left: 0;
}

#wrapper.active {
  position: relative;
  left: 250px;
}

#wrapper.active #sidebar-wrapper {
  left: 250px;
  width: 250px;
  transition: all 0.4s ease 0s;
}

#menu-toggle {
  display: inline-block;
}


	
	
	.one li {
		display:inline;
		float:left;
		margin-left:5px;
	}
	.two li{
		display:inline;
		float:left;
		margin-left:5px;
		margin-top:5px;
	
	}
	
	.*{
		
		font-color:#9f8866;
	}
	.killmega{
		-webkit-box-shadow: inset -1px -1px 15px 11px rgba(159,136,102,0.73);
-moz-box-shadow: inset -1px -1px 15px 11px rgba(159,136,102,0.73);
box-shadow: inset -1px -1px 15px 11px rgba(159,136,102,0.73);
background-color:#C5E1A5;
		
	}
	.kill{
		
		background-color:#fce5b8;
		-webkit-box-shadow: 11px 9px 3px 0px rgba(159,136,102,0.73);
-moz-box-shadow: 11px 9px 3px 0px rgba(159,136,102,0.73);
box-shadow: 11px 9px 3px 0px rgba(159,136,102,0.73);
	}
	.lead{
		font-family:cursive;
		font-size:180%;
		font-color:#724C35;
		
	}
	.active{
		background-color:#C5E1A5;
		
	}
/* tab color */
.nav-tabs>li>a {
  background-color: #333333; 
  border-color: #777777;
  border-radius:10px 10px 0px 0px;
  color:#64DD17;
}

/* active tab color */
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
  color: #64DD17;
  background-color: #666;
  border: 1px solid #888888;
  
  font-size:180%;
}

/* hover tab color */
.nav-tabs>li>a:hover {
  border-color: #000000;
  background-color: #111111;
  font-size:180%;
}
	
  </style>
</head>
<?php
require("config.php");
$states=array("AK","AL","AR","AZ","CA","CO","CT","DC","DE","FL","GA","GU","HI","IA","ID","IL","IN","KS","KY","LA","MA","MD","ME","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX","UT","VA","VT","WA","WI","WV","WY","VI");
?>
<body style="background-color:#CFE2E6;">
<div id="wrapper">
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid col-sm-10">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav> 
 <div id="sidebar-wrapper">
  <nav id="spy">
  <ul class="sidebar-nav nav" >
						  <li class="sidebar-brand">
						   <a href="#"><span class="fa fa-home solo">Home</span></a>
						  </li>
						  <li><a  href="#collapse1"><span class="fa fa-anchor solo">Panel1</span></a></li>
						  <li><a  href="#collapse2"><span class="fa fa-anchor solo">Panel2</span></a></li>
						  <li><a   href="#collapse3"><span class="fa fa-anchor solo">Panel3</span></a></li>
						  <li><a  href="#collapse4"><span class="fa fa-anchor solo">Panel4</span></a></li>
						  <li><a   href="#collapse5"><span class="fa fa-anchor solo">Panel5</span></a></li>
						  <li><a   href="#collapse6"><span class="fa fa-anchor solo">Panel6</span></a></li>
						  <li><a   href="#collapse7"><span class="fa fa-anchor solo">Panel7</span></a></li>
 </ul>
	 </nav>
</div>				 
  
  
  
<div id="page-content-wrapper">
     <div class="page-content">
<div class="container text-center one" >    
  <div class="container-fluid " style="margin-left:10%;background-color:#CFE2E6;min-width:100%;">
  <div class="row">
  
 
					 
						
	
 <!--Mega Search--> 
     <div class="col-sm-10">
       <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left killmega"  >
            <div class="panel-body" >
             <ul class="one">
			 
							<p class="lead  ">Mega Search</p>
							<li class="list-inline-item"><input  class="form-control" id="any" type="text" placeholder="Any Keyword"/></li>
							<!--SATTES SELECT-->
							<li class="list-inline-item"><?php
							echo "<select   class=\"form-control\"  id=\"select1\">";
							echo "<option selected value=\"\">-State-</option>";
								foreach ($states as $x)
								echo "<option value=$x>".$x."</option>";
							echo "</select>";
							
							?></li>
							
							<li class="list-inline-item"><label  class="btn btn-info" ><input type="radio" id="mega_search" name="mega_search" value="firm"> Firm</input></label></li>
							<li class="list-inline-item"> <label class="btn btn-info"><input type="radio" id="mega_search" name="mega_search" value="crd" />  Crd</label></li>
							<li class="list-inline-item"><label  class="btn btn-info"><input type="radio" id="mega_search" name="mega_search" value="contact" />  Contact</label></li>
							<li class="list-inline-item"><label  class="btn btn-info"><input type="radio" id="mega_search" name="mega_search" value="broucher" />  Broucher</label></li>
							<li ><input type="submit" value="GO..!!" id="search" class="btn btn-success" /></li>
				
			</ul>
            </div>
          </div>
        </div>
      </div>
<!--Detailed Search-->      
      <div class="row">
	   <div class="col-sm-12">
          <div class="panel panel-default text-left kill"  >
            <div class="panel-body" >
	    
            <p class="lead  ">Detailed Search</p>
            <div class="tabbable ">
              <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#state" data-toggle="tab">State</a></li>
                <li><a href="#crd" data-toggle="tab">Crd</a></li>
				<li><a href="#postal" data-toggle="tab">Postal</a></li>
				<li><a href="#city" data-toggle="tab">City</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="state">
                   <div class="row">
				    		<ul class="two">
									<li><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="selectAll" class="checkbox-circle" /><label for="selectAll"> Select All</label></div></li>
									<li></li>
									<li><input class="btn btn-primary btn-success" type="button" name="show"  " value="GO" /></li>
							</ul>
				   </div>
				   <div class="row">
								<ul class="two" >
												 <?php
												 foreach ($states as $x)
												 {					
												 echo "<li><div class=\"checkbox checkbox-info checkbox-circle\"><input type=\"checkbox\" id='$x' value='$x' class=\"checkbox-circle\" /><label for='$x'>".$x."</label></div></li>";
												 //echo "";<label class="switch"><input type="checkbox"><span class="slider round"></span>

												 }
												 ?>
								</ul>
				     </div>
				 
                </div>
                <div class="tab-pane" id="crd">
					   <div class="row">
					     <div class="col-sm-10">
						    <ul class="two">
							   <li><p class="lead  ">Search by CRD</p></li>
							   <li><input  class="form-control" type="text" placeholder="Enter CRD Number..."/></li>
							 </ul>
						 </div>
					   </div>
                </div>
				<div class="tab-pane" id="postal">
					<div class="row">
						 <div class="col-sm-10">
							 <ul class="two">
							   <li><p class="lead  ">Search by Postal</p></li>
							   <li><input  class="form-control" type="text" placeholder="Enter Postal Number..."/></li>
							 </ul>
						 </div>
					</div>
				</div>
				<div class="tab-pane" id="city">
					<div class="row">
						 <div class="col-sm-10">
							 <ul class="two">
							   <li><p class="lead  ">Search by City</p></li>
							   <li><input  class="form-control" type="text" placeholder="Enter City Name..."/></li>
							 </ul>
						 </div>
					</div>
				</div>				
              </div>
			  </div>
			  </div>
            </div>
          </div>
	  </div><!--End of row-->
 <div class="tab-content">	  
<!--Assets Under Management-->	 
<div class="row" id="collapse1" >
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Assets Under Management</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">$0</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" ><select id="zero" class="form-control "  ><option value="500">greater than $500 billion</option></select></div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>
<!--TOtal Accounts-->
<div class="row" id="collapse2">
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Total Accounts</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">0</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" >
											<select id="zero" class="form-control "  >
												<option value="500">Greater than 100</option>
											</select>
										</div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>	  
<!--Discretionary assets under management-->	 
<div class="row" id="collapse3" >
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Discretionary assets under management</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">$0</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" >
											<select id="zero" class="form-control "  >
												<option value="500">greater than $500</option>
											</select>
										</div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>	 
<!--Discretionary Accounts--> 
<div class="row" id="collapse4">
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Discretionary Accounts</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">0</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" >
											<select id="zero" class="form-control "  >
												<option value="500">greater than 1000</option>
											</select>
										</div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>	 
<!--Average  Accounts Size-->
<div class="row"  id="collapse5">
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Average  Accounts Size</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">$0</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" >
											<select id="zero" class="form-control "  >
												<option value="500">greater than $5 million</option>
											</select>
										</div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>	 
 <!--Total Clients-->
 <div class="row"  id="collapse6">
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Total Clients</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">Include All</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" >
											<select id="zero" class="form-control "  >
												<option value="500">greater than 500</option>
											</select>
										</div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>	
<!--Finalcial Planning Assets-->
<div class="row"  id="collapse7" >
	  <div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
						<div class="row">
							<div class="col-sm-8" >
								<p class="lead  ">Finalcial Planning Assets</p>
									<div class="row">
										<div class="col-sm-5" ">
											<select  class="form-control ">
												<option value="0">$0</option>
											</select>
										</div>
										<div class="col-sm-2"><p>TO</p></div>
										<div class="col-sm-5" >
											<select id="zero" class="form-control "  >
												<option value="500">greater than $500 billion</option>
											</select>
										</div>
									</div>
							</div>
							<div class="col-sm-4" ">
							<a href="#">Show More options</a>
							</div>
						</div>				
			</div>
    	</div>
	  </div>
</div>	 
</div>
<style><!--Radio Buttons styles-->
.radio {
    padding-left: 20px; }
.radio label {
    display: inline-block;
    
    padding-left: 5px; }
.radio label::before {
    content: "";
    display: inline-block;
    position: absolute;
    width: 17px;
    height: 17px;
    left: 0;
    margin-left: -20px;
    border: 1px solid #cccccc;
    border-radius: 50%;
    background-color: #fff;
    -webkit-transition: border 0.15s ease-in-out;
    -o-transition: border 0.15s ease-in-out;
    transition: border 0.15s ease-in-out; }
.radio label::after {
    display: inline-block;
    position: absolute;
    content: " ";
    width: 11px;
    height: 11px;
    left: 3px;
    top: 3px;
    margin-left: -20px;
    border-radius: 50%;
    background-color: #555555;
    -webkit-transform: scale(0, 0);
    -ms-transform: scale(0, 0);
    -o-transform: scale(0, 0);
    transform: scale(0, 0);
    -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33); }
.radio input[type="radio"] {
    opacity: 0; }
.radio input[type="radio"]:focus + label::before {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px; }
.radio input[type="radio"]:checked + label::after {
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1); }
.radio input[type="radio"]:disabled + label {
    opacity: 0.65; }
.radio input[type="radio"]:disabled + label::before {
    cursor: not-allowed; }
.radio.radio-inline {
    margin-top: 0; }

.radio-primary input[type="radio"] + label::after {
    background-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::before {
    border-color: #428bca; }
.radio-primary input[type="radio"]:checked + label::after {
    background-color: #428bca; }
.f{
	font-size:60%;
}
.three{
	margin-top:0px;
	
}
.three li {
	float:left;
	margin-left:25px;
	
		
	}
.four{
	-webkit-column-count: 2;
       -moz-column-count: 2;
        column-count: 2;
		
	}
.four li{
	display: inline-block;
	margin-top:0px;
    }
</style>

<!--Bussiness Type  b-->
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Bussiness Type and product Offering</p>
		<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="b1"><label for="b1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="b2" ><label for="b2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="b3" ><label for="b3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="b4" ><label for="b4">Match None</label></div></li>
							   </ul>
							   <hr>
					
						</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >		
								<ul class="list-unstyled row four">
									<li class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle b"><input type="checkbox" id="b5" class="checkbox-circle" /><label for="b5">Free-Only </label></div></li>
									<li class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle b"><input type="checkbox" id="b6" class="checkbox-circle" /><label for="b6">Family office or multi-family office </label></div></li>
									<li class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle b"><input type="checkbox" id="b7" class="checkbox-circle" /><label for="b7">Wealth manager </label></div></li>
									<li class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle b"><input type="checkbox" id="b8" class="checkbox-circle" /><label for="b8">Asset manager </label></div></li>
									<li class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle b"><input type="checkbox" id="b9" class="checkbox-circle" /><label for="b9">Using socially responsible investments </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle b"><input type="checkbox" id="b10" class="checkbox-circle" /><label for="b10">Using DFA </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b11" class="checkbox-circle" /><label for="b11">Using retirement products </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b12" class="checkbox-circle" /><label for="b12">Using insurance products </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b13" class="checkbox-circle" /><label for="b13"> ETF Strategist</label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b14" class="checkbox-circle" /><label for="b14">Runs fund of funds </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b15" class="checkbox-circle" /><label for="b15">Private fund invests in 40 Act funds </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b16" class="checkbox-circle" /><label for="b16">Using exchange traded funds (ETFs) </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b17" class="checkbox-circle" /><label for="b17"> Using alternatives</label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b18" class="checkbox-circle" /><label for="b18"> Using real estate</label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b19" class="checkbox-circle" /><label for="b19">Using publicly traded (TEITs) </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b20" class="checkbox-circle" /><label for="b20">Turnkey asset manager (TAMP) </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b21" class="checkbox-circle" /><label for="b21">Using mutual funds </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b22" class="checkbox-circle" /><label for="b22">Using seperately managed accounts </label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b23" class="checkbox-circle" /><label for="b23"> Using Structured Notes</label></div></li>
									<li class="   col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="b24" class="checkbox-circle" /><label for="b24">Runs Private Funds </label></div></li>
																	
								</ul>
					</div>
							
		</div>
	</div>
 </div>
</div>
</div>	


<!--Investment Intrest  c-->
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			 <p class="lead  ">Investment Intrest</p>
			 <div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="c1"><label for="c1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="c2" ><label for="c2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="c3" ><label for="c3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="c4" ><label for="c4">Match None</label></div></li>
							   </ul>
							   <hr>
							   
						</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >		
					
								<ul class="list-unstyled row four">


									<li class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c5" class="checkbox-circle" /><label for="c5">MLPs/Energy </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c6" class="checkbox-circle" /><label for="c6"> Alternative Investment</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c7" class="checkbox-circle" /><label for="c7"> Income Solutions</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c8" class="checkbox-circle" /><label for="c8">Fixed Income </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c9" class="checkbox-circle" /><label for="c9"> International Fixed Income</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c10" class="checkbox-circle" /><label for="c10"> Active Indexing</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c11" class="checkbox-circle" /><label for="c11"> Closed End Funds</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c12" class="checkbox-circle" /><label for="c12">ETFs </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c13" class="checkbox-circle" /><label for="c13">ESG </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c14" class="checkbox-circle" /><label for="c14"> REITs</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c15" class="checkbox-circle" /><label for="c15">Smart Beta </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c16" class="checkbox-circle" /><label for="c16">Emerging Markets </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c17" class="checkbox-circle" /><label for="c17">International Markets </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c18" class="checkbox-circle" /><label for="c18">Alternative Beta Strategies </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c19" class="checkbox-circle" /><label for="c19">Large Cap Value </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c20" class="checkbox-circle" /><label for="c20">Small Cap Value </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c21" class="checkbox-circle" /><label for="c21">Small Cap Growth </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c22" class="checkbox-circle" /><label for="c22"> hedge Funds</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c23" class="checkbox-circle" /><label for="c23"> Private Equity</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c24" class="checkbox-circle" /><label for="c24"> Real Assets</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="c25" class="checkbox-circle" /><label for="c25"> Commodities</label></div></li>

									</ul>
	</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


<!-- Top Advisor Rankings  d-->
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Top Advisor Rankings</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="d1"><label for="d1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="d2" ><label for="d2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="d3" ><label for="d3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="d4" ><label for="d4">Match None</label></div></li>
							   </ul>
							   <hr>
						   
						</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >		
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="" class="checkbox-circle" /><label for=""> Top Fee-Only Advisors by Assets</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="" class="checkbox-circle" /><label for="">Top-regional Advisors </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="" class="checkbox-circle" /><label for=""> Top Fee-Only by Growth in Assets</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="" class="checkbox-circle" /><label for=""> Top Emerging Advisors</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="" class="checkbox-circle" /><label for=""> Top Financial Planners</label></div></li>

							</ul>
					</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


<!--ETF Data  e-->

<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">ETF Data</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="e1"><label for="e1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="e2" ><label for="e2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="e3" ><label for="e3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="e4" ><label for="e4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
				<div class="col-sm-12" >
					  <div class="row">
					     <div class="col-sm-4" >
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="e5" class="checkbox-circle" /><label id="e5"> ETFs</label></div></li>
							</ul>
						 </div>
						<div class="col-sm-8" >
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="e6" class="checkbox-circle" /><label id="e6"> Select All Quarters</label></div></li>
							</ul>
						</div>
					</div>
					<div class="row">
							<div class="col-sm-3" >
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="col-sm-1" >
							 <p class="mute" > as of</p>
							</div>
							<div class="col-sm-5" >
								<select class="form-control">
									<option value="" >12/01/2018</option>
									<option value="">13/01/2018</option>
									<option value="">14/01/2018</option>
									<option value="">15/01/2018</option>
								</select>
							</div>
							<div class="col-sm-3" >
							</div>
					</div>
				</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


<!--Equity Data  f-->
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Equity Data</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="f1"><label for="f1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="f2" ><label for="f2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="f3" ><label for="f3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="f4" ><label for="f4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
				<div class="col-sm-12" >
					  <div class="row">
					     <div class="col-sm-4" >
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="f5" class="checkbox-circle" /><label id="f5"> ETFs</label></div></li>
							</ul>
						 </div>
						<div class="col-sm-8" >
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="f6" class="checkbox-circle" /><label id="f6"> Select All Quarters</label></div></li>
							</ul>
						</div>
					</div>
					<div class="row">
							<div class="col-sm-3" >
								<input type="text" class="form-control" placeholder="">
							</div>
							<div class="col-sm-1" >
							 <p class="mute " > as of</p>
							</div>
							<div class="col-sm-5" >
								<select class="form-control">
									<option value="" >12/01/2018</option>
									<option value="">13/01/2018</option>
									<option value="">14/01/2018</option>
									<option value="">15/01/2018</option>
								</select>
							</div>
							<div class="col-sm-3" >
							</div>
					</div>
				</div>
							
		</div>
	</div>
 </div>
</div>	
</div>

<!--Client Type  g-->	
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Client Type</p>
				<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="g1"><label for="g1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="g2" ><label for="g2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="g3" ><label for="g3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="g4" ><label for="g4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >	
							<ul class="four">
								<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g5" class="checkbox-circle" /><label for="">High net worth individuals </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g6" class="checkbox-circle" /><label for="g6">Pooled Investment Vehicles </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g7" class="checkbox-circle" /><label for="g7">Banking or thrift Institutions </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g8" class="checkbox-circle" /><label for="g8">Pension and profit sharing plans </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g9" class="checkbox-circle" /><label for="g9">Investment companies </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g10" class="checkbox-circle" /><label for="g10">Charitable organizations </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g11" class="checkbox-circle" /><label for="g11">Business development companies </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g12" class="checkbox-circle" /><label for="g12">Corporations </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g13" class="checkbox-circle" /><label for="g13">Individuals (other than HNW) </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g14" class="checkbox-circle" /><label for="g14">State or municipal entities </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="g15" class="checkbox-circle" /><label for="g15">Other Investment advisers </label></div></li>
									
							</ul>
							</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


<!--Compensation  h-->	
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Compensation</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="h1"><label for="h1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="h2" ><label for="h2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="h3" ><label for="h3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="h4" ><label for="h4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >	
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="h5" class="checkbox-circle" /><label for="h5"> A percentage of assets under management</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="h6" class="checkbox-circle" /><label for="h6"> Fixed fees</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="h7" class="checkbox-circle" /><label for="h7"> Hourly charges</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="h8" class="checkbox-circle" /><label for="h8">Commissions </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="h9" class="checkbox-circle" /><label for="h9"> Subscription fees</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="h10" class="checkbox-circle" /><label for="h10"> performance based fees</label></div></li>

							</ul>
							</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


<!--Advisory Services i-->	
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Advisory Services</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="i1"><label for="i1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="i2" ><label for="i2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="i3" ><label for="i3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="i4" ><label for="i4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >	
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i5" class="checkbox-circle" /><label for="i5">Financial planning </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i6" class="checkbox-circle" /><label for="i6">Portfolio management of Institutions </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i7" class="checkbox-circle" /><label for="i7">Portfolio management of Investment companies </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i8" class="checkbox-circle" /><label for="i8"> Pension consulting services</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i9" class="checkbox-circle" /><label for="i9">Portfolio management for Individuals </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i10" class="checkbox-circle" /><label for="i10"> Educational seminars/workshops</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i11" class="checkbox-circle" /><label for="i11"> Selection of other Advisors</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i12" class="checkbox-circle" /><label for="i12">Security rating and pricing services </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i13" class="checkbox-circle" /><label for="i13"> Publication of newsletters</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i14" class="checkbox-circle" /><label for="i14">Market timing services </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="i15" class="checkbox-circle" /><label for="i15">Portfolio management for pooled Investment vehicles </label></div></li>
									
							</ul>
							</div>
							
		</div>
	</div>
 </div>
</div>	
</div>

<!--Other Business  j-->
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Other Business</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="j1"><label for="j1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="j2" ><label for="j2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="j3" ><label for="j3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="j4" ><label for="j4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >	
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j5" class="checkbox-circle" /><label for="j5"> Broker/dealer</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j6" class="checkbox-circle" /><label for="j6"> Real Estate Broker</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j7" class="checkbox-circle" /><label for="j7">Insurance broker and agent </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j8" class="checkbox-circle" /><label for="j8"> Futures Advisors</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j9" class="checkbox-circle" /><label for="j9">Commodity Trading Advisor </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j10" class="checkbox-circle" /><label for="j10">Registered representative </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j11" class="checkbox-circle" /><label for="j11"> Bank</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j12" class="checkbox-circle" /><label for="j12">Trusted Company </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j13" class="checkbox-circle" /><label for="j13">Municipal advisor </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j14" class="checkbox-circle" /><label for="j14"> Swap dealer</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j15" class="checkbox-circle" /><label for="j15"> Swap participant</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j16" class="checkbox-circle" /><label for="j16">Accountant </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j17" class="checkbox-circle" /><label for="j17"> Lawyer</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="j18" class="checkbox-circle" /><label for="j18">Financial Product Sales </label></div></li>
							</ul>
							</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


<!--Affiliations  k-->
<div class="row">
<div class="col-sm-12">
	    <div class="panel panel-default text-left kill" >
            <div class="panel-body" >
			  <p class="lead  ">Affiliations</p>
					<div class="row" >
	  
					<div class="row">
						<div class="col-sm-8" >
							   <ul class="three" >
									<li><div class="radio radio-primary"><input type="radio" name="business" id="k1"><label for="k1">Select All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="k2" ><label for="k2">Match All</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="k3" ><label for="k3">Match Any</label></div></li>
									<li><div class="radio radio-primary"><input type="radio" name="business" id="k4" ><label for="k4">Match None</label></div></li>
							   </ul>
							   <hr>
					</div>
						<div class="col-sm-4"><a href="#">Show More options</a></div>
					 </div>
		</div>
    
		<div class="row">
					<div class="col-sm-12" >	
							<ul class="four">
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k5" class="checkbox-circle" /><label for="k5">Broker/dealer </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k6" class="checkbox-circle" /><label for="k6">Bank </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k7" class="checkbox-circle" /><label for="k7">Swap participant </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k8" class="checkbox-circle" /><label for="k8"> Accounting firm</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k9" class="checkbox-circle" /><label for="k9"> Security swap dealer</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k10" class="checkbox-circle" /><label for="k10">Other Investment advisor </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k11" class="checkbox-circle" /><label for="k11">Trust company </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k12" class="checkbox-circle" /><label for="k12">Mutual fund </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k13" class="checkbox-circle" /><label for="k13"> Futures merchant</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k14" class="checkbox-circle" /><label for="k14"> Municipal advisor</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k15" class="checkbox-circle" /><label for="k15">Commodity trading advisor </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k16" class="checkbox-circle" /><label for="k16"> Law firm</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k17" class="checkbox-circle" /><label for="k17">Insurance company </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k18" class="checkbox-circle" /><label for="k18"> Pension consultant</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k19" class="checkbox-circle" /><label for="k19"> Real estate broker</label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k20" class="checkbox-circle" /><label for="k20">Sponsor of LPs </label></div></li>
									<li  class="  col-sm-8"><div class="checkbox checkbox-info checkbox-circle"><input type="checkbox" id="k21" class="checkbox-circle" /><label for="k21">Sponsor of pooled  vehicles </label></div></li>
							</ul>
							</div>
							
		</div>
	</div>
 </div>
</div>	
</div>


 <!--SAmple data-->
 <!--
 <div>
 <div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="bandmember.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="bird.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>     
    </div>
</div> 
 -->

 </div><!--Major row end-->
  </div>
  
</div><!--end of container fluid-->
</div><!--End of container-->
 </div>
    </div>
</div><!--End of wrapper-->
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
