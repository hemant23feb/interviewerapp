<?php

include 'conn.php';
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

			 $rating=$_REQUEST['rating'];
			 $roll_no=$_REQUEST['roll_no'];
			 $int_id=$_REQUEST['int_id'];
				
			 
			 if($int_id==1)
			 {
			 	$query1="select * from candidate where roll_no='$roll_no'";
				$r1=mysqli_query($conn, $query1);
				while($row1=mysqli_fetch_array($r1)){
					$int1=$rating;
					$int2=$row1['int2'];
					$int3=$row1['int3'];
					$average=($int1+$int2+$int3)/3;
				}
				
				$sql1="UPDATE `candidate` SET `int1`='$rating',`average`='$average' WHERE roll_no='$roll_no'";
				$result1=mysqli_query($conn, $sql1);
				if($result1>0)
				{
					$str="updated";
					echo json_encode((object)$str);
				}
			 }
			 
			 else if($int_id==2)
			 {
			 	$query2="select * from candidate where roll_no='$roll_no'";
				$r2=mysqli_query($conn, $query2);
				while($row2=mysqli_fetch_array($r2)){
					$int2=$rating;
					$int1=$row2['int1'];
					$int3=$row2['int3'];
					$average=($int1+$int2+$int3)/3;
				}
				
				$sql2="UPDATE `candidate` SET `int2`='$rating',`average`='$average' WHERE roll_no='$roll_no'";
				$result2=mysqli_query($conn, $sql2);
				if($result2>0)
				{
					$str="updated";
					echo json_encode((object)$str);
				}
			 }
			 
			 else if($int_id==3) {
			 		$query3="select * from candidate where roll_no='$roll_no'";
					$r3=mysqli_query($conn, $query3);
					while($row3=mysqli_fetch_array($r3)){
						$int3=$rating;
						$int1=$row3['int1'];
						$int2=$row3['int2'];
						$average=($int1+$int2+$int3)/3;
					}
				
					$sql3="UPDATE `candidate` SET `int3`='$rating',`average`='$average' WHERE roll_no='$roll_no'";
					$result3=mysqli_query($conn, $sql3);
					if($result3>0)
					{
						$str="updated";
						echo json_encode((object)$str);
					}
				 }
?>
