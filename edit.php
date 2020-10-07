<?php 
include('config.php');

if(isset($_GET['id']))
{
  $id=$_GET['id'];
  if(isset($_POST['submit']))
  { 
    $eusername=$_POST['name'];
   $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="upload/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	
  $euseremail=$_POST['email']; 
  $mobile=$_POST['phone'];
  $website=$_POST['website'];
  $subject=$_POST['subject'];
  $msg=$_POST['msg'];
  $pass=$_POST['password'];
  if(move_uploaded_file($file_loc,$folder.$final_file))
	{
  $updated=mysql_query("UPDATE student SET 
	name='$eusername', img='$final_file',email='$euseremail', phone='$mobile' ,website='$website',subject='$subject',msg='$msg',password='$pass' WHERE id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  
  }
}
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
<?php 
  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
  $getselect=mysql_query("SELECT * FROM student WHERE id='$id'");
  $profile=mysql_fetch_array($getselect);
   
    $username=$profile['name'];
	
	
	$euserimg=$profile['img'];
	
    $useremail=$profile['email'];
	$userphone=$profile['phone'];
	$userwebsite=$profile['website'];
	$usersubject=$profile['subject'];
	$usermsg=$profile['msg'];
	$pass=$profile['password'];
  }
  
?>
<div>
<form class="form-style-9"  method="post" enctype= "multipart/form-data">
<ul>
<p>
    <input type="text" name="name"  placeholder="Name" value="<?php echo $username; ?>" id="inputid" />
	</p>
	<p>
	
	<input type="file" name="file" id="logo" onchange="readURL(this);">
<img id="blah" src="upload/<?php echo $euserimg; ?>" alt="your logo" width=100 height=100 />
<!--<input type='file' name='file' placeholder="Photo" required="" ><?php echo $euserimg; ?>-->

 
</p>
	<p>
    <input type="text" name="email"  placeholder="Email" value="<?php echo $useremail; ?>" id="inputid"  />

</p>
<p>
    <input type="text" name="phone" placeholder="Phone" value="<?php echo $userphone; ?>" id="inputid" />
	</p>
	<p>
	
    <input type="text" name="website"  placeholder="password" value="<?php echo $userwebsite; ?>" id="inputid" />
</p>
<p>
<input type="text" name="subject"  placeholder="Subject" value="<?php echo $usersubject; ?>" id="inputid"  />
</p>
<p>
<textarea name="msg" class="field-style" placeholder="MESSAGE" value="<?php echo $usermsg; ?>" id="inputid" /><?php echo $usermsg; ?>
</textarea>
</p>
<p>
<input type="password" name="password"  placeholder="password" value="<?php echo $pass; ?>" id="inputid"  />
</p>
<p>

<input type="submit" value="Submit" name="submit" />
</p>
</ul>
</form>
</div>

<?php include('view.php'); ?>
<form class="form-style-9" action="logout.php" method="post">
<ul>
<input type="submit" value="logout" name="submit" />
</p>

<script type="text/javascript">

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
</body>
</html>


