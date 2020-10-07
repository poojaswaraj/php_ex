<?php 
ob_start();
 include("config.php");

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['send']))
  {
  $eusername=$_POST['name'];
  $euseremail=$_POST['email'];
  $mobile=$_POST['mobile'];
  $website=$_POST['website'];
  $subject=$_POST['subject'];
  $msg=$_POST['msg'];
  
  $updated=mysql_query("UPDATE student SET 
	name='$eusername', email=' $euseremail', phone='$mobile' ,website='$website',subject='$subject',msg='$msg' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:index.php');
  }
}
}
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>

<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM student WHERE id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
   
    $username=$profile['name'];
    $useremail=$profile['email'];
	$userphone=$profile['phone'];
	$userwebsite=$profile['website'];
	$usersubject=$profile['subject'];
	$usermsg=$profile['msg'];
?>
<form action="" method="post" name="insertform">


<p>
  <label for="name" id="preinput">  NAME : </label>
  <input type="text" name="name" required placeholder="Enter your name" id="inputid"
  value="<?php echo $username; ?>" id="inputid" />
</p>
<p>
  <label  for="address" id="preinput"> EMAIL_ID : </label>
  <input type="email" name="email" required placeholder="Enter your Email" id="inputid" 
  value="<?php echo  $useremail?>" id="inputid" />
</p>
<p>
  <label for="mobile" id="preinput"> MOBILE NUMBER : </label>
  <input type="text" name="mobile" required placeholder="Enter your mobile number" id="inputid" 
  value="<?php echo $userphone; ?>" id="inputid" />
</p>
<p>
  <label for="email" id="preinput"> WEBSITE</label>
  <input type="text" name="website" required placeholder="Enter your  WEBSITE" id="inputid" 
  value="<?php echo $userwebsite ?>" id="inputid" />
</p>
<p>
  <label for="dob" id="preinput"> SUBJECT</label>
  <input type="subject" name="subject" required placeholder="Enter your SUBJECT" id="inputid" 
  value="<?php echo $usersubject  ?>" id="inputid" />
</p>
<p>
  <label for="dob" id="preinput"> MESSAGE</label>
  <input type="subject" name="msg" required placeholder="Enter your MSG" id="inputid" 
  value="<?php echo $usermsg ?>" id="inputid" />
</p>
<p>
  <input type="submit" name="send" value="Submit" id="inputid"  />
</p>
</form>
</div>
<?php } } ?>
</body>
</html>