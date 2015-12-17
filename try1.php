<?php
error_reporting(0);
require_once 'dbConnect.php';
session_start();
$db = new dbConnect();
if(isset($_SESSION['user']))
{
if(isset($_GET['qu']))
{	
$temp=$_GET['qu'];
$temp1=$_GET['su'];
$arr1 = str_split($temp);
//print_r($arr1);
foreach($arr1 as $str)
{
if(is_numeric($str))
{
if(!isset($temp3))
{
$temp3=$str;
}
else
{
$temp3=$temp3.$str;
}
}
else
{
if(!isset($temp2))
{
$temp2=$str;
}
else
{
$temp2=$temp2.$str;
}
}
}
if(!isset($_SESSION[$temp]))
{
echo "<style> 
.a1
{
	margin-top: 5%;
	background-image: url('que.jpg');
	background-size: cover;
	border-radius: 20px;
	padding:20px;
	margin: .5em;
	cursor: hand;
	border: 2px solid red;
} </style>";
$_SESSION[$temp]=$temp1;	
//echo $_SESSION[$temp];
//echo $temp3;
$query="select true_ans from `{$temp2}` where `id`='$temp3';";
if($data=mysql_query($query))
     {
	  while($a=mysql_fetch_array($data))
	  {
		  //$temp=$a['id'];
		  //$temp1=$_GET['su'].$temp;
		  //if(isset($_SESSION[$temp1]))
		  //{
			  if($a['true_ans']==$_SESSION[$temp])
			  {
				 //	echo"dgfgfg";
				$temp4="result_count".$temp2;
				if(!isset($_SESSION[$temp4]))
				{
					$_SESSION[$temp4]=4;
					//echo $_SESSION[$temp4];
				}
				else
				{
				$_SESSION[$temp4]+=4;
				}
				//$correct_question_count++;
			  }
			  else
			  {
				  $temp4="result_count".$temp2;
				if(!isset($_SESSION[$temp4]))
				{
					$_SESSION[$temp4]=0;
				}
				else
				{
				
				}
				  
				//$incorrect_question_count++;	
			  }
		 
}
	 }

//echo $_SESSION[$temp4];
}
else
{
	$query="select true_ans from `{$temp2}` where `id`='$temp3';";
if($data=mysql_query($query))
     {
	  while($a=mysql_fetch_array($data))
	  {
		  //$temp=$a['id'];
		  //$temp1=$_GET['su'].$temp;
		  //if(isset($_SESSION[$temp1]))
		  //{
			  if($a['true_ans']==$_SESSION[$temp])
			  {
				 //	echo"dgfgfg";
				$temp4="result_count".$temp2;
				$_SESSION[$temp4]-=4;
				
				//$correct_question_count++;
			  }
			  else
			  {
				//$incorrect_question_count++;	
			  }
		 
}
	 }
	
//$temp1=$_GET['su'];
$_SESSION[$temp]=$temp1;
//echo $_SESSION[$temp];
$query="select true_ans from `{$temp2}` where `id`='$temp3';";
if($data=mysql_query($query))
     {
	  while($a=mysql_fetch_array($data))
	  {
		  //$temp=$a['id'];
		  //$temp1=$_GET['su'].$temp;
		  //if(isset($_SESSION[$temp1]))
		  //{
			  if($a['true_ans']==$_SESSION[$temp])
			  {
				 //	echo"dgfgfg";
				$temp4="result_count".$temp2;
				$_SESSION[$temp4]+=4;
				
				//$correct_question_count++;
			  }
			  else
			  {
				//$incorrect_question_count++;	
			  }
		 
}
	 }
//echo $_SESSION[$temp4];
}
}
else
{
	header('location:a.php');	
}
}	
else
{
	header('location:login1.php');	
}	
?>