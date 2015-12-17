<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['adname']))
{
	header('location:adminlogin.php');
}

?>
<html>
<head>
	<title>Admin Panel</title>
	<style type="text/css">
	input{
		
	}
		
body
{
	
	background-color: #1d314f;
	
}
.logbutton
{
	
	width: 50%;
	height: 100%;
	float: right;
		

}
.profilebutton
{
	width: 90%;
	height: 100%;
	float: right;
	background-color: green;
}
.but
{
	border: 1px solid 	#ccff99;
	margin:2em;
	width: 80%;
	height: 50%;
	  background-color: #675939;
	  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
}
.but1
{
		border: 1px solid  #ccff99;	
	margin:1em;
	width:170px;
	height: 40px;
	 -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
  background-color: #675939;
  
}
.but:hover
{
	
	background-color: #e67300;
}
.but1:hover
{
	
	background-color: #e67300;
}
.contain
{
	background-color: white;
}


.al1
{
	
	border: 1px solid red;
	background-color: #393939;

}

.hi{
//	 border: 1px solid white;
	float:left;
	width:10%;
}

#asd{
	background-color: #675939;
margin:2em;
 border-radius:2em;
 border: 1px solid white;
}

#asd1{
 border-radius:2em;	

}	
.hi2{	
font-size:40px;

}
#txt1 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
}
#txt1:hover
{
background-color: #e67300;
}

#txt2 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 10px;
}
#txt2:hover
{
background-color: #e67300;
}
#txt3 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
}
#txt3:hover
{
background-color: #e67300;
}

#txt4
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 10px;
}
#txt4:hover
{
background-color: #e67300;
}

#txt5 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
}
#txt5:hover
{
background-color: #e67300;
}

#txt6 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 10px;
}
#txt6:hover
{
background-color: #e67300;
}
#txt7 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 10px;
}
#txt7:hover
{
background-color: #e67300;
}
#txt8 
{
		 -moz-border-radius: 50px;
  -webkit-border-radius: 10px;
}
#txt8:hover
{
background-color: #e67300;
}
#demo{
background-color:#e67300;
}
#tab3
{
float:right;
}



	</style>
<script>
var XMLHttpRequestObject =false;
if(window.XMLHttpRequest)
{
//alert("gh");
XMLHttpRequestObject=new XMLHttpRequest();
} 
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}

function getdata()
{
//alert("dffffffff");
//var txt1=document.getElementById('txt1');
//var x1= document.getElementsByName(txt1)[0].value;
var txt2=document.getElementById('txt2').name;

var x1= document.getElementsByName(txt2)[0].value;
if(x1=="")
{
alert("please fill out the question");
return false;
}
var txt3=document.getElementById('txt3').name;
var x2= document.getElementsByName(txt3)[0].value;
if(x2=="")
{
alert("please fill out the option1");
return false;
}
var txt4=document.getElementById('txt4').name;
var x3= document.getElementsByName(txt4)[0].value;
if(x3=="")
{
alert("please fill out the option2");
return false;
}

var txt5=document.getElementById('txt5').name;
var x4= document.getElementsByName(txt5)[0].value;
if(x4=="")
{
alert("please fill out the option3");
return false;
}
var txt6=document.getElementById('txt6').name;
var x5= document.getElementsByName(txt6)[0].value;
if(x5=="")
{
alert("please fill out the option4");
return false;
}
var txt7=document.getElementById('txt7').name;
var x6= document.getElementsByName(txt7)[0].value;
if(x6=="")
{
alert("please fill out the correct answer");
return false;
}
if(XMLHttpRequestObject)
{
	
	var obj1=document.getElementById("demo");
	XMLHttpRequestObject.open("GET","question.php?qu="+x1+"&su="+x2+"&ru="+x3+"&tu="+x4+"&mu="+x5+"&gu="+x6);
	XMLHttpRequestObject.onreadystatechange=function()
	{
				//alert("hhi");
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
<body>


	<table border="0" cellspacing="5" width="100%" height="20%">
		<tr style="height:70pxpx;">
			<td colspan="2" width="70px"> </td>
			<td colspan="2" width="70px"> <i><h1 class="hi2" > <center>Welcome to admin panel </center></h1></i></td>
			 
			<td width="30%">
				
				
					
				
							<div class="logbutton">
							<a href='logout_admin.php' ><button type="button" value="logout" name="logout" class="but"> <i><h3>Logout</h3></i>	</button></a>
							</div>
							

					
			
			</td>
		</tr>
	</table>
<div class="hi">
<form action="">  
<input type="submit" value="admin profile" name="log" class="but1"><br/>
<input type="submit" value="upload question" name="log" class="but1">
<input type="submit" value="interview candidates" name="log" class="but1">
</form>
</div>
<center>
<div class="al1">
	<table id="asd" cellspacing="" width="50%" height="540px">
		<tr heigth="20%">
			
			<td width="75%">
		
			<?php
			error_reporting(0);
			if($_GET['log']=="admin profile" ||	!isset( $_GET['log'])	)
			{	
				require_once 'dbConnect.php';
				$db = new dbConnect();
				$sql="select * from admin where name='".$_SESSION['adname']."'";
				$result=mysql_query($sql);
				if($result)
				{
				while($row=mysql_fetch_assoc($result))
				{
					
			?>
			
					<table id="asd1" border="1"  cellspacing="5" cellpadding="3" width="100%" height="100%">
					<tr height="20%">
						<td colspan="2"><center> <h1> Admin Profile </center></h1></td>
						<td  colspan="5" rowspan="1"> <img width="100%" height="70%" src='./img/download.jpg'> </td>
					</tr>
						<tr heigth="10%">
						<td width="50%">
							Name 
						</td>
						<td colspan="2" width="50%">
					<?php
					print $row['name'];
					
					?>
						</td>
					</tr>
		
					<tr heigth="10%">
						<td width="50%">
							Registration number:
						</td>
						<td colspan="2" width="50%">
							<?php
					print $row['reg_no'];
					
					?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Branch:
						</td>
						<td colspan="2" width="50%">
						<?php
					print $row['branch'];
					
					?>	
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Year:
						</td>
						<td colspan="2"  width="50%">
							<?php
					print $row['year'];
					
					?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Domain
						</td>
						<td colspan="2"  width="50%">
					<?php
					print $row['domain'];
					
					?>
						</td>
					</tr>
					
				
					<tr heigth="10%">	
						<td width="50%">
							
						</td>
						<td colspan="2" width="50%">
							
						</td>
					</tr>
		
				</table>
				<?php
				}
				}
			}
			elseif($_GET['log']=="upload question")
			{
			?>
	
			<center>
			<form >	
				<table cellspacing="5" width="50%" height="400" id="tabl">
				<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Domain:</b></font>
					</td>
					 <td width="60%">
						<?php
						require_once 'dbConnect.php';
						$db = new dbConnect();
						$sql="select domain from adminlogin where name='".$_SESSION['adname']."'";
						$result=mysql_query($sql);
						if($result)
						{
	
						while($query=mysql_fetch_assoc($result))
						{
							print "<h3><b>".$query['domain']."</b></h3>";
						}
						}
						
						
						?>
					</td>
				</tr>
				<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Enter question:</b></font>
					</td>
					<td width="60%">
						<textarea rows="4" columns="100" name="que" id="txt2" required=""></textarea>
					</td>
				</tr>
				<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Enter option1:</b></font>
					</td>
					<td width="60%">
						<input type="text" name="opt1" id="txt3" required="">
					</td>
				</tr>
				<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Enter option2:</b></font>
					</td>
					<td width="60%">
						<input type="text" name="opt2" id="txt4" required="">
					</td>
				</tr>
				<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Enter option3:</b></font>
					</td>
					<td width="60%">
						<input type="text" name="opt3" id="txt5"  required="">
					</td>
				</tr>
				<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Enter option4:</b></font>
					</td>
					<td width="60%">
						<input type="text" name="opt4"  id="txt6" required="">
					</td>
				</tr>
					<tr height="30" width="100%">
                    <td width="40%" id="">
						<font size="2" face="verdana"><b>Enter correct answer:</b></font>
					</td>
					<td width="60%">
						<input type="text" name="ca" id="txt7" required="">
					</td>
				</tr>
				<tr height="30" width="100%">
                    <td width="40%" id="">
                    	<font size="2" face="verdana"><b>Enter explanation:</b></font>
                    </td>
                    <td width="60%">
                    	<textarea rows="4" columns="100" id="txt8" required=""></textarea>
                    </td>
                </tr>
 				<tr height="30" width="100%">
 					<td width="100%">
 						<button type="button" class="but1" onclick="getdata();" >Submit</button>
 					</td>
					<td>
					<div id="demo">	</div>
					</td>
 				</tr>
			</table>
			</form>
			<?php
			}
			
			elseif($_GET['log']=="interview candidates")
			{
				
				print "<center><h2>here are your  interview candidates<h2>	";
				error_reporting(0);
				require_once 'dbConnect.php';
						$db = new dbConnect();
						$sql="select domain from adminlogin where name='".$_SESSION['adname']."'";
						$result=mysql_query($sql);
						if($result)
						{
	
						while($query=mysql_fetch_assoc($result))
						{
							$domain=$query['domain'];
						}
						}
						else
					{
						print mysql_error();
					}
					$sql1="select count(id) as temp  from admin where domain='".$domain."';";
					$result1=mysql_query($sql1);
					if($result1)
					{
						while($query=mysql_fetch_assoc($result1))
						{
							$len=$query['temp'];
						}
					}
					else
					{
						print mysql_error();
					}
					$sql1="select count(id) as temp1  from score where domain='".$domain."';";
					$result1=mysql_query($sql1);
					if($result1)
					{
						while($query=mysql_fetch_assoc($result1))
						{
							$len1=$query['temp1'];
						}
					}
					else
					{
						print mysql_error();
					}
					$sql1="select id from admin where name='".$_SESSION['adname']."' and domain='$domain'";
					$result1=mysql_query($sql1);
					if($result1)
					{
						while($query=mysql_fetch_assoc($result1))
						{
							$k=$query['id'];
						}
					}
					else
					{
						print mysql_error();
					}
					
					$sql1="select id  from admin where domain='".$domain."';";
					$result1=mysql_query($sql1);
					if($result1)
					{
						$i=0;	
						while($query=mysql_fetch_assoc($result1))
						{
							$temp[$i]=$query['id'];
							$i++;
						}	

					}
					else
					{
						print mysql_error();
					}
					$sql1="select id   from score where domain='".$domain."';";
					$result1=mysql_query($sql1);
					if($result1)
					{
						$k1=0;	
						while($query=mysql_fetch_assoc($result1))
						{
							$temp1[$k1]=$query['id'];
							$k1++;	
						}	

					}
					else
					{
						print mysql_error();
					}
					
											$i=0;
							//$len=count($temp);
							//$len1=count($temp1);
							if($len1<$len)
							{
							$div=$len;
							}
							else
							{
							$div=floor($len1/$len);
							}
							//print $div." "."<br/>";	
							$j=0;
							while($i!=$len)
							{
							if($temp[$i]==$k && $i!=$len-1)
							{
									
							for($l=$j;$l<=$j+$div-1;$l++)
							{
									$sql=" select reg_no from recruit where user_id in (select user from score where id=$temp1[$l])";
							$result1=mysql_query($sql);
					if($result1)
					{
						
						
						while($query=mysql_fetch_assoc($result1))
						{?>
				
				
						<a href="profile1.php"><b> <p><?php print $query['reg_no']; ?></p></b></a>		
						<?php
						}
					}
					
					
							}
						
							
							print "<table  cellspacing='5' width='50%' height='400' id='tabl'	>";
							break;
							}
							else if($temp[$i]==$k && $i==$len-1)
							{
						
							for($l=$j;$l<=$len1;$l++)
							{
							//print $temp1[$l];
							$sql=" select reg_no from recruit where user_id in (select user from score where id=$temp1[$l])";
							$result1=mysql_query($sql);
					if($result1)
					{
						while($query=mysql_fetch_assoc($result1))
						{
							?>
			
						<a href="profile1.php"><b><p> <?php print $query['reg_no']; ?></p></b></a>
		
						<?php
						}
					}
					
					
							}
							
							print "<table  cellspacing='5' width='50%' height='400' id='tabl'>";
							break;
							}
							else
							{
							$i++;
							$j=$j+$div;
							}
							}
				print "</center>";			
			}
			
			?>
			
			</td>
		</tr>
	</table>
	</div>
</center>
</body>
</html>