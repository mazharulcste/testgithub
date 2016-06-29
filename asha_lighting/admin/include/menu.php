<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">     
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashbord.php"> Dashboard </a>
    </div>
    <ul class="nav navbar-nav side-nav">

       
     
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Image Section <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="image_add.php"> Image Add </a></li>
                <li><a href="menu_image_add.php"> Menu Image Add </a></li>
                
                <li><a href="image_view.php"> Image View </a></li>
                <li><a href="image_view_2.php"> Secondary Image View </a></li>
                <li><a href="image_view_3.php"> Menu Image View </a></li>
            </ul>
        </li>
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Product Menu  <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="add_product_menu.php"> Product Menu Add </a></li>
                <li><a href="add_product_submenu.php">  Product Submenu Add </a></li>
                <li><a href="view_menu.php">  View Menu  </a></li>
                <li><a href="view_submenu.php">  View Submenu  </a></li>
            </ul>
        </li>
        
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Article  <b class="caret"></b></a>
            <ul class="dropdown-menu">
<!--                <li><a href="article_add.php"> Article Add</a></li>-->
                <li><a href="page_view.php"> View Article Page </a></li>
            </ul>
        </li>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Contact Us Page <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="contact_us.php"> Contact Add</a></li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">

    <ul class="nav navbar-nav navbar-right navbar-user">
        <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User Panel <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="change_password.php"><i class="fa fa-user"></i> Change Username/Password </a></li>
                <!--<li><a href="#"><i class="fa fa-envelope"></i> View All User <span class="badge">7</span></a></li>-->
            </ul>
        </li>



        <li class="dropdown user-dropdown">
            <a href="logout.php"><i class="fa fa-user"></i> Logout </a>
        </li>
	
    </ul>
</div><!-- /.navbar-collapse -->
</nav>