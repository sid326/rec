<?php
session_start();
require_once 'dbConnect.php';
$txt1=$_GET['qu'];
$txt2=$_GET['su'];
$txt3=$_GET['ru'];
$txt4=$_GET['tu'];
$txt5=$_GET['mu'];
$txt6=$_GET['gu'];
						$db = new dbConnect();
						$sql="select domain from adminlogin where name='".$_SESSION['adname']."'";
						$result=mysql_query($sql);
						if($result)
						{
	
						while($query=mysql_fetch_assoc($result))
						{
							if($query['domain']=="webdevelopment")
							{
								$sql1="CREATE TABLE IF NOT EXISTS  wd(id int(3) UNIQUE  NOT NULL AUTO_INCREMENT, qu_desc varchar(300) NOT NULL, ans1 varchar(100) NOT NULL, ans2 varchar(100) NOT NULL, ans3 varchar(100) NOT NULL,ans4 varchar(100) NOT NULL,true_ans varchar(2) NOT NULL) ;";
								$result1=mysql_query($sql1);
								if($result1)
								{
								$sql1="insert into wd(qu_desc,ans1,ans2,ans3,ans4,true_ans) values('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";
								
									$result2=mysql_query($sql1);
									if($result2)
									{
										echo "question uploaded";
										print "<meta http-equiv='refresh' content='1'>";
									}
									else
									{
										print mysql_error();
									}
									
									
									
								}
							}
							else if($query['domain']=="webdesigning")
							{
							$sql="CREATE TABLE IF NOT EXISTS  wb(id int(3) UNIQUE  NOT NULL AUTO_INCREMENT, qu_desc varchar(300) NOT NULL, ans1 varchar(100) NOT NULL, ans2 varchar(100) NOT NULL, ans3 varchar(100) NOT NULL,ans4 varchar(100) NOT NULL,true_ans varchar(2) NOT NULL) ;";
								$result1=mysql_query($sql);
								if($result1)
								{
									$sql1="insert into wb(qu_desc,ans1,ans2,ans3,ans4,true_ans) values('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";
									$result2=mysql_query($sql1);
									if($result2)
									{
										echo "question uploaded";
										print "<meta http-equiv='refresh' content='1'>";
									}
									
								}
							}
							elseif($query['domain']=="vfx")
							{
								$sql="CREATE TABLE IF NOT EXISTS  vf(id int(3) UNIQUE  NOT NULL AUTO_INCREMENT, qu_desc varchar(300) NOT NULL, ans1 varchar(100) NOT NULL, ans2 varchar(100) NOT NULL, ans3 varchar(100) NOT NULL,ans4 varchar(100) NOT NULL,true_ans varchar(2) NOT NULL) ;";
								$result1=mysql_query($sql);
								if($result1)
								{
									$sql1="insert into vf(qu_desc,ans1,ans2,ans3,ans4,true_ans) values('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";
									$result2=mysql_query($sql1);
									if($result2)
									{
										echo "question uploaded";
										print "<meta http-equiv='refresh' content='1'>";
									}
									
								}
							}
							elseif(	$query['domain']=="graphicdesigning")
							{
							$sql="CREATE TABLE IF NOT EXISTS  gd(id int(3) UNIQUE  NOT NULL AUTO_INCREMENT, qu_desc varchar(300) NOT NULL, ans1 varchar(100) NOT NULL, ans2 varchar(100) NOT NULL, ans3 varchar(100) NOT NULL,ans4 varchar(100) NOT NULL,true_ans varchar(2) NOT NULL) ;";
								$result1=mysql_query($sql);
								if($result1)
								{
									$sql1="insert into gd(qu_desc,ans1,ans2,ans3,ans4,true_ans) values('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";
									$result2=mysql_query($sql1);
									if($result2)
									{
										echo "question uploaded";
										print "<meta http-equiv='refresh' content='1'>";
									}
									
								}
							}
							else if($query['domain']=="appdevelopment")
							{
							$sql="CREATE TABLE IF NOT EXISTS  ad(id int(3) UNIQUE  NOT NULL AUTO_INCREMENT, qu_desc varchar(300) NOT NULL, ans1 varchar(100) NOT NULL, ans2 varchar(100) NOT NULL, ans3 varchar(100) NOT NULL,ans4 varchar(100) NOT NULL,true_ans varchar(2) NOT NULL) ;";
								$result1=mysql_query($sql);
								if($result1)
								{
									$sql1="insert into ad(qu_desc,ans1,ans2,ans3,ans4,true_ans) values('$txt1','$txt2','$txt3','$txt4','$txt5','$txt6')";
									$result2=mysql_query($sql1);
									if($result2)
									{
										echo "question uploaded";
										print "<meta http-equiv='refresh' content='1'>";
									}
									
								}
							}
							
							
							
							
						}
						}	

?>