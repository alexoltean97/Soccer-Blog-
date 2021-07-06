<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>

            <h5 class="centered"><?php  print_r($_SESSION['username']);?></h5>
            <li class="mt">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="active" href="javascript:;">
                    <i class="fa fa-desktop"></i>
                    <span>Articles</span>
                </a>
                <ul class="sub">
                    <li class="active"><a href="general.html">All articles</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>