<?php
require("config.php");

$mega=$_POST['text1'];
$select1=$_POST['select1'];
	if (is_numeric($mega)) {
		$crd=$mega;
		$getinfo="select * from investAdv as i,address as a,registration as r,states_filled_in as s,where_business as w where a.firm_crd=i.firm_crd and r.firm_crd=s.firm_crd and w.firm_crd=$crd ";
		// Create connection
		echo $mega."<br>";
		echo $select1."<br>";
		$crd=1234;			
		$query1 = $conn->query($getinfo);
		$rs= $query1->fetch_assoc();
			$Firm_CRD=$rs['Firm_CRD'];
		echo $Firm_CRD;
   }
	else {
        echo var_export($mega, true) . " is NOT numeric", PHP_EOL;
		
   }
/*

$getinfo ="select Firm_Crd,Sec_Cd,Sec_Nb,Bus_Nm,Lgl_Nm from investadv where Firm_Crd='$crd' and Sec_Cd='$sec'";

if($conn->query($getinfo)==TRUE)
{
$query1=$conn->query($getinfo);
  $row=$query1->fetch_assoc();
	echo "CrdNm : ".$row['Firm_Crd']."";
    echo "SecNb :".$row['Sec_Cd']."<BR>";
}
else
	echo mysqli_error($conn);


/*<?php 
+$conn = new mysqli('localhost', 'root', '', 'fdrw');
+if ($conn->connect_error) {
+	die("Connection error: " . $conn->connect_error);
+}
+$result = $conn->query("SELECT name FROM users");
+if ($result->num_rows > 0) {
+	while ($row = $result->fetch_assoc()) {
+		echo $row['name'] . '<br>';
+	}
+}
+?>*/
?>