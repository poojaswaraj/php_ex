<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style1.css">
</head>

<body>
<table id="customers">
<thead>
<tr>
<th>Id</th>
<th>NAME</th>
<th>IMAGE</th>
<th>EMAIL ID</th>
<th>PHONE</th>
<th>WEBSITE</th>
<th>SUBJECT</th>
<th>MESSAGE</th>
<th>PASSWORD</TH>
<th>LINK</th>
</tr>
</thead>
<tbody>
<?php
 include("config.php");
 
  $select=mysql_query("SELECT * FROM student;");
  $i=1;
  while($userrow=mysql_fetch_array($select))
   {
  $id=$userrow['id'];
  $username=$userrow['name'];
  $userimg=$userrow['img'];
  $useremail=$userrow['email'];
  $userphone=$userrow['phone'];
  $userwebsite=$userrow['website'];
  $usersubject=$userrow['subject'];
  $usermsg=$userrow['msg'];
  $userpass=$userrow['password'];
?>
<tr>
<td><?php echo $id; ?></td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<td><?php echo $username; ?></td>
<td><img src="upload/<?php echo $userimg; ?>" style="height:30px;width:30px;"></td>
<td><?php echo $useremail; ?></td>
<td><?php echo $userphone; ?></td>
<td><?php echo  $userwebsite; ?></td>
<td><?php echo  $usersubject; ?></td>
<td><?php echo  $usermsg; ?></td>
<td><?php echo $userpass; ?></td>
<td>
<a href="delete.php?id=<?php echo $id; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"> DELETE </span></a>
<br>
<a href="edit.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" name="edit"> EDIT </span></a>
</td>  
</tr>
<?php 
} 
?>
</tbody>
</table>













  
