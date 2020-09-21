<?php
    $err_msg="";
    if(isset($_POST) &&!empty($_POST)){
        //echo "<pre>";print_r($_POST);echo "</pre>";
        include("dbcorn.php");
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE uname='".$uname."' AND password='".$password." '";
       //echo $sql;exit;
        $result = $conn->query($sql);//returns result
        $row = $result-> fetch_assoc();//converted to associative array
        //echo "<pre>";print_r($row);echo "</pre>";
       // exit;
        if(!empty($row))
        {
            session_start();
            $_SESSION['user'] = $row;
            header("location:dashboard.php");
        } else{
            $err_msg = "username/password is worng.";
        }      
         }

?>
<?php include("header.php");  ?> 
<div id="page-wrapper" >
          <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>LOGIN</h2>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <p style="color:red;"><?php echo $err_msg?></p>
                        <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input class="form-control" type="text" name = "uname" required="" />
                          <!--  <p class="help-block">Help text here.</p> -->
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="" />
                           <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                        <input type="submit" class="btn btn-danger btn-lg btn-block" value="Login"/>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-4">
                         
                    </div>
                </div>
                <hr>
                  

            </div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
<?php include("footer.php"); ?>