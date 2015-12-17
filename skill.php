<html>
<head>
	<title>skills</title>
	<style>
	body
	{
		background-image:url('inspiration-geometry (1).png');
        background-color:#1D314F;
        margin:0;
        height:100%;
	}
	#wrapper {
	min-height:100%;
	position:relative;
}
	.header
	{
    padding: 0.5em;
    margin-left: 0px;
    margin-right: 0px;
    color: white;
    background-color: rgba(0,0,0,0.7);
    clear: left;
	}
	.footer
	{
		/*background-color: #CD5C5C;*/
		background-color: #000;
		opacity: 0.7;
		margin-top: 555px;
		width:100%;
    	height: 35px;
    	position:absolute;
		bottom:0;
		left:0;
	}
	img
	{
		width:150px;
		height:40px;
		float: right;
		opacity: 1;
	}
	ul.menu {
    margin-left:0px;
    }
	ul {
    list-style-type: none;
    margin: 0;
    padding: 10px;
    overflow: hidden;
	}
	li {
    float: right;
    margin:0 10px 0 0;
	}
	a:link, a:visited {
    -moz-border-radius:5px;  
 	 border-radius: 5px;  
  	-webkit-border-radius: 5px;
    display: block;
    width: 100px;
    color: #FFFFFF;
    background-color: #34495e;
    text-align: center;
    padding: 0px;
    text-decoration: none;
    text-transform: sentencecase;
	}
	a:hover, a:active {
    background-color: #CD5C5C;
	}
	.view
	{
	width: 200px;
   	height: 200px;
   	margin: 150px 26px;
   	background-color: #CD5C5C;
   	float: left;
   	border-radius: 10px;
  overflow: hidden;
  position: relative;
  text-align: center;
	}
	.styled-button {
	-webkit-box-shadow:rgba(0,0,0,0.0.1) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.0.1) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.0.1) 0 1px 0 0;
	background-color:#34495e;
	border:1px solid #29447E;
	font-family:'Lucida Grande',Tahoma,Verdana,Arial,sans-serif;
	font-size:20px;
	font-weight:700;
	padding:2px 6px;
	color:#fff;
	 margin: 80px 0 0 0;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	cursor: pointer;
}
	</style>
</head>
<body>
	<div id="wrapper">
	<div class="header">
	<ul class="menu">
        <li><font face="verdana" size="4"><a href="logout.php" class="top">Logout</a></font></li>
        <li><font face="verdana" size="4"><a href="" class="top">Profile</a></font></li>
    </ul>
    </div>
<?php
require_once 'dbConnect.php';
session_start();
$db = new dbConnect();
if(isset($_SESSION['user']))
{
	$sql="select distinct domain from score where user='".$_SESSION['user']."';";
	echo "<form action='a.php' method='get'>";
	if($data=mysql_query($sql		))
     {
	  while($a=mysql_fetch_array($data))
	  {
		  
		  if($a['domain']=="webdevelopment")
		  {
			  
			echo "<div class='view'><button class='styled-button' type='submit' name='domain' value='".$a['domain']."'> web development </button></div>";
		   }
		   if($a['domain']=="webdesigning")
		  {
			  
			echo "<div class='view'><button class='styled-button' type='submit' name='domain' value='".$a['domain']."'> web designing </button></div>";
		   }
		    if($a['domain']=="appdevelopment")
		  {
			  
			echo "<div class='view'><button class='styled-button' type='submit' name='domain' value='".$a['domain']."'> app development</button></div>"; 
		   }
		    if($a['domain']=="graphicdesigning")
		  {
			  
			echo "<div class='view'><button class='styled-button' type='submit' name='domain' value='".$a['domain']."'> graphics designing </button></div>";  
		   }
		    if($a['domain']=="vfx")
		  {
			  
			echo "<div class='view'><button class='styled-button' type='submit' name='domain' value='".$a['domain']."'> vfx </button></div>"."</br>"; 
		   }
		   
	 
	  }
	 }
	  echo "</form>";
	  echo "<div class='footer'><img src='webarch.png'></img></div>";
?>	  
<?php	  
}
else
{
	header('location:login1.php');
	
}	
?>
</div>
</body>
</html>