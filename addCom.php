<?php
class addCom
{
function get()
{$values;$i=0;
		include_once('sqlConnection.php');
		$create=new DatabaseConnectionDAO();
	    $connection =$create->createDbConnection(); 

     	if($connection)
 		{ 
			$sql="SELECT * FROM `projectdetail`";


$con=mysqli_connect("localhost","root","","hash14");




			if($query=mysqli_query($con,$sql))
			{ 
        		while($res=mysqli_fetch_array($query))
        					{    	
					
						$myObj->$i = $res['projectName'];
						$myObj->$i =$res['projectDescription'];
						$myObj->$i =$res['projectHour'];
                        $values->$i=$myObj;
					$i++;
							}
			}
			else
			{
				$values="nilll";
			}
		}
		else
		{
				$values="sorrycannotexecute";
		}

$myJSON = json_encode($values);
		return $myJSON;
}
function insert($projectName,$projectDesc,$projectHour)
    { $value='';
    	include_once('sqlConnection.php');
		$create1=new DatabaseConnectionDAO();
	    $connection =$create1->createDbConnection(); 
     	if($connection)
 		{


$con=mysqli_connect("localhost","root","","hash14");

 				  	$sql1 ="INSERT INTO `projectdetail`(`projectName`, `projectDescription`, `projectHour`) VALUES ('$projectName','$projectDesc','$projectHour')";
 				 $query=mysqli_query($con,$sql1);
 				
				if($query)
				{
	$value="review added successfully";
				}
				else 
				{
					$value="review not added ";
	}
    	}
    	elseif ($connnection1->connect_error)
        {
     		 die("Connection failed: " . $conn->connect_error);
		} 
  	 	return $value;
    } 


}


?>