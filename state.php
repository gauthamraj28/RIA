<?php
require("config.php");

//<!--SATTES SELECT-->
$states=array("AK","AL","AR","AZ","CA","CO","CT","DC","DE","FL","GA","GU","HI","IA","ID","IL ","IN","KS","KY","LA","MA","MD","ME","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ","NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX","UT","VA","VT","WA","WI","WV","WY","Other");
//	echo "<div class=\"form-group\">";
	
		//echo "<li>."" </li>";
//	echo "</div>";
?>	
<html>
<head>
<style>
.chk li
{
   display:inline-block;
   margin:6px;
   width:5%;
}

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

.pan{
	width:100%;
	height:30%;
	
}
</style>
<script src = "script.js"></script>
<script type="javascript">
function change_state()
{
var xmlhttp=new XMLHttpRequest();
xmlhttp.open("GET","fetch.php?state='hello',true);
xmlhttp.send(null);
alert(xmlhttp.responseText);
document.getElementById("sates-list").innerHTML=xmlhttp.responseText;
}
</script>
</head>

   <h3>Select </h3>

      <div class="panel panel-default">
	   <div class="panel-body">
	     <ul>
			<li><input type="checkbox" id="selectAll" class="selectAll" /> Select All</li><li><input type="button" name="show"  onClick="change_state();" value="GO" /></li><br>
		</ul>
		 <ul class="chk" style="margin-top:5px;">
					<?php
					 foreach ($states as $x)
					 {					
					 echo "<li>".$x."<label class=\"switch\"><input type=\"checkbox\" style=\"float:inherit;\" value=".$x." class=\"codes\" name=\"codes\"/><span class=\"slider round\"></span></label></li>";
					 //echo "";
					 }
					 ?>
         </ul>
		 <p id="states-list"></p>
		 </div>
      </div>
  
  
</html>