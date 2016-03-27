<?php

include 'conn.php';
// Check connection
if (!$conn)
{
   die("Connection failed: " . mysqli_connect_error());
}
			 $roll_no=$_REQUEST['roll_no'];
			 $query="select * from candidate where roll_no='$roll_no'";
				$result=mysqli_query($conn,$query);
				if($result>0)
				{
					$value= array();
					while($row=mysqli_fetch_assoc($result))
					{
						$val[name][]=$row;
						
					}
					
					echo json_encode($val);
					
				}
?>