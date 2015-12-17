<html>
  <head>
  <title> Admin Login </title>
  </head>
  <style>
  body
  {
    margin: 0;
    background-image:url('./img/inspiration-geometry (1).png');
    background-color:#1D314F;
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
  .img-class{
  padding-left:0px;
  }
  .footer
{
    width:100%;
    position:absolute;
    bottom:0;
    right:0;
    overflow:hidden;
    background-color: rgba(0,0,0,0.7);
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
    float: left;
}
fieldset {   
    border:none;
  -moz-border-radius:10px;  
  border-radius: 10px;  
  -webkit-border-radius: 10px;
  background-color:#f1f1f1;width:600px;
}
input
{
    padding: 5px;
    border: solid 2px #c9c9c9;
    border-radius:5px;
    transition: border 0.3s;
}
  </style>
<body>
<?php
session_start();
if(isset($_SESSION['adname']))
{
	header('location:profile.php');
}
else
{
?>
  <div class="header">
         <ul class="menu">
        <li></li>
        </ul>
      </div>
				<h1><font color="white"></font></h1>
			
				<h1>
	<center>
	<fieldset>
				<form action='' method='POST' >
   <div id="tab">
   <center>	<b>LOG IN </b> </center>
   <table cellspacing="10" cellpadding="2" border="0">
	
 <tr>
   <td align="right"><font color="black"><b>Admin Name</b></font></td>
   <td><input type="text" id='txt1' name='adname' /></td>
 <td>
 <div id="targetDiv1">
<h4> </h4>
</div>
</td>
 </tr>
 
 <tr>
   <td align="right"><font color="black"><b>Password</b></font></td>
   <td><input type="password" id='txt2' name='adpass' /></td>
   <td><div id="targetDiv3">
<h4> </h4>
</div></td>
 </tr>
  
   <tr>
   <td align="right"><font color="black"><b>  Domain</b></font></td>
   <td><select required="" name="addomain" id="">
                             				<option>select</option>
                            				<option>webdevelopment</option>
                            				<option>webdesigning</option>
                            				<option>vfx</option>
                            				<option> graphicdesigning</option>
											<option>appdevelopment</option>
                                    </select> </td> <br/></td>
   <td> <div id="targetDiv2">
<h4> </h4>
</div></td>
 </tr>
  
<tr >
<td align ="center" colspan="2" ><b><input type="submit"  value="click here"  /></b></td>
</tr>
 </table>
 </div>
</form>
</fieldset>
</center>
<?php
}
error_reporting(0);

if($_POST['adname'] && $_POST['adpass'] && $_POST['addomain'])
{

$check=0;	
require_once 'dbConnect.php';
$db = new dbConnect();
$sql= "select password from adminlogin where name='".$_POST['adname']."' and domain='".$_POST['addomain']."'";
$result=mysql_query($sql);
if($result)
{
	//echo "dfdfdfdfdfdfdf";
while($query=mysql_fetch_assoc($result))
{	
$check=1;

	if($query['password']==$_POST['adpass'])
	{
		session_start();
	  $_SESSION['adname']=$_POST['adname'];
	 header('location:profile.php');
	 
	}
	else
	{
	 ?>
	 
	
	 <div id='abc' >wrong password </div>
	 <?php
	}
	
	
}
if($check==0)
{
 print "<div id='abc' >wrong admin name  or domain</div>";
}

}
else
{
	
	
	   //echo "DB Error, could not query the database\n";
    //echo 'MySQL Error: ' . mysql_error();
}

}
?>
<div class="footer">
  <a href="http://www.webarchsrm.com">
      <img src="./img/webarch.png" width="150px" height="40px" style="float:right;"></img></a>
</div>
	 </body>
</html>