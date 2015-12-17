<?php  
require_once 'dbConnect.php';  
session_start();  
    class dbFunction {  
            
        function __construct() {  
              
        
            $db = new dbConnect();;  
               
        }  
        
        function __destruct(){  
              
        }  
       
        public function Login($userid, $password){  
            $res = mysql_query("SELECT * FROM login WHERE user_id= '".$userid."' AND password = '".md5($password)."'");  
            $user_data = mysql_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysql_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['uid'] = $user_data['user_id'];  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        }
			public function create()
			{
			$tcreate="CREATE TABLE IF NOT EXISTS `recruit` (
  `fname` varchar(40) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `reg_no` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `year` int(3) DEFAULT NULL,
  `applyfor` varchar(30) DEFAULT NULL,
  `knowweb` varchar(120) DEFAULT NULL,
  `joinweb` varchar(120) DEFAULT NULL,
  `exceptweb` varchar(120) DEFAULT NULL,
  `user_id` varchar(13) NOT NULL,
  `password` varchar(13) NOT NULL,
  `verify` varchar(13) NOT NULL,
  PRIMARY KEY (`reg_no`),
  UNIQUE KEY `mobile_no` (`mobile_no`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
if (mysql_query($tcreate))
{
	return TRUE;
}
else
{
return FALSE;
}	
			}
public function insert($var1,$var2,$var3,$var7,$var19,$var8,$var9,$var10,$apply,$var16,$var17,$var18,$var4,$var6)
{
$tinsert="insert into recruit(fname,lname,reg_no,email,mobile_no,gender,department,year,applyfor,knowweb,joinweb,exceptweb,user_id,password) values('$var1','$var2','$var3','$var7',$var19,'$var8','$var9', $var10,'$apply','$var16','$var17','$var18','$var4','".md5($var6)."');";
if (mysql_query($tinsert))
{
	return TRUE;
}
else
{
return FALSE;
}
}

	}
?>  