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
			 while($row=mysqli_fetch_assoc($result))
					{
						$average=$row['average'];
					}
					if($average==0)
					{
						$rank="0";
						$sql="UPDATE `candidate` SET `rank`='$rank' WHERE roll_no='$roll_no'";
						mysqli_query($conn, $sql);						
					}
					else if($average==1)
					{
						$rank="5";
						$sql="UPDATE `candidate` SET `rank`='$rank' WHERE roll_no='$roll_no'";
						mysqli_query($conn, $sql);						
					}
					else if($average==2)
					{
						$rank="4";
						$sql="UPDATE `candidate` SET `rank`='$rank' WHERE roll_no='$roll_no'";
						mysqli_query($conn, $sql);						
					}
					else if($average==3)
					{
						$rank="3";
						$sql="UPDATE `candidate` SET `rank`='$rank' WHERE roll_no='$roll_no'";
						mysqli_query($conn, $sql);						
					}
					else if($average==4)
					{
						$rank="2";
						$sql="UPDATE `candidate` SET `rank`='$rank' WHERE roll_no='$roll_no'";
						mysqli_query($conn, $sql);						
					}
					else if($average==5)
					{
						$rank="1";
						$sql="UPDATE `candidate` SET `rank`='$rank' WHERE roll_no='$roll_no'";
						mysqli_query($conn, $sql);						
					}
					 $query1="select * from candidate where roll_no='$roll_no'";
					 $result1=mysqli_query($conn,$query1);
					 while($row1=mysqli_fetch_assoc($result1))
						{
							$res[name][]=$row1;
						}
						echo json_encode($res);
?>