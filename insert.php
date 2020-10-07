<?php
include('config.php');

if(isset($_POST['submit'])!="")
{
	
	$file = rand(1000,100000)."- ".$_FILES['file']['name'];
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
 
	$username=$_POST["name"];
	$usermail=$_POST["email"];
	$userphone=$_POST["phone"];
	$userweb=$_POST["website"];
	$usersub=$_POST["subject"];
	$usermsg=$_POST["msg"];
	$userpass=$_POST["password"]; 


if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql = mysql_query("INSERT INTO student (name,img,email,phone,website,subject,msg,password)
		VALUES ('$username','$final_file', '$usermail', '$userphone','$userweb','$usersub','$usermsg','$userpass')")or die(mysql_error($conn));

		if ($sql== TRUE) {
			header('Location:index.php');
		} else {
			echo "Error: " .mysql_error($conn);
		}
    }
	}

mysql_close($conn);

?>