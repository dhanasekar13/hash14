<?php
error_reporting(0);
$method = $_SERVER['REQUEST_METHOD'];

if($method=="POST")
{

$projectName=($_POST["projectname"]);
$projectDescription=($_POST["description"]);
$projectHour=($_POST["hour"]);

include_once('addCom.php');
$data=new addCom();
$info=$data->insert($projectName,$projectDescription,$projectHour);

echo $info;
}
else
{
	
include_once('addCom.php');
$data=new addCom();
$info=$data->get();

echo $info;
}


?>



