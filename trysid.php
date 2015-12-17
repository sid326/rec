<html>
<head>
	<title></title>
	<style type="text/css">
	.m
	{
		background-color: red;
		color: yellow;
		border:2px solid black;

	}
	.m:hover
	{
		background-color: yellow;
		color: red;
		cursor: hand;
	}
	#option
	{
		margin: 1em;
	}
	#option:hover
	{
		color: green;
	}
	#sub
	{
		margin: 0%;
		margin-left: -100%;
	}
	#sub:hover
	{
		cursor:hand;
	}
	</style>
</head>
<body>

</body>
</html>
<?php 
require_once 'dbConnect.php';
session_start();
if(isset($_SESSION['user']))
{	
if(isset($_GET['qu']))
{
$i=$_GET['qu'];
$arr1 = str_split($i);
//print_r($arr1);
foreach($arr1 as $str)
{
if(is_numeric($str))
{
if(!isset($temp1))
{
$temp1=$str;
}
else
{
$temp1=$temp1.$str;
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
	//$_SESSION['a']=$temp1;
	echo "<div style='width:96%;height:30%;background-color:white;margin:1% 0% 2% 2%;border:2px double black; font-size:100%;'><center>";
	echo "<b><i><u>Question ".$temp1."</b></i></u><br/>"."<br/></center>";
	$db = new dbConnect();
	//$query="select * from""where id=".$temp1.";";
	$query="SELECT * FROM `{$temp2}` WHERE `id`='$temp1'";
	
	 if($data=mysql_query($query))
     {
	  while($a=mysql_fetch_array($data))
	  {   
    echo "<b>".$a['qu_desc']."</b></div><hr>";
	$temp=$i;
	if(!isset($_SESSION[$temp]))
	{
	//echo $temp;	
	echo "<div style='width:96%;height:60%;background-color:silver;margin:0% 0% 0% 2%;border:2px double black; color:black;font-weight:500; font-size:100%;'><br/>";
	echo"<input type='radio' name='".$i."' id='m1' value='a' onclick='myFunction1()'>";
	echo "<label for='m' id='option'>".$a['ans1']."</label>"."<br/><br/>";
    echo"<input type='radio' name='".$i."' id='m2' value='b' onclick='myFunction2()'>";
	echo "<label for='n' id='option'>".$a['ans2']."</label>"."<br/><br/>";
	 echo"<input type='radio' name='".$i."' id='m3' value='c' onclick='myFunction3()'>";
	echo "<label for='o' id='option'>".$a['ans3']."</label>"."<br/><br/>";
    echo"<input type='radio' name='".$i."' id='m4' value='d' onclick='myFunction4()'>";
    echo "<label for='p' id='option'>".$a['ans4']."</label>"."<br>";
    echo "</div>";
	$j=$temp1+1;
	if($j<'13')
	echo  "<button id='sub' value='".$temp2.$j."' onclick='my4()'>Next</button>";	
	}
	else
	{
		if($_SESSION[$temp]=='a')
		{
	echo "<input type='radio' name='".$i."' id='m1' value='a' checked='checked' onclick=''>";
	echo "<label for='m'>".$a['ans1']."</label>"."<br/>";
		}
			else
			{
					echo "<input type='radio' name='".$i."' id='m1' value='a' onclick='myFunction1()'>";
					echo "<label for='m'>".$a['ans1']."</label>"."<br/>";
			}
			if($_SESSION[$temp]=='b')
		{
	echo "<input type='radio' name='".$i."' id='m2' value='b' checked='checked' onclick='' >";
	echo "<label for='n'>".$a['ans2']."</label>"."<br/>";
		}
			else
			{
			echo "<input type='radio' name='".$i."' id='m2' value='b' onclick='myFunction2()'>";
	echo "<label for='n'>".$a['ans2']."</label>"."<br/>";		
			}
				if($_SESSION[$temp]=='c')
		{
	echo "<input type='radio' name='".$i."' id='m3' value='c' checked='checked' onclick=''>";
	echo "<label for='o'>".$a['ans3']."</label>"."<br/>";
		}
			else
			{
			echo "<input type='radio' name='".$i."' id='m3' value='c' onclick='myFunction3()' >";
	echo "<label for='o'>".$a['ans3']."</label>"."<br/>";
			}
			
		if($_SESSION[$temp]=='d')
		{
	echo "<input type='radio' name='".$i."' id='m4' value='d' checked='checked' onclick='' >";
    echo "<label for='p'>".$a['ans4']."</label>"."<br/>";
	
		}
			else
			{
	echo "<input type='radio' name='".$i."' id='m4' value='d' onclick='myFunction4()' >";
    echo "<label for='p'>".$a['ans4']."</label>"."<br/>";
	
			}
		$j=$temp1+1;	
		if($j<'13')
		echo  "<button id='sub' value='".$temp2.$j."' onclick='my4()'>Next</button>";	
	}		
	  }
	
	 }
		if($temp1=='12')
		{
			echo "<form action='review.php'  method='get'>";
			//print "<button id='sub' onclick='my2()'>Submit </button>";
			echo "<button id='sub' type='submit'  name='domain' value='".$temp2."'> Submit</button>"."</br>";
			 echo "</form>";
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