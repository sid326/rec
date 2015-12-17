<!DOCTYPE html>
<?php
include('class/mysql_crud.php');
error_reporting(0);
$db = new Database();
$db->connect();
$register=1031310418;
 $db->select('reg','*',NULL,'regno="1031310326"',NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
 $res = $db->getResult();
?>
<html>
<head>
	<title>Applicant profile</title>
	<style type="text/css">
body
{
	margin: 0px;
	padding: 0px;
	background:fixed;
	background-color: #1d314f;
	background-image: url('bc.png');
}
.logbutton
{
	width: 50%;
	height: 100%;
	float: right;
	background-color: red;

}
.profilebutton
{
	width: 50%;
	height: 100%;
	float: right;
	background-color: green;
}
.but
{
	margin:2em;
	width: 50%;
}
.but:hover
{
	background-color: yellow;
}
.contain
{
	background-color: white;
}
.header
{
	background-color: #393939;
}
.feild
{
	width: 50%;
}
	</style>

</head>
<body>
<div class="header">
	<table border="5" cellspacing="5" width="100%" height="20%">
		<tr style="height:81px;">
			<td colspan="2" width="100px"></td>
			<td width="30%">
				<table width="100%" height="100%" cellspacing="1" border="1">
					<tr height="15px">
						<td></td>
					</tr>
					<tr height="51px">
						<td>
							<div class="logbutton">
								<input type="button" value="logout" name="logout" class="but">
							</div>
							<div class="profilebutton">
								<input type="button" value="profile" name="profile" class="but">
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<div class="container"><center>
	<table cellspacing="5" width="80%" height="540px" style="margin:3em;background-color:white;border-radius:2em; ">
		<tr heigth="20%">
			<td width="25%">
				<table width="100%" height="100%" border="2" cellspacing="5">
					<tr rowspan=3 height="15%">
						<td width="50%">
							Online Exam Marks:
						</td>
						<td width="50%">
							<?php
							  if($res[0][onn]!=NULL)
							  {
							  echo $res[0][onn];
							  }
							  else
							  {
							  	?>
							  	<input type="text" name="onlinemarks" class="feild">
							  	<input type="submit">
							  	<?php
							  }
							?>
						</td>
					</tr>
					<tr height="15%">
						<td width="50%">
							HR marks
						</td>
						<td width="50%">
							<?php
							  if($res[0][hr]!=NULL)
							  {
							  echo $res[0][hr];
							  }
							  else
							  {
							  	?>
							  	<input type="text" name="onlinemarks" class="feild">
							  	<input type="submit">
							  	<?php
							  }
							?>
						</td>
					</tr>
					<tr height="15%">
						<td width="50%">
							Technical Marks
						</td>
						<td width="50%">
							<?php
							  if($res[0][technical]!=NULL)
							  {
							  echo $res[0][technical];
							  }
							  else
							  {
							  	?>
							  	<input type="text" name="onlinemarks"class="feild">
							  	<input type="submit">

							  	<?php
							  }

							?>
						</td>
					</tr>
				</table>
			</td>
			<td width="75%">
				<table border="2" cellspacing="5" width="100%" height="100%">
					<tr height="20%">
						<td colspan="2"><center><?php echo $res[0][name];?></center></td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Registration number:
						</td>
						<td width="50%">
							<?php echo $res[0][regno];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Branch:
						</td>
						<td width="50%">
							<?php echo $res[0][branch];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Year:
						</td>
						<td width="50%">
							<?php echo $res[0][year];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Currently working group:
						</td>
						<td width="50%">
							<?php echo $res[0][cwg];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							questions wrong:
						</td>
						<td width="50%">
							<?php echo $res[0][wq];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Technology Known:
						</td>
						<td width="50%">
							<?php echo $res[0][tech];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Apply for:
						</td>
						<td width="50%">
							<?php echo $res[0][apply];?>
						</td>
					</tr>
					<tr heigth="10%">
						<td width="50%">
							Experience(in years):
						</td>
						<td width="50%">
							<?php echo $res[0][exe];?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
</body>
</html>