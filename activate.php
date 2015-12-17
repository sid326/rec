<?php
error_reporting(0);
require_once 'dbConnect.php'; 
 $db = new dbConnect();
if(isset($_GET['token']) && preg_match('/^[0-9A-F]{40}$/i', $_GET["token"]))
	{
		$sql="select username ,tstamp from verify where token='".$_GET['token']."';";
		$result=mysql_query($sql);
		if($result)
		{
			$num_rows = mysql_num_rows($result);
			if($num_rows >0)
			{
			while($row=mysql_fetch_assoc($result))
			{
				$token=$_GET['token'];
				$limit=86400;
				$user=$row['username'];
				$tstamp=$row['tstamp'];
				if($_SERVER['REQUEST_TIME']- $tstamp > $limit)
				{
					print "link has expired please register again";
				}
				else
				{
					$sql="delete from verify where username='$user' and  token='$token' and tstamp='$tstamp'";
						$result=mysql_query($sql);
						if($result)
						{
							$sql1="select password from recruit where user_id='$user'";
							$result1=mysql_query($sql1);
							if($result1)
							{
								while($row=mysql_fetch_assoc($result1))
								{
									$password=$row['password'];
									
								}
								
							}
							else
							{
								print "error".mysql_error();
							}
							$sql2="insert into login(user_id,password) values('$user','$password')";
							$result2=mysql_query($sql2);
							if(!$result2)
							{
								print "error".mysql_error();
							}
							else
							{
								$sql3="select applyfor from recruit where user_id='$user'";
								$result3=mysql_query($sql3);
								if($result3)
								{
									while($row1=mysql_fetch_assoc($result3))
									{
										$a=$row1['applyfor'];
										if(strpos($a,"webdevelopment") !== false)
										{
										   $temp="webdevelopment";
										   $sql4="insert into score(user,domain) values('$user','$temp');";
										  $result3=mysql_query($sql4);
										  if(!$result3)
							{
								print "errorrrrrrr".mysql_error();
							}
								
										}
										if(strpos($a,"webdesigning") !== false)
										{
										$temp="webdesigning";
										   $sql4="insert into score(user,domain) values('$user','$temp');";
										  $result3=mysql_query($sql4);
										  if(!$result3)
							{
								print "errorrrrrrrrr".mysql_error();
							}
										}
										if(strpos($a,"vfx") !== false)
										{
										$temp="vfx";
										   $sql4="insert into score(user,domain) values('$user','$temp');";
										  $result3=mysql_query($sql4);
										  if(!$result3)
							{
								print "errorrrrr".mysql_error();
							}
										}
										if(strpos($a,"graphicdesigning") !== false)
										{
											$temp="graphicdesigning";
										   $sql4="insert into score(user,domain) values('$user','$temp');";
										  $result3=mysql_query($sql4);
										  if(!$result3)
							{
								print "errorrrrrrr".mysql_error();
							}
										
										}
										if(strpos($a,"appdevelopment") !== false)
										{
											$temp="appdevelopment";
										   $sql4="insert into score(user,domain) values('$user','$temp');";
										  $result3=mysql_query($sql4);
										  if(!$result3)
							{
								print "errororrrrrr".mysql_error();
							}
										
										}
										
										print " your acount is activated you can login to your account now";
									}
									
								}
								else
								{
									print "error".mysql_error();
								}
						
							
						}
						
				}
				else
				{
					print "error".mysql_error();
				}
			}
			}
			
			
		}
		else
			{
			print  " invalid token";
			}
	}
	else
	{
	print "error".mysql_error();
	}
	}
	else
	{
	print "not a valid  token";
	}
	
?>
