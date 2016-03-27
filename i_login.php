<?php

include 'conn.php';
// Check connection
if (!$conn)
{
   die("Connection failed: " . mysqli_connect_error());
}
			 $username=$_REQUEST['username'];
			 $password=$_REQUEST['password'];
			 
			 $query="select * from interviewer where username='$username'";
				$result=mysqli_query($conn,$query);
				if($result>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						$u=$row['username'];
						$p=$row['password'];
						
					}
					
					if($username==$u && $password==$p)
					{
							
						$sql="select id from interviewer where username='$username'";
						$res=mysqli_query($conn, $sql);
						while($row1=mysqli_fetch_assoc($res))
						{
							$val[name][]=$row1;
						}	
						echo json_encode($val);	
					}
					else{
						
						
					$str="login not successfully";
					echo json_encode((object)$str);
					}
					
				}
?>