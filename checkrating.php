<?php

include 'conn.php';
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

			 $int_id=$_REQUEST['int_id'];
			 $roll_no=$_REQUEST['roll_no'];
			 
			 if($int_id==1)
			 {
			 	$query1="SELECT `int1` FROM `candidate` WHERE roll_no='$roll_no'";
				$r1=mysqli_query($conn, $query1);
				while($row1=mysqli_fetch_assoc($r1))
				{
					$val[name][]=$row1;
				}
					echo json_encode($val);
			}
			 
			 
			 else if($int_id==2)
			 {
			 	$query2="SELECT `int2` FROM `candidate` WHERE roll_no='$roll_no'";
				$r2=mysqli_query($conn, $query2);
				while($row2=mysqli_fetch_assoc($r2)){
					$val[name][]=$row2;
				}
					echo json_encode($val);
			 }
			 else if($int_id==3) {
			 		$query3="SELECT `int3` FROM `candidate` WHERE roll_no='$roll_no'";
					$r3=mysqli_query($conn, $query3);
					while($row3=mysqli_fetch_assoc($r3)){
						$val[name][]=$row3;
					}
						echo json_encode($val);
				 }
?>
