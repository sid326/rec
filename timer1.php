<?php
session_start();
if(isset($_SESSION['user']))
{	
if(!isset($_SESSION['ad'])&&!isset($_SESSION['ad']))
{
$_SESSION['ad']=12;
$_SESSION['as']=59;
print $_SESSION['ad'].":".$_SESSION['as'];
}
else
{	
if($_SESSION['as']>0)
{	
$_SESSION['as']--;
print $_SESSION['ad'].":".$_SESSION['as'];
}
else
{
if($_SESSION['ad']>0)
{	
$_SESSION['ad']--;	
$_SESSION['as']=59;
print $_SESSION['ad'].":".$_SESSION['as'];
}
else
{
print "contest time is over";	
}	
}
}
}
?>