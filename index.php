<?php  
include_once('dbFunction.php');  
    $funObj = new dbFunction();  
    if($_GET['qu'] && $_GET['su'])
	{
        $userid= $_GET['qu'];  
        $password = $_GET['su'];  
        $user = $funObj->Login($userid, $password);  
			if ($user){  
        if(($_SESSION['randm'])==($_GET['ru']))
		{
			$_SESSION['user']=$userid;
			//echo "log";
			
			$x=$_SESSION['randm'];
	      header("location:skill.php");
		
		}
		else
		{
			
		//echo "capatcha";
			//echo '<br/>';
            //$_SESSION['randm']=$text;	
            
            $x=$_SESSION['randm'];
header("location:login1.php");			
		}
             
        } else {  
         header("location:login1.php");	
           //echo"nolog";  
        }
}
else
{
header('location:login1.php');
}  
    

?>