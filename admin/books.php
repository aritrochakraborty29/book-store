<?php
	include("logincheck.php");
	include("dbcorn.php");
	include("header.php");
	$sql="SELECT b. *,c.cname FROM books b JOIN catagories c ON b.catid = c.catid";
	$result = $conn->query($sql);
?>


<?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Book list</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if(isset($_SESSION['delete'])){ ?>
                        <p style="color:red;"><?php echo $_SESSION['delete'] ?></p>
                        <?php unset($_SESSION['delete']); } ?>
                        <h5>Table of available books</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Publisher</th>
                                    <th>price</th>
                                    <th>quantity</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php while($row=$result->fetch_assoc()){ ?>

                                <tr>
                                    <td><?php echo $row['bid']?></td>
                                    <td><?php echo $row['btitke']?></td>
                                    <td><?php echo $row['bauthor']?></td>
                                    <td><?php echo $row['publisher']?></td>
                                    <td><?php echo $row['bprice']?></td>
                                    <td><?php echo $row['bquantity']?></td>
                                    <td><?php echo $row['cname']?></td>
                                    <td><?php echo $row['status']==1?"Active":"Inactive" ?></td>
                                    <td><a href ="editbooks.php?id=<?php echo $row['bid']?> ">Edit</a> |
                                         <a href="delete.php?id=<?php echo $row['bid']?>" onclick =" return confirm('Are you sure')" >delete</a></td>
                                </tr>
                            		<?php } ?>
                               </tbody>

                        </table>
                        	<a href="addbooks.php">Add</a>
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
