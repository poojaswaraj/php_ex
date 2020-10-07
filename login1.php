<?php
    if (isset($_POST['submit']))
   {     
	 session_start();
    include("config.php");
   
    $username=$_POST['name'];
    $phone=$_POST['password'];
    
    $query = mysql_query("SELECT * FROM student WHERE name='$username' and password='$phone'")or die(mysql_error($conn));
     $row=mysql_fetch_array($query);
	 $count=mysql_num_rows($query);
	 if($count==1)
    {
		 $_SESSION['user_id']=$row['id'];
		header('location:index.php');
      }
      else
      {
   header('location:login.php');
    }
    }
    ?>