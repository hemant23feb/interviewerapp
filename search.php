<?php

include 'conn.php';
// Check connection
if (!$conn)
{
   die("Connection failed: " . mysqli_connect_error());
}
			 $c_name=$_REQUEST['c_name'];
			 $roll_no=$_REQUEST['roll_no'];
			 $int_uname=$_REQUEST['int_uname'];
			 $query="select * from candidate where (roll_no='$c_name' OR name='$c_name')";
				$result=mysqli_query($conn,$query);
				$r=mysqli_num_rows($result);
				if($r>0)
				{
					$value= array();
					while($row=mysqli_fetch_assoc($result))
					{
						$val[name][]=$row;
						
					}
					echo json_encode($val);
				}
				
				else{
					$str="record is not found";
					
					echo json_encode((object)$str);
				}
?>