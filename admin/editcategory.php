<?php
	include("logincheck.php");
	include("header.php");
	include("dbcorn.php");
	$sql="SELECT * FROM catagories";
	$result = $conn->query($sql);
	$err_msg="";
	 if(isset($_GET) && !empty($_GET))
    {
        $id = $_GET['id'];
        $sql2 = "SELECT * FROM catagories WHERE catid=$id";
        $result1=$conn->query($sql2);
        $row1= $result1->fetch_assoc();
        //echo "<pre>";print_r($row1);//exit;
    }
    if (isset($_POST) &&! empty($_POST))
    {
		//echo "<pre>"; print_r($_POST);exit;
		
		$sql1 = "UPDATE catagories SET cname='".$_POST['cname']."',
                                  status=".$_POST['status']." WHERE catid=".$_POST['catid'];

                                //echo $sql1;exit;

        if($conn->query($sql1))
			header("Location:category.php");
		else
			$err_msg="Book is not edited.";
	}
?>



<?php include("sidebar.php"); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit Category</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="catid" value="<?php echo $row1['catid']?>">
                        <div class="form-group">
                            <label>Category name</label>
                            <input class="form-control"value="<?php echo $row1['cname']?>" type="text" name ="cname" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                         <div class="form-group">
                            <label>Status</label>
                            <input class="form-control" value="<?php echo $row1['status']?>"type="number" name="status" required="" />
                        </div>
                           
                       
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="edit Category"/>
                        </form>
                        <a href="category.php">Goto Category</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>