<html>
<head>
<style>
body
{
	 background-image:url('inspiration-geometry (1).png');
     background-color:#1D314F;
     margin:0;
}
.header
{
	padding: 0.5em;
    margin-left: 0px;
    margin-right: 0px;
    color: white;
    /*background-color: #CD5C5C;*/
    background-color: #000;
    opacity: 0.7;
    clear: left;
}
.footer
{
	background-color: #000;
	opacity: 0.7;
	margin-top: 148px;
	height: 40px;
}
img
{
	float: right;
	width: 150px;
	height: 40px;
}
#nav
{
margin-top:20%;	
width:60%;
height:10%;	

}
tr td { border:1px solid #ccc; background:#f7f7d7;}	
#a1
{
margin-top:5px;
width:80px;
height:30px;
/*float: right;*/	
}
#a2
{
	
}	
</style>
</head>
<body>
<?php
require_once 'dbConnect.php';
session_start();

if(isset($_SESSION['user']))
{
$temp3="nologin".$_GET['su'];
if(isset($_SESSION[$temp3]))
{
header('location:skill.php');	
}
else
{
	$_SESSION[$temp3]="nologin".$_GET['su'];
}
if($_GET['qu']=="domain" && $_GET['su']=="wd")
{
$domain="webdevelopment"; 	
}
else if($_GET['qu']=="domain" && $_GET['su']=="wb")
{
$domain="webdesigning";
}
else if($_GET['qu']=="domain" && $_GET['su']=="vf")
{
$domain="vfx";
}
else if($_GET['qu']=="domain" && $_GET['su']=="gd")
{
$domain="graphicdesigning";
}
else if($_GET['qu']=="domain" && $_GET['su']=="ad")
{
$domain="appdevelopment";
}
else
{
header('location:skill.php');
}

//	if(isset($_SESSIO	
	//$_SESSION['nologin']="no";
$result_count=0;
$total_question_count=0;	
$correct_question_count=0;
$incorrect_question_count=0;
$question_not_attempted=0;		
$db = new dbConnect();
//echo $query1=mysql_query("select count(id) as count_id from qtest");
$query="select count(id) as count_id from `{$_GET['su']}`;";
if($query1=mysql_query($query))
{
	while($query2=mysql_fetch_array($query1))
	{
		//echo "fgfg";
		$total_question_count=$query2['count_id'];
	}
}	
$query="select true_ans,id from `{$_GET['su']}`;";
if($data=mysql_query($query))
     {
	  while($a=mysql_fetch_array($data))
	  {
		  $temp=$a['id'];
		  $temp1=$_GET['su'].$temp;
		  if(isset($_SESSION[$temp1]))
		  {
			  if($a['true_ans']==$_SESSION[$temp1])
			  {
				 //	echo"dgfgfg";
				$result_count+=4;
				$correct_question_count++;
			  }
			  else
			  {
				$incorrect_question_count++;	
			  }
		  }
			else{

				$question_not_attempted++;
				 
			}
	
	
	
	
}
	 }
	$query3="update  score set score=".$result_count." where user='".$_SESSION['user']."' and  domain='".$domain."';";
	if($data3=mysql_query($query3))
	{
		
		//echo $_SESSION['user'].$result_count;
		
	}
	else
	{
		print mysql_error();
	}
	

?>
<div class="header"><center > <h1 > Here is your recent score</h1>	 </center>	</div>
<table id="nav" border="1"   width="600" align="center" cellpadding="1" cellspacing="1">
				<tbody><tr>
					<td valign="top" align="center" style="font-weight:bold;"><b style="font-size:17px;">Marks: 
<strong style="color:#1d76c1;"><?php  echo $result_count; ?></strong></b></td>
					<td valign="top" align="center" style="font-weight:bold;"><b style="font-size:17px;">Total Questions: <strong style="color:#1d76c1;"><?php echo $total_question_count;?></strong></b></td>
				</tr>
								<tr>
					<td valign="top" align="center" style="font-weight:bold;"><b style="font-size:17px;">Correct Questions: <strong style="color:#1d76c1;"><?php echo $correct_question_count; ?></strong></b></td>
					<td valign="top" align="center" style="font-weight:bold;"><b style="font-size:17px;">Incorrect Questions: <strong style="color:#1d76c1;"><?php echo $incorrect_question_count;?></strong></b></td>
				</tr>
												<tr>
					<td valign="top" align="center" colspan="2" style="font-weight:bold;"><b style="font-size:17px;">Total Time Taken: <strong style="color:#1d76c1;"><?php
$count=0;
$s1=$_SESSION['sdfg']-time();
while($s1>=60)
{
	$s1=$s1-60;
	$count++;
}
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
print ($store*10-$count).":".$s1;
?></strong></b></td>
				</tr>
								</tbody></table>
<center> <a href="skill.php" > <button  id="a1" > Skill Page</button></a></center>
<div class="footer"><a href="http://www.webarchsrm.com"><img src="webarch.png"></img></a></div>
<?php
}
else
{
	header('location:login1.php');
}
?>
</body>
</html>
	