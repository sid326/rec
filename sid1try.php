<html>
<?php 
session_start();
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
if(!isset($_SESSION['user']))
{
	header('location:login1.php');
}
$temp3="nologin".$_GET['domain'];

if($_GET['domain'])
{
	if($_GET['domain']=="webdevelopment")
	{
		$temp="wd";
		$temp3="nologin".$temp;
		if(isset($_SESSION[$temp3]))
{
	header('location:skill.php');
}
		if(isset($_SESSION[$temp]))
		{
			
		}
		else
		{
			
		$_SESSION[$temp]="webdevelopment";
		}
	}
	else if($_GET['domain']=="webdesigning")
	{
		$temp="wb";
		$temp3="nologin".$temp;
		if(isset($_SESSION[$temp3]))
{
	header('location:skill.php');
}
		if(isset($_SESSION[$temp]))
		{
			
		}
		else
		{
		$_SESSION[$temp]="webdesigning";
		}
	}
	else if($_GET['domain']=="appdevelopment")
	{
		$temp="ad";
		$temp3="nologin".$temp;
		if(isset($_SESSION[$temp3]))
{
	header('location:skill.php');
}
		if(isset($_SESSION[$temp]))
		{
		}
		else
		{
		$_SESSION[$temp]="appdevelopment";
		}
	}
	else if($_GET['domain']=="graphicsdesigning")
	{
		$temp="gd";
		$temp3="nologin".$temp;
		if(isset($_SESSION[$temp3]))
{
	header('location:skill.php');
}
		if(isset($_SESSION[$temp]))
		{
		}
		else
		{
		$_SESSION[$temp]="graphicsdesigning";
		}
	}
	else if($_GET['domain']=="vfx")
	{
		$temp="vf";
		$temp3="nologin".$temp;
		if(isset($_SESSION[$temp3]))
{
	header('location:skill.php');
}
		if(isset($_SESSION[$temp]))
		{
		}
		
		else
		{
		$_SESSION[$temp]="vfx";
		}
	}
	else
	{
		header('location:skill.php');
	}
	
	
}
else
{
	header('location:skill.php');
}	
?>	
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
   /* background-color: #CD5C5C;*/
   background-color: rgba(0,0,0,0.7);
    clear: left;
    overflow: hidden;
}
.footer
{
	/*background-color: #CD5C5C;*/
	background-color: rgba(0,0,0,0.7);
	margin-top: 520px;
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
#content
{
width:60%;
height:60%;
margin-top:2%;
margin-right: 20px;
font-size:20px;
float:right;
padding-left: 10px;
background-color:white;
background-color: rgba(150,150,150,.8);

color: black;	
}
.footer-img{
	float: right;
}
#links
{
float:left;		
text-align:center;
font-size:30px;
background-color:white;
}
#first
{
margin-top: 2%;
left:10px;
float:left;
background-color:#000;
background-color: rgba(100,100,100,.8);
padding:0 10px 10px 10px;
height:60%;

}
#sub{
font-size:27px;
color:blue;
float:right;
margin-top:130px;
margin-right: 30px;
}
#sub1{
font-size:27px;
color:blue;
float:right;
margin-top:130px;
margin-right: 30px;
}
.a
{
	margin-top: 5%;
	background-image: url('que.jpg');
	background-size: cover;
	border-radius: 20px;
	padding:20px;
	margin: .5em;
	cursor: hand;
}
.a:hover
{
	border: 2px solid gold;
	z-index: 100000;
	position: relative;
	background-color: gold;
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
    margin:25px 10px 0 0;
	}
	.top:link, .top:visited {
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
	.top:hover, .top:active {
    background-color: #CD5C5C;
	}
</style>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
var XMLHttpRequestObject =false;
if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}
function myFunction1(){
var x=document.getElementById('m1').name;
var x1= document.getElementsByName(x)[0].value;
	 document.getElementById("demo1").innerHTML = x;
if(XMLHttpRequestObject)
{
var obj1=document.getElementById("demo");
XMLHttpRequestObject.open("GET","try1.php?qu="+x+"&su="+x1);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
obj1.innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send(null);
}
}
function myFunction2() {
var x=document.getElementById('m2').name;
var x1= document.getElementsByName(x)[1].value;
	 document.getElementById("demo1").innerHTML = x;
if(XMLHttpRequestObject)
{

var obj1=document.getElementById("demo");
XMLHttpRequestObject.open("GET","try1.php?qu="+x+"&su="+x1);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
obj1.innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send(null);
}	 
}
function myFunction3() {
var x=document.getElementById('m3').name;
var x1=document.getElementsByName(x)[2].value;
document.getElementById("demo1").innerHTML = x;
if(XMLHttpRequestObject)
{
var obj1=document.getElementById("demo");
XMLHttpRequestObject.open("GET","try1.php?qu="+x+"&su="+x1);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
obj1.innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send(null);
}	 
}
function myFunction4() {
var x=document.getElementById('m4').name;
var x1= document.getElementsByName(x)[3].value;
document.getElementById("demo1").innerHTML = x;
if(XMLHttpRequestObject)
{
var obj1=document.getElementById("demo");
XMLHttpRequestObject.open("GET","try1.php?qu="+x+"&su="+x1);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
obj1.innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send(null);
}	 
}
function my4()
{
var txt1=document.getElementById("sub");
if(XMLHttpRequestObject)
{
var obj1=document.getElementById("content");
XMLHttpRequestObject.open("GET","try.php?qu="+txt1.value);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
obj1.innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send(null);
}
}
function mouseDown(divID1)
{
var txt1=document.getElementById(divID1);
if(XMLHttpRequestObject)
{
var obj1=document.getElementById("content");
XMLHttpRequestObject.open("GET","try.php?qu="+txt1.value);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
obj1.innerHTML=XMLHttpRequestObject.responseText;
}
}
XMLHttpRequestObject.send(null);
}
}
function loadlink(){
    $('#links').load('timer.php',function () {
         //$(this).unwrap();
    });
}
loadlink(); 
setInterval(function(){
    loadlink() 
}, 1000);


function my2()
{
if(confirm("Are you sure you want to submit this will finalise your answer!!!!"))
{
	window.location="http://localhost/ppp/review.php";
}
}
	
</script>
</head>
<body>
<div class="header">	
<div id="links">
</div>
<ul class="menu">
        <li><font face="verdana" size="4"><a href="logout.php" class="top">Logout</a></font></li>
    </ul></div>
<div id="first" style="float:left; width:23%;padding-top:30px; overflow:hidden;text-align:center;border-radius:10px;">
<div  style="margin-bottom:5%;"><center><span style="color:white;">Questions</span></center></div>
<?php 
for($a=1;$a<=24;$a++)
{

?>
<button id="<?php echo $a;?>" value='<?php echo $temp.$a;?>' onclick="mouseDown('<?php echo $a;?>')" class="a" title='<?php echo $a;?>'>
<!--Question <?php echo $a;?>-->
</button>
<?php
}
?>
</div>
<div id="content">
<center> Please select question from question panel </center>
</div> 
<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
//echo 'Page generated in '.$total_time.' seconds.';
?>
<div class="footer">
	<a href="http://www.webarchsrm.com" class="footer-img"><img src="webarch.png"></img></a>
</div>
</body>
</html>
