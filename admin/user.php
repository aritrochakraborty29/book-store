<?php
	include("logincheck.php");
	include("dbcorn.php");
	include("header.php");
	$sql="SELECT b. *,c.cnname FROM users b JOIN countries c ON b.cnid = c.cnid";
	$result = $conn->query($sql);
?>


<?php include("sidebar.php"); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Users list</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                 
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if(isset($_SESSION['delete'])){ ?>
                        <p style="color:red;"><?php echo $_SESSION['delete'] ?></p>
                        <?php unset($_SESSION['delete']); } ?>
                        <h5>Table of available Users</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Uname</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                     <th>Phone</th>
                                    <th>country</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php while($row=$result->fetch_assoc()){ ?>

                                <tr>
                                    <td><?php echo $row['uid']?></td>
                                    <td><?php echo $row['uname']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['password']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['cnid']?></td>
                                    <td><a href ="useredit.php?id=<?php echo $row['uid']?> ">Edit</a> |
                                         <a href="userdelete.php?id=<?php echo $row['uid']?>" onclick =" return confirm('Are you sure')" >delete</a></td>
                                </tr>
                            		<?php } ?>
                               </tbody>

                        </table>
                        	<a href="user_register.php">Add</a>
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
