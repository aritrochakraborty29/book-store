<?php
	include("logincheck.php");
	include("header.php");
	include("dbcorn.php");
	$sql="SELECT * FROM users";
	$result = $conn->query($sql);
	$err_msg="";
	 if(isset($_GET) && !empty($_GET))
    {
        $id = $_GET['id'];
        $sql2 = "SELECT * FROM users WHERE uid=$id";
        $result1=$conn->query($sql2);
        $row1= $result1->fetch_assoc();
        //echo "<pre>";print_r($row1);//exit;
    }
    if (isset($_POST) &&! empty($_POST))
    {
		//echo "<pre>"; print_r($_POST);exit;
		
		$sql1 = "UPDATE users SET uname='".$_POST['uname']."',
                                  email='".$_POST['email']."',
                                  password='".$_POST['password']."',
                                  phone='".$_POST['phone']."',
                                  cnid=".$_POST['cnid']."";
                                 

                                //echo $sql1;exit;

        if($conn->query($sql1))
			header("Location:user.php");
		else
			$err_msg="Book is not edited.";
	}
?>



<?php include("sidebar.php"); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit User</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="uid" value="<?php echo $row1['uid']?>">
                        <div class="form-group">
                            <label>User name</label>
                            <input class="form-control"value="<?php echo $row1['uname']?>" type="text" name ="uname" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                       
                         <div class="form-group">
                            <label>email</label>
                            <input class="form-control" value="<?php echo $row1['email']?>"type="text" name="email" required="" />
                       
                        </div>
                           <div class="form-group">
                            <label>Password</label>
                            <input class="form-control"value="<?php echo $row1['password']?>" type="text" name ="password" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                        
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control"value="<?php echo $row1['phone']?>" type="text" name ="phone" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                        
                        <div class="form-group">
                            <label>Country</label>
                            <input class="form-control"value="<?php echo $row1['cnid']?>" type="text" name ="cnid" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                       
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="edit user"/>
                        </form>
                        <a href="user.php">Goto User</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>