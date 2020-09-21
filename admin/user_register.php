<?php
	include("logincheck.php");
	include("header.php");
	include("dbcorn.php");
	$sql1="SELECT * FROM users";
	$result = $conn->query($sql1);
	$err_msg="";
	if (isset($_POST) &&! empty($_POST)) {
		//echo "<pre>"; print_r($_POST);exit;
		$sql1= "INSERT INTO users(uname,email,password,phone,cnid)
									VALUES('".$_POST['uname']."',
									'".$_POST['email']."',
									".$_POST['password'].",
									".$_POST['phone'].",
									".$_POST['cnid'].")";
		if($conn->query($sql1))
			header("Location:user.php");
		else
			$err_msg="user is not added.";
	}
?>



<?php include("sidebar.php"); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADD User</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label>User name</label>
                            <input class="form-control" type="text" name ="uname" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="password" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                       </div>           
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" type="text" name="phone" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input class="form-control" type="number" name="cnid" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                           <!-- <p class="help-block">Help text here.</p>-->
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Submit details"/>
                        </form>
                        <a href="user.php">Goto Books</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>