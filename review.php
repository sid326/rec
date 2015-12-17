<html>
<head>
<script>
function my1()
{
	var x=document.getElementById('sub1').name;
var x1= document.getElementsByName(x)[0].value;
if(confirm("Are you sure you want to submit this will finalise your answer!!!!"))
{
	window.location="http://localhost/home/home/home/home/submit.php?qu="+x+"&su="+x1;
}
}
function goBack() {
	if(confirm("Are you sure you want to go back  !!!!"))
{
   window.history.back();
}
   
}
</script>
<style>
body
	{
		background-image:url('inspiration-geometry (1).png');
        background-color:#1D314F;
        margin:0;
	}
.footer
{
	/*background-color: #CD5C5C;*/
	/*background-color: #000;*/
	background-color: rgba(0,0,0,0.7);
	margin-top: 110px;
	overflow: hidden;
	width:100%;
	position:absolute;
	bottom:0;
	left:0;
}
img
{
	float:right;
	width:150px;
	height:40px;
}
#a
{
width:30%;
height:50%;
padding-left:260px;
margin-top:7%;
margin-left:27%;
font-size:20px;
color:white;
background-color:#CD5C5C;
padding-top:20px;
border-radius: 10px;
}
.header
{
	padding: 0.5em;
    margin-left: 0px;
    margin-right: 0px;
    color: white;
   background-color: rgba(0,0,0,0.7);
    clear: left;
    font-size: 30px;
    text-align: center;
}	
#sub2{
font-size:27px;
color:blue;
margin-left:-261px;
margin-top:105px;
}
#sub1{
font-size:27px;
color:blue;
margin-left:305px;
margin-top:-40px;
}
</style>
</head>
<body>
<?php 
error_reporting(0);
session_start();	
if(isset($_SESSION['user']))
{
$temp3="nologin".$_GET['domain'];
if(isset($_SESSION[$temp3]))
{
	header('location:skill.php');
}
if($_GET['domain'])
{	
	?>
<div class="header">Please review your submission please  </div>
<canter><div id ="a">
<?php
for($i=1;$i<=12;$i++)
{
echo "question ".$i.":";
$temp1=$_GET['domain'];

$temp=$temp1.$i;
if(!isset($_SESSION[$temp]))
{
	echo "not answered "."<br/>";
}	
else
{
echo $_SESSION[$temp] ."<br/>";
}
}
?>
 
    <?php print "<button id='sub2' onclick='goBack()'>BACK </button>"; ?>  <br/>
	
	<?php 	echo "<button id='sub1' type='submit' onclick='my1()' name='domain' value='".$temp1.	"'> Submit</button>"."</br>";?>			 
</div></center>
<?php
}
else
{
	header('location:skill.php');
}
}
else
{
	header('location:login1.php');
}
?>
<div class="footer">
	<a href="http://www.webarchsrm.com"><img src="webarch.png"></img></a>
</div>
</body>
</html>

