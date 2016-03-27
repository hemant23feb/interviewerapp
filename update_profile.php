<?php

include 'conn.php';
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

			 $name1=$_REQUEST['c_name'];
			 $roll_no=$_REQUEST['roll_no'];
			 $college=$_REQUEST['college'];
			 $mobile=$_REQUEST['mobile'];
			 $email=$_REQUEST['username'];
			 $reg_date=$_REQUEST['reg_date'];
			 $password=$_REQUEST['password'];
			  		$query="UPDATE `candidate` SET `name`='$name1',`roll_no`='$roll_no',`college`='$college',`mobile`='$mobile',`email`='$email',`password`='$password',`reg_date`='$reg_date' WHERE roll_no='$roll_no'";
					$result=mysqli_query($conn,$query);
					if($result>0)
					{
						$str="updated";
						echo json_encode((object)$str);
					}
					else
					{
						$str="Not updated";
						echo json_encode((object)$str);
					}
				
?>