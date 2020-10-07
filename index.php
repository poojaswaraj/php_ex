<?php

session_start();
if(isset($_SESSION['user_id']))
{
	
	$id=$_SESSION['user_id'];
	//$login_user=$_SESSION['user_id'];
	
	
}
else
{
	header('location:login.php');
}


?>
	
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="style2.css">
<!--img load javascript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script language="javascript" type="text/javascript">

function PrintMeSubmitMe()
{
window.print();
SubmitMe();
}

function SubmitMe()
{
document.MyForm.submit();
}
</script>

</head>

<body>

<div>
<form class="form-style-9" action="insert.php" method="post" enctype= "multipart/form-data">
<ul>
 
<p>
    <input type="text" name="name"  placeholder="Name"  />
	</p>
	
	 	<p>
		<input type="file" name="file" id="logo" onchange="readURL(this);">
<img id="blah" src="<?php echo $rr['file'];?>" alt="" width=100 height=100 />

</p>
	<p>
    <input type="text" name="email"  placeholder="Email"    />

</p>
<p>
    <input type="text" name="phone" placeholder="Phone"   />
	</p>
	
	<p>
	
    <input type="text" name="website"  placeholder="Website"   />
</p>
<p>
<input type="text" name="subject"  placeholder="Subject"   />
</p>
<p>
<textarea name="msg" class="field-style" placeholder="MESSAGES"   /></textarea>
</p>
<p>
<input type="password" name="password"  placeholder="password"  />
</p>

<p>
<input type="submit" value="Submit" name="submit" />

<input type="submit" value="print" name="print" onclick="PrintMeSubmitMe(this)" />
</p>
</ul>
</form>
</div>

<?php include('view.php'); ?>

<p>
<div>
<form class="form-style-9" action="logout.php" method="post">
<ul>
<input type="submit" value="logout" name="submit" style="width=20%" />
</p>
</form>
</div>
<!--image load javascript-->
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


<div class="modal fade login in" id="login32" aria-hidden="false" style=" padding-right: 17px;margin-top: 82px;">
          <div class="modal-dialog login animated" style="width: 33%;/*! height: 116%; */">
              <div class="modal-content">
                 <div class="modal-header"  style="padding: 10px;background-color: #eeeded;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position: absolute;top: -16px;left: calc(100% + 10px);width: 26px;height: 24px;font-size: 16px;font-size: 2.6rem;color: #fff;line-height: 1;cursor: pointer;">×</button>
                        <h4 class="modal-title" style="/*! font-size: 14px; */color: #303030;font-size: 16px;font-weight: 600;">Fill out this one-time contact form</h4>
                        <h5 style="font-size: 12px;color:#606060;font-weight: 400;margin-top: 0px;">We will share advertiser's details over email and SMS.</h5>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">
                             
                            
                                <div class="error"></div>
                                <div class="form loginBox">
                                   <form class="form-style-9" action="http://thepropertystore.net.in/contact_enquiery.php" method="post" enctype= "multipart/form-data">

                                    <input id="name" class="form-control" type="text" placeholder="Name" name="name" style="border-radius: 6px;border: none;color:#554d4d;font-size: 13px;height: 40px;margin-bottom: -7px;padding: 17px 12px;width: 100%;">
                                    <br/>
                                    <input id="Email" class="form-control" type="text" placeholder="Email" name="password" style="border-radius: 6px;border: none;color:#554d4d;font-size: 13px;height: 40px;margin-bottom: -7px;padding: 17px 12px;width: 100%;">
                                    <br>
                                     <input id="mobile" class="form-control" type="text" placeholder="mobile" name="mobile" style="border-radius: 6px;border: none;color:#554d4d;font-size: 13px;height: 40px;margin-bottom: -7px;padding: 17px 12px;width: 100%;">
                                     <br>

                          <div class="container">
                          <div class="row">
                           <div class="col-lg-12">
                          
                          
                      
                        <label for="sel1" style="margin-left: -10px;">Intrested In</label>
                        <select class="form-control" id="sel1" style="margin-left: -10px;width: 100%;border-radius: 8px;">
                        <option>Select...</option>    
                        <option>Site Visit</option>
                        <option>Immediate Purchase</option>
                        <option>Home Loan</option>
                        </select>
                          </div>
                          </div>
                          </div>
                                    <br/>
                        <div class="container">
                        <div class="row">
                        <div class="col-lg-12">
                        
                        <input type="checkbox" />   <h6 style="margin-top: -23px;margin-left: 23px;">I Agree to ThePropertyStore <a class="m-contact__link" target="_blank" href="#">Terms of Use</a>
                        </h6>
                        </div> 
                        </div>
                        </div>
                                   <button class="btn btn-default btn-login" type="button" value="Submit" name="contact" >submit</button> 
                                    <!--<input class="btn btn-default btn-login" type="button" value="Submit" name="contact" style="height: 5%;background: linear-gradient(#F00 5%, #F00  100%);border: 2px solid #F00 !important;margin-left: 131px;width: 38%;" >-->
                                    </form>
                                </div>
                             </div>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                       
                    </div>
              </div>
          </div>
 </div>
