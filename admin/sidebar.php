<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                     <li <?php $cur_page=="dashboard.php"?"class='active-link'":"''"?>> 
                        <a href="dashboard.php" ><i class="fa fa-desktop "></i><i>Dashboard</i> <span class="badge"></span></a>
                    </li>
                   

                    <li <?php $cur_page=="books.php"?"class='active-link'":"''"?>>
                        <a href="books.php"><i class="fa fa-table "></i><i>Books</i><span class="badge"></span></a>
                    </li>


                    <li><?php $cur_page=="category.php"?"class='active-link'":"''"?>
                        <a href="category.php"><i class="fa fa-edit "></i><i>Category</i><span class="badge"></span></a>
                    </li>


                     <li><?php $cur_page=="user.php"?"class='active-link'":"''"?>
                        <a href="user.php"><i class="fa fa-edit "></i><i>User</i><span class="badge"></span></a>
                    </li>


                </ul>
            </div>
        </nav>
