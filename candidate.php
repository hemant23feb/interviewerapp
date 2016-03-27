<?php

include 'conn.php';
// Check connection
if (!$conn)
{
   die("Connection failed: " . mysqli_connect_error());
}
			 $int_uname=$_REQUEST['int_uname'];
			 
			 $query="select * from candidate";
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