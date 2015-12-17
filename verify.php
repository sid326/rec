<?php
require_once 'dbConnect.php'; 
 $db = new dbConnect();
if($_GET['qu'])
{
if($_GET['su']=="reg_no")
{	
$result = mysql_query("SELECT * FROM recruit where reg_no=".$_GET['qu'].";");
}
else if($_GET['su']=="user_id")
{
$result = mysql_query("SELECT * FROM recruit where user_id='".$_GET['qu']."';");

}
else if($_GET['su']=="mobile_no")
{
$result = mysql_query("SELECT * FROM recruit where mobile_no=".$_GET['qu'].";");

}
else if($_GET['su']=="email")
{
$result = mysql_query("SELECT * FROM recruit where email='".$_GET['qu']."';");

}
else
{
}

if($result)
{

$num_rows = mysql_num_rows($result);
if($num_rows!=0)
{
echo "not avialable";
}
else
{
	echo "available";
}

}
else
{
echo mysql_error();
}

}
?>