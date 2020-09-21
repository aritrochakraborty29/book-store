<?php
	include("logincheck.php");
	include("header.php");
	include("dbcorn.php");
	$sql="SELECT * FROM catagories";
	$result = $conn->query($sql);
	$err_msg="";
	if (isset($_POST) &&! empty($_POST)) {
		//echo "<pre>"; print_r($_POST);exit;
		$sql1= "INSERT INTO books(btitke,bauthor,publisher,catid,bprice,bquantity,status)
									VALUES('".$_POST['btitke']."',
									'".$_POST['bauthor']."',
									'".$_POST['publisher']."',
									".$_POST['catid'].",
									".$_POST['bprice'].",
									".$_POST['bquantity'].",
									".$_POST['status'].")";
		if($conn->query($sql1))
			header("Location:books.php");
		else
			$err_msg="Book is not added.";
	}
?>



<?php include("sidebar.php"); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>ADD BOOK</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name ="btitke" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                         <div class="form-group">
                            <label>Author</label>
                            <input class="form-control" type="text" name="bauthor" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Publisher</label>
                            <input class="form-control" type="text" name="publisher" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                       </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="catid" >
                            	<option value="">select categary</option>
                            	<?php while($row=$result->fetch_assoc()){ ?>
                            		<option value="<?php echo $row['catid']?>">
                            			<?php echo $row['cname']?>
                            		</option>
                            	<?php } ?>
                            <select>
                        </div>
                           
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" type="number" name="bprice" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input class="form-control" type="number" name="bquantity" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input class="" type="radio" name="status" value="1" required="" checked />Active
                            <input class="" type="radio" name="status" value="0" required="" />Inactive
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Submit BOOK"/>
                        </form>
                        <a href="books.php">Goto Books</a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>