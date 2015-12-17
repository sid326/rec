<html>
<head>

</head>
<body>
<?php
error_reporting(0);
require_once 'dbConnect.php';
session_start();
$db = new dbConnect();
if(!isset($_SESSION['sdfg']))
{
$temp=time();
//print $temp."<br/>";
$sql="select count(domain) as count from score where  user='".$_SESSION['user']."';";
	$result=mysql_query($sql);
	if($result)
	{
		//print mysql_error();
		while($row=mysql_fetch_assoc($result))
		{
				$store=$row['count'];
		}
	}
$temp1=$temp+($store*10*60);
//print $temp1."<br/>";
$_SESSION['sdfg']=$temp1;

}
else
{
	//print "cb";
$count=0;
$temp=time();
$s1=$_SESSION['sdfg']-$temp;
while($s1>=60)
{
	$s1=$s1-60;
	$count++;
}
if($count==0&& $s1<=0)
{
		
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
	 echo '<script type="text/javascript">alert("time over "); </script>';
	//header('location:submit.php?qu=domain&su=wd');
session_destroy();
	print "<meta http-equiv='refresh' content='1'>";
	//print "header('location:submit.php?qu=domain&su=wd');";
}
else if($count==0&& $s1>=0)
{
	if($s1<10){
		?>
	<div style="width:250px;height:90px;font-size:72px;font-family:AR CHRISTY;color:red;text-align:center;">
		<?php print "0: "."0".$s1;?>
	</div>
	<?php
	}
	else{
	?>
	<div style="width:250px;height:90px;font-size:72px;font-family:AR CHRISTY;color:red;text-align:center;">
		
		<?php print "0 : ".$s1;?>
	</div>
	<?php
}
}

else
{
	if($count <2)
	{
		if($s1<10){
		?>
	<div style=" background-image:url('back.jpg');width:250px;height:90px;font-size:72px;font-family:AR CHRISTY;color:red;text-align:center;">
		<?php print $count.": "." 0".$s1;?>
	</div>
	<?php
	}
	else{
	?>
	<div style=" background-image:url('back.jpg');width:250px;height:90px;font-size:72px;font-family:AR CHRISTY;color:red;text-align:center;">
		<?php print $count." : ".$s1;?>
		<center>
	</div>
	<?php
}
	}

	else{
	if($s1<10){
		?>
	<div style=" background-image:url('back.jpg');width:250px;height:90px;font-size:72px;font-family:AR CHRISTY;color:white;text-align:center;">
		<?php print $count.": "." 0".$s1;?>
	</div>
	<?php
	}
	else{
	?>
	<div style=" background-image:url('back.jpg');width:250px;height:90px;font-size:72px;font-family:AR CHRISTY;color:white;text-align:center;">
		<?php print $count." : ".$s1;?>
		<center>
	</div>
	<?php
}
}
}
}
?>
</body>
</html>