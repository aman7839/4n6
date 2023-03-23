
    <!-- Left Panel -->
    @extends('layout.main')
    @section('content')
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Home </a>
                    </li>
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Apps </a>
                    </li>
                    <!-- <li class="menu-title">UI elements</li>/.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Reports</a>
                        <ul class="sub-menu children dropdown-menu">                          
                            

                            <li><a href="ui-cards.html"><i class="fa fa-circle-o"></i>New</a></li>
                            <li><a href="ui-alerts.html"><i class="fa fa-circle-o"></i>Saved</a></li>
                          
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Payments </a>
                    </li>
                    <li class="menu-title">Help</li><!-- /.menu-title -->
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>View tutorial </a>
                    </li>
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Android guide </a>
                    </li>
                   


                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    @endsection()
    <!-- /#left-panel -->