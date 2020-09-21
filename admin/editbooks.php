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
        $sql2 = "SELECT * FROM books WHERE bid=$id";
        $result1=$conn->query($sql2);
        $row1= $result1->fetch_assoc();
        //echo "<pre>";print_r($row1);//exit;
    }
    if (isset($_POST) &&! empty($_POST))
    {
		//echo "<pre>"; print_r($_POST);exit;
		
		$sql1 = "UPDATE books SET btitke='".$_POST['btitke']."',
                                bauthor='".$_POST['bauthor']."',
                                publisher='".$_POST['publisher']."',
                                catid=".$_POST['catid'].",
                                bprice=".$_POST['bprice'].",
                                bquantity=".$_POST['bquantity'].",
                                status=".$_POST['status']." WHERE bid=".$_POST['bid'];

                                //echo $sql1;exit;

        if($conn->query($sql1))
			header("Location:books.php");
		else
			$err_msg="Book is not edited.";
	}
?>



<?php include("sidebar.php"); ?>
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit BOOK</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="bid" value="<?php echo $row1['bid']?>">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control"value="<?php echo $row1['btitke']?>" type="text" name ="btitke" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                         <div class="form-group">
                            <label>Author</label>
                            <input class="form-control" value="<?php echo $row1['bauthor']?>"type="text" name="bauthor" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Publisher</label>
                            <input class="form-control" value="<?php echo $row1['publisher']?>" type="text" name="publisher" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                       </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="catid" >
                            	<option value="">select categary</option>
                            	<?php while($row=$result->fetch_assoc()){ ?>
                            		<option value="<?php echo $row['categpryid'] ?>"
                                        <?php echo ($row1['categoryid']==$row['categoryid'])?"selected":""?> >
                            			<?php echo $row['categoryname']?>
                            		</option>
                            	<?php } ?>
                            <select>
                        </div>
                           
                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" value="<?php echo $row1['bprice']?>"type="number" name="bprice" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input class="form-control" value="<?php echo $row1['bquantity']?>" type="number" name="bquantity" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input class="" type="radio" name="status" value="1" required="" <?php echo ($row1['status']==1)?"checked":""?> />Active
                            <input class="" type="radio" name="status" value="0" required="" <?php echo ($row1['status']==0)?"checked":""?> />Inactive
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="edit books"/>
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