<?php
	include("logincheck.php");
	include("header.php");
	include("dbcorn.php");
	$sql="SELECT * FROM catagories";
	$result = $conn->query($sql);
	$err_msg="";
	if (isset($_POST) &&! empty($_POST)) {
		//echo "<pre>"; print_r($_POST);exit;
		$sql1= "INSERT INTO catagories(catid,cname,status)
									VALUES('".$_POST['catid']."',
									'".$_POST['cname']."',
									".$_POST['status'].")";
		if($conn->query($sql1))
			header("Location:category.php");
		else
			$err_msg="user is not added.";
	}
?>



<?php include("sidebar.php"); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADD Category</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control" type="text" name ="cname" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input class="form-control" type="number" name ="status" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                           <!-- <p class="help-block">Help text here.</p>-->
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Submit details"/>
                        </form>
                        <a href="category.php">Goto Categories</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>