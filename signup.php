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
			 //$password=$_REQUEST['password'];
			 
			 $sql="select * from candidate where roll_no='$roll_no'";
			 $r=mysqli_query($conn, $sql);
			 while($row=mysqli_fetch_array($r))
			 {
			 	$uname=$row['email'];
				$roll=$row['roll_no'];
			
			 }
						 
			 if($roll_no===$roll)
			 {
				$str="username is already exist";
				echo json_encode((object)$str);	
			 }
			 	else
			 	{
			 		$query="INSERT INTO `candidate`(`id`, `name`, `roll_no`, `college`, `mobile`, `email`, `reg_date`) VALUES (NULL,'$name1','$roll_no','$college','$mobile','$email','$reg_date')";
					$result=mysqli_query($conn,$query);
					if($result>0)
					{
						$str="inserted";
						echo json_encode((object)$str);
					}
					else
					{
						$str="Not Inserted";
						echo json_encode((object)$str);
					}
				}
			
?>