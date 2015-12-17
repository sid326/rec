<?php
require_once 'dbConnect.php';
session_start();
$db = new dbConnect();

$sql="select domain from score where  user='".$_SESSION['user']."';";
	$result=mysql_query($sql);
	if($result)
	{
		while($row=mysql_fetch_assoc($result))
		{	
			if($row['domain']=="webdevelopment")
			{
				if(isset($_SESSION['result_countwd']))
				{
				$sql="update  score set score=".$_SESSION['result_countwd']." where user='".$_SESSION['user']."' and  domain='".$row['domain']."';";
				$result1=mysql_query($sql);
				if(!$result1)
				{
					print mysql_error();
				}
				
				}
				
			}
			else if($row['domain']=="webdesigning")
			{
				if(isset($_SESSION['result_countwb']))
				{
				$sql="update  score set score=".$_SESSION['result_countwb']." where user='".$_SESSION['user']."' and  domain='".$row['domain']."';";
				$result1=mysql_query($sql);
				if(!$result1)
				{
					print mysql_error();
				}
				}
			}
			else if($row['domain']=="vfx")
			{
				if(isset($_SESSION['result_countvf']))
				{
				$sql="update  score set score=".$_SESSION['result_countvf']." where user='".$_SESSION['user']."' and  domain='".$row['domain']."';";
				$result1=mysql_query($sql);
				if(!$result1)
				{
					print mysql_error();
				}
				}
			}
			else if($row['domain']=="graphicdesigning")
			{
				if(isset($_SESSION['result_countgd']))
				{
				$sql="update  score set score=".$_SESSION['result_countgd']." where user='".$_SESSION['user']."' and  domain='".$row['domain']."';";
				$result1=mysql_query($sql);
				if(!$result1)
				{
					print mysql_error();
				}
				}
			}
			else if($row['domain']=="appdevelopment")
			{
				if(isset($_SESSION['result_countad']))
				{
				$sql="update  score set score=".$_SESSION['result_countad']." where user='".$_SESSION['user']."' and  domain='".$row['domain']."';";
				$result1=mysql_query($sql);
				if(!$result1)
				{
					print mysql_error();	
				}
				}
			}
			
		}
	}
session_destroy();
header('location:login1.php');
?>	