<html>
  <head>
  <style>
  body
  {
    margin: 0;
    background-image:url('inspiration-geometry (1).png');
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
.login-button:link, .login-button:visited {
    -moz-border-radius:5px;  
  border-radius: 5px;  
  -webkit-border-radius: 5px;
    display: block;
    width: 115px;
    color: #FFFFFF;
    background-color: #1D314F;
    text-align: center;
    padding: 0px;
    text-decoration: none;
    text-transform: sentencecase;
}
.login-button:hover, .login-button:active {
    background-color: #1D314F;
}
input
{
    padding: 5px;
    border: solid 2px #c9c9c9;
    border-radius:5px;
    transition: border 0.3s;
}
  </style>
     <title> welcome to Linkzone</title>
	 
	         <script type="text/javascript">
var XMLHttpRequestObject =false;
if(window.XMLHttpRequest)
{

XMLHttpRequestObject=new XMLHttpRequest();
}
else if(window.ActiveXObject)
{
XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
}

function getData(divID1,divID2,divID3)
{
	
var txt1=document.getElementById("txt1");
var txt2=document.getElementById("txt2");
var txt3=document.getElementById("txt3");
if(XMLHttpRequestObject)
{

var obj1=document.getElementById(divID1);
var obj2=document.getElementById(divID2);
var obj3=document.getElementById(divID3);
XMLHttpRequestObject.open("GET","index.php?qu="+txt1.value+"&su="+txt2.value+"&ru="+txt3.value);
XMLHttpRequestObject.onreadystatechange=function()
{
if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200)
{
var temp=XMLHttpRequestObject.responseText;
alert(temp);
if(temp.trim()=='log')
{
window.location="http://localhost/home/home/home/home/skill.php";

//obj.innerHTML=temp;
}
else if(temp.trim()=='nolog')
{
obj1.innerHTML="<img class='img-class 'align='left' src='Capture.JPG' alt='Smiley face'width='12' height='12'>";
obj3.innerHTML="<img class='img-class' align='left' src='Capture.JPG' alt='Smiley face'width='12' height='12'>";
}
else if(temp.trim()=='capatcha')
{
obj2.innerHTML="<img class='img-class' align='left' src='Capture.JPG' alt='Smiley face'width='22' height=22'>";
}

}
}
XMLHttpRequestObject.send(null);
}
}
//-->
    </script>
  </head>
     <body  >
	 <?php
	 session_start();
	
	 
	 ?>
   <div class="header">
         <ul class="menu">
        <li><font face="verdana" size="4">Not yet registered?&nbsp &nbsp</font></li><li><font face="verdana" size="4"><a href="registration.php" class="login-button">Register</a></font></li>
        </ul>
      </div><br><br><br>
	 <center><fieldset>
				<form action="index.php" method="GET" >
   
   <table cellspacing="10" cellpadding="2" border="0">
 
 <tr>
   <td align="right"><font color="black"><b>User_id</b></font></td>
   <td><input type="text" name='qu' id='txt1'/></td>
 <td>
 <div id="targetDiv1">
<h4> </h4>
</div>
</td>
 </tr>
 
 <tr>
   <td align="right"><font color="black"><b>Password</b></font></td>
   <td><input type="password" name='su'  id='txt2' /></td>
   <td><div id="targetDiv3">
<h4> </h4>
</div></td>
 </tr>
  
   <tr>
   <td align="right"><font color="black"><b>Capatcha</b></font></td>
   <td><input type="text"  name='ru' id='txt3'> </td> <td><image src="image1.php"><br/></td>
   <td> <div id="targetDiv2">
<h4> </h4>
</div></td>
 </tr>
  
<tr >
<td align ="center" colspan="2" ><b><input type="submit"  value="click here" /></b></td>
</tr>
 </table>
</form></fieldset>
</center>

<div class="footer">
  <a href="http://www.webarchsrm.com">
      <img src="webarch.png" width="150px" height="40px" style="float:right;"></img></a>
</div>
	 </body>
</html>