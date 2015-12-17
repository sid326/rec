<!DOCTYPE html>
<?php
include_once('dbFunction.php');
error_reporting(0);
?>
<html lang="en">
<link rel="stylesheet" type="text/css" href="login.css">
<head>
	<title>Registraion form</title>
	<script>
	var XMLHttpRequestObject =false;
if(window.XMLHttpRequest)
{
XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}
function myFunction1(divid1,divid2){
//alert("hi");	
var x=document.getElementById(divid1).name;
var x1= document.getElementsByName(x)[0].value;
	 //document.getElementById("demo1").innerHTML = x;
if(XMLHttpRequestObject)
{
var obj1=document.getElementById(divid2);
XMLHttpRequestObject.open("GET","verify.php?qu="+x1+"&su="+x);    
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
	</script>
</head>
<body style="background-image:url('inspiration-geometry (1).png');background-color:#1D314F;margin:0;">
    <div class="header">
        <ul class="menu">
        <li><font face="verdana" size="4">Already registered?&nbsp &nbsp</font></li><li><font face="verdana" size="4"><a href="login1.php" class="login-button">Login</a></font></li>
        </ul>
    </div><br>
	<form action="" method="POST">
	<center> <fieldset style="background-color:#f1f1f1;width:700px">
		<table cellspacing="2" width="50%" height="400" id="tab">
            
                            <tr height="30" width="80%">
                                <td width="50%" id="">
                                	<label for="firstname">
                                    	<i><b><p class="">First Name:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%">
                                    <input type="text" id="" name="fname" required="" maxlength="20" pattern="^[a-zA-Z]+$" title="Example:siddhant" placeHolder="First name"/>
                                </td>
                            </tr>
                            <tr height="30" width="80%">
                                <td width="50%" id="">
                                	<label for="lastname">
                                    	<i><b><p class="">Last Name:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%">
                                    <input type="text" id="" name="lname" required="" maxlength="20" pattern="^[a-zA-Z]+$" title="Example:sharma" placeHolder="Last name"/>
                                </td>
                            </tr>
                            <tr height="30" width="80%" >
                                <td width="50%" id="">
                                	<label for="college id">
                                    	<i><b><p class="">College Id:</p></b></i></td>
                                    </label>
                                <td width="50%">
                                    <input type="text" id="asd" onkeyup="myFunction1('asd','demo')" name="reg_no" required="" maxlength="20" pattern="^[a-zA-Z0-9]{8,15}" title="Example:1031310418" placeHolder="College Id"/>
                                    <span id="msg"></span>
                                </td>
								
								<td >
								<div id="demo">
								
								</div>
								</td>
                            </tr>
							<tr height="30" width="80%" >
                                <td width="50%" id="">
                                	<label for="college id">
                                    	<i><b><p class="">Set user name </p></b></i></td>
                                    </label>
                                <td width="50%">
                                    <input type="text" id="txt4" onkeyup="myFunction1('txt4','targetDiv2')" name="user_id" required="" maxlength="13" pattern="^[a-zA-Z0-9]{8,15}"  placeHolder="User id"/>
                                    <span id="msg"></span>
                                </td>
								<td><div id="targetDiv2">
<h4> </h4>
</div></td>
                            </tr>
							 <tr height="30" width="80%" >
                                <td width="50%" id="">
                                	<label for="password">
                                    	<i><b><p class="">Set Password</p></b></i></td>
                                    </label>
                                <td width="50%">
                                    <input type="password" id="txt5" name="password" required="" maxlength="13" pattern="^[a-zA-Z0-9]{8,15}"  placeHolder="password"/>
                                    <span id="msg"></span>
                                </td>
                            </tr>
                            <tr height="30" width="80%">
                                <td width="50%" id="">
                                	<label for="email">
                                    	<i><b><p class="">Email:</p></b></i></td>
                                    </label>
                                <td width="50%">
                                    <input type="email" name="email" onkeyup="myFunction1('txt6','targetDiv3')" id="txt6" required="" maxlength="30" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeHolder="Email"/>
                                </td>
																<td><div id="targetDiv3">
<h4> </h4>
</div></td>
                            </tr>
                            <tr height="30" width="80%">
                                <td width="50%" id="">
                                <label for="mobile number">
                                    	<i><b><p class="">Mobile No.:</p></b></i>
                                </label>
                                </td>
                                <td width="50%">
                                    <input type="text" name="mobile_no" id="txt7" onkeyup="myFunction1('txt7','targetDiv4')" required="" pattern="^[0-9]{10}$" maxlength="10" placeHolder="Mobile No">
                                </td>
								<td><div id="targetDiv4">
<h4> </h4>
</div></td>
                            </tr>
                            <tr height="30" width="80%">
                                <td width="50%" id="">
                                <label for="gender">
                                    <i><b><p class="">Gender:</p></b></i>
                                 </label>
                                </td>
                                <td width="50%">
                                    <b>Male<input type="radio" name="gen" value="male" id="" required="" maxlength="6"></b>
                                    <b>Female<input type="radio" name="gen" value="female" id="" required="" maxlength="6"></b>
                                </td>
                            </tr>
                            <tr height="30" width="80%" >
                                <td width="50%" id="">
                                	<label for="Department">
                                    	<i><b><p class="">Dept:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%">
                                    <input type="text" name="dept" id="" required="" maxlength="10" pattern="^[a-zA-Z]+$" placeHolder="Department">
                                </td>
                            </tr>
                            <tr height="30" width="80%" >
                                <td width="50%" id="">
                                	<label for="year">
                                           <i><b><p class="">Year:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%">
                                    <select required="" name="year" id="" required="">
                             				<option>select</option>
                            				<option>1</option>
                            				<option>2</option>
                            				<option>3</option>
                            				<option>4</option>
                                    </select>
                                </td>
                            </tr>
                            <tr height="80" width="80%">
                                <td width="50%" id="">
                                	<label for="position">
                                    	<i><b><p class="">Apply for:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%"><br>
                                    <b><input type="checkbox" name="gen1" value="webdevelopment" id="" />Web Developer</b><br>
                                    <b><input type="checkbox" name="gen2" value="webdesigning" id="" />Web Designing</b><br>
                                    <b><input type="checkbox" name="gen3" value="graphicdesigning" id="" />Graphic Designing</b><br>
                                    <b><input type="checkbox" name="gen4" value="vfx" id=""/>Vfx</b><br>
                                    <b><input type="checkbox" name="gen5" value="appdevelopment" id="" />App Development</b>
                                </td>
                            </tr>
                            <tr height="80" width="80%">
                                <td width="50%" id="">
                                	<label for="position">
                                    	<i><b><p class="">How do you know about WebArch:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%"><br>
                                    <textarea name="knowweb" required="" minimum="30" maximum="100"></textarea>
                                </td>
                            </tr>
                            <tr height="80" width="80%">
                                <td width="50%" id="">
                                	<label for="position">
                                    	<i><b><p class="">Why do you want to join WebArch:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%"><br>
                                    <textarea name="joinweb" required="" minimum="30" maximum="100"></textarea>
                                </td>
                            </tr>
                            <tr height="80" width="80%">
                                <td width="50%" id="">
                                	<label for="position">
                                    	<i><b><p class="">What do you expect from WebArch:</p></b></i>
                                    </label>
                                </td>
                                <td width="50%"><br>
                                    <textarea name="exceptweb" required="" minimum="30" maximum="100"></textarea>
                                </td>
                            </tr>
                            <tr height="80px">
                                <td colspan="2" width="100%">
                                     <div class="button-wrapper">
                                          <input type="submit" />
                                            
                                       
                                     </div>
                                </td>
                            </tr>
                         </center>
                     </table></fieldset>
	</center>
	</form>
<?php


if($_POST['fname'] && $_POST['lname'] && $_POST['reg_no'] && $_POST['user_id'] && $_POST['mobile_no'] &&   $_POST['password'] && $_POST['email'] && $_POST['gen'] && $_POST['dept'] && $_POST['year'] && $_POST['knowweb'] && $_POST['joinweb'] && $_POST['exceptweb'] && ($_POST['gen1'] ||  $_POST['gen2'] ||$_POST['gen3'] || $_POST['gen4'] || $_POST['gen5'] ))
{
	
$var1 = $_POST["fname"];
$var2 = $_POST["lname"];
$var3 = $_POST["reg_no"];
$var4 = $_POST["user_id"];
$var6 = $_POST["password"];
$var7 = $_POST["email"];
$var8 = $_POST["gen"];
$var9 = $_POST["dept"];
$var10 = $_POST["year"];
$var11= $_POST["gen1"];
$var12 = $_POST["gen2"];
$var13 = $_POST["gen3"];
$var14 = $_POST["gen4"];
$var15 = $_POST["gen5"];
$var16 = $_POST["knowweb"];
$var17 = $_POST["joinweb"];
$var18 = $_POST["exceptweb"];
$var19= $_POST["mobile_no"];
$apply = $var11.$var12.$var13.$var14.$var15;
 $funObj = new dbFunction();  
     
				$register1=$funObj->create();
				if($register1)
				{
					$register2=$funObj->insert($var1,$var2,$var3,$var7,$var19,$var8,$var9,$var10,$apply,$var16,$var17,$var18,$var4,$var6);
					if($register2)
					{
					$token=sha1(uniqid($var4,true));
					$time=$_SERVER['REQUEST_TIME'];
					$sql="insert into verify(token,username,tstamp) values('$token','$var4',$time)";
					$result=mysql_query($sql);
					if($result)
					{
						
						$to  = $var7; // note the comma


// subject
$subject = 'activate your account(Webarch recruitment)';

// message
$message = "
<html>
<head>
  <title>activate</title>
</head>	
<body>
  <p>please activate your account to furthur login to portal by clicking in the following link</p>
	<a href='http://localhost/home/home/home/home/activate.php?token=$token'>click here please</a>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Recruitment <siddhant@sidsms.netne.net>'. "\r\n";

// Mail it
if(mail($to, $subject, $message, $headers))
{				
echo "<script>alert('registration succesful you will receive  a verification link to your registered email id ');</script>";
}
else
{
	echo "<script>alert('email not sent ');</script>";
}	
					}
					}
					else
					{
						echo "<script>alert('registration unsucessful please try again');</script>";
					}
					
				}
}
					
				
?>
    <div class="foot">
        <a href="http://www.webarchsrm.com/"><img src="webarch.png" width="150px" height="40px" style="float:right;"></img></a>
    </div>
</body>
</html>