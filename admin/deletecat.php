<?php
	include("dbcorn.php");
	session_start();
 	if(isset($_GET) && !empty($_GET))
    {
        $id = $_GET['id'];
        $sql2 = "DELETE FROM catagories WHERE catid=$id";

        if($conn->query($sql2))
        {
        	$_SESSION['delete']="Record deleted.";
        	header("Location:category.php");
        }
        else
        {
        	$_SESSION['delete']="Record is not deleted";
        	//header("Location:books.php");
        }
    }
    header("Location:category.php");
     ?>