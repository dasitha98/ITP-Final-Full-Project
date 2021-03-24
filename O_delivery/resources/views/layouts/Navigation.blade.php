<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/ITP2/admin/admin-profile.php">Admin {{$user}}</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$user}} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="http://localhost/ITP2/admin/admin-profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
         
                <li class="divider"></li>
                <li>
                    <a href="http://localhost/ITP2/admin/admin-logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
   
   <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="http://localhost/ITP2/front/index.php"><i class="fa fa-fw fa-dashboard"></i> Customer view</a>
            </li>
            
            <li>
                <a href="http://localhost/ITP2/admin/catogary_add.php" data-toggle="collapse" data-target="#demo7"><i class="fa fa-fw fa-arrows-v"></i> Delivery management <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo7">
                    <li>
                        <a href='qcwelcome'> Orders </a>
                    </li>
                    <li>
                        <a href='CheckingItem'>Insert Item For QC checking</a>
                    </li>
                    <li>
                        <a href='qcitem'>QC</a>
                    </li>
                    <li>
                        <a href='accepted'>QC accepted item</a>
                    </li>
                    <li>
                        <a href='rejected'>QC rejected item</a>
                    </li>
                    <li>
                        <a href='deliveryItem'>Deliverd item</a>
                    </li>
                    <li>
                        <a href='pieChartReport'>Report</a>
                    </li>
                </ul>
            </li>
            
            
            
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>