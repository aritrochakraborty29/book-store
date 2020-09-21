<?php
	include("logincheck.php");
	include("dbcorn.php");
	include("header.php");
	$sql="SELECT * FROM catagories";
	$result = $conn->query($sql);
?>


<?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Category list</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if(isset($_SESSION['delete'])){ ?>
                        <p style="color:red;"><?php echo $_SESSION['delete'] ?></p>
                        <?php unset($_SESSION['delete']); } ?>
                        <h5>Table of available Category</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category name</th>
                                    <th>Status</th>
                                     <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php while($row=$result->fetch_assoc()){ ?>

                                <tr>
                                    <td><?php echo $row['catid']?></td>
                                    <td><?php echo $row['cname']?></td>
                                    <td><?php echo $row['status']?></td>
                                    <td><a href ="editcategory.php?id=<?php echo $row['catid']?> ">Edit</a> |
                                         <a href="deletecat.php?id=<?php echo $row['catid']?>" onclick =" return confirm('Are you sure')" >delete</a></td>
                                </tr>
                            		<?php } ?>
                               </tbody>

                        </table>
                        	<a href="category_register.php">Add</a>
                    </div>
                </div>
                <!-- /. ROW  -->
                
            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <?php
include("footer.php");
?>
