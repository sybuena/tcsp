<!doctype html>
<html>
<head>

  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">


  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>Core Admin Theme</title>

  
  <!--[if lt IE 9]>
  <script src="../../javascripts/vendor/html5shiv.js" type="text/javascript"></script>
  <script src="../../javascripts/vendor/excanvas.js" type="text/javascript"></script>
  <![endif]-->
<link href="<?php echo base_url().'assets/theme2/stylesheets/font.css'; ?>" rel="stylesheet">
  	<link href="<?php echo base_url().'assets/bootstrap/css/bootstrap.css'; ?>" rel="stylesheet" media="screen">
  	<link href="<?php echo base_url().'assets/css/style.css'; ?>" rel="stylesheet" media="screen">
   	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet">
  	<link href="<?php echo base_url().'assets/theme2/stylesheets/application.css'; ?>" media="screen" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url().'assets/theme2/javascripts/application.js'; ?>" type="text/javascript"></script>

</head>



<body>
<div class="navbar navbar-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container-fluid">

      <a class="brand" href="#">Core Admin</a>

      <!-- the new toggle buttons -->

      <ul class="nav pull-right">

        <li class="toggle-primary-sidebar hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-primary"><button type="button" class="btn btn-navbar"><i class="icon-th-list"></i></button></li>

        <li class="hidden-desktop" data-toggle="collapse" data-target=".nav-collapse-top"><button type="button" class="btn btn-navbar"><i class="icon-align-justify"></i></button></li>

      </ul>

      
          

          <div class="nav-collapse nav-collapse-top collapse">

            <ul class="nav full pull-right">
              <li class="dropdown user-avatar">

                <!-- the dropdown has a custom user-avatar class, this is the small avatar with the badge -->

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <span>
                    <img class="menu-avatar" src="../../images/avatars/avatar1.jpg" /> <span>John Smith <i class="icon-caret-down"></i></span>
                    <span class="badge badge-dark-red">5</span>
                  </span>
                </a>

                <ul class="dropdown-menu">

                  <!-- the first element is the one with the big avatar, add a with-image class to it -->

                  <li class="with-image">
                    <div class="avatar">
                      <img src="../../images/avatars/avatar1.jpg" />
                    </div>
                    <span>John Smith</span>
                  </li>

                  <li class="divider"></li>

                  <li><a href="#"><i class="icon-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="icon-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="icon-envelope"></i> <span>Messages</span> <span class="label label-dark-red pull-right">5</span></a></li>
                  <li><a href="#"><i class="icon-off"></i> <span>Logout</span></a></li>
                </ul>
              </li>
            </ul>

            <form class="navbar-search pull-right">
              <input type="text" class="search-query animated" placeholder="Search">
              <i class="icon-search"></i>
            </form>

            <ul class="nav pull-right">
              <li class="active"><a href="#" title="Go home"><i class="icon-home"></i> Home</a></li>
              <li><a href="#" title="Manage users"><i class="icon-user"></i> Users</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Some link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>


            </ul>

          </div>
      

    </div>
  </div>
</div><div class="sidebar-background">
  <div class="primary-sidebar-background"></div>
</div>

<div class="primary-sidebar">

  <!-- Main nav -->
  <ul class="nav nav-collapse collapse nav-collapse-primary">

    

        

            <li class="">
              <span class="glow"></span>
              <a href="../dashboard/dashboard.html">
                  <i class="icon-dashboard icon-2x"></i>
                  <span>Dashboard</span>
              </a>
            </li>

        

    

        

            <li class="dark-nav active">

              <span class="glow"></span>

              

              <a class="accordion-toggle  " data-toggle="collapse" href="#7wqmRE4Q7R">
                  <i class="icon-beaker icon-2x"></i>
                    <span>
                      UI Lab
                      <i class="icon-caret-down"></i>
                    </span>

              </a>

              <ul id="7wqmRE4Q7R" class="collapse in">
                
                    <li class="">
                      <a href="buttons.html">
                          <i class="icon-hand-up"></i> Buttons
                      </a>
                    </li>
                
                    <li class="active">
                      <a href="general.html">
                          <i class="icon-beaker"></i> General elements
                      </a>
                    </li>
                
                    <li class="">
                      <a href="icons.html">
                          <i class="icon-info-sign"></i> Icons
                      </a>
                    </li>
                
                    <li class="">
                      <a href="grid.html">
                          <i class="icon-th-large"></i> Grid
                      </a>
                    </li>
                
                    <li class="">
                      <a href="tables.html">
                          <i class="icon-table"></i> Tables
                      </a>
                    </li>
                
                    <li class="">
                      <a href="widgets.html">
                          <i class="icon-plus-sign-alt"></i> Widgets
                      </a>
                    </li>
                
              </ul>

            </li>

        

    

        

            <li class="">
              <span class="glow"></span>
              <a href="../forms/forms.html">
                  <i class="icon-edit icon-2x"></i>
                  <span>Forms</span>
              </a>
            </li>

        

    

        

            <li class="">
              <span class="glow"></span>
              <a href="../charts/charts.html">
                  <i class="icon-bar-chart icon-2x"></i>
                  <span>Charts</span>
              </a>
            </li>

        

    

        

            <li class="dark-nav ">

              <span class="glow"></span>

              

              <a class="accordion-toggle collapsed " data-toggle="collapse" href="#s6TfpTKa4a">
                  <i class="icon-link icon-2x"></i>
                    <span>
                      Others
                      <i class="icon-caret-down"></i>
                    </span>

              </a>

              <ul id="s6TfpTKa4a" class="collapse ">
                
                    <li class="">
                      <a href="../other/wizard.html">
                          <i class="icon-magic"></i> Wizard
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../other/login.html">
                          <i class="icon-user"></i> Login Page
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../other/sign_up.html">
                          <i class="icon-user"></i> Sign Up Page
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../other/full_calendar.html">
                          <i class="icon-calendar"></i> Full Calendar
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../other/error404.html">
                          <i class="icon-ban-circle"></i> Error 404 page
                      </a>
                    </li>
                
              </ul>

            </li>

        

    

  </ul>

  <div class="hidden-tablet hidden-phone">
    <div class="text-center" style="margin-top: 60px">
      <div class="easy-pie-chart-percent" style="display: inline-block" data-percent="89"><span>89%</span></div>
      <div style="padding-top: 20px"><b>CPU Usage</b></div>
    </div>

    <hr class="divider" style="margin-top: 60px">

    <div class="sparkline-box side">

      <div class="sparkline-row">
        <h4 class="gray"><span>Orders</span> 847</h4>
        <div class="sparkline big" data-color="gray"><!--19,8,15,4,8,20,16,13,7,3,22,9--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="dark-green"><span>Income</span> $43.330</h4>
        <div class="sparkline big" data-color="darkGreen"><!--25,23,20,21,25,16,20,4,19,7,26,16--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="blue"><span>Reviews</span> 223</h4>
        <div class="sparkline big" data-color="blue"><!--5,15,4,26,25,4,24,27,11,27,14,6--></div>
      </div>

      <hr class="divider">
    </div>
  </div>


</div>
<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-beaker"></i>
            General elements
          </h3>
          <h5>
            A subtitle can be added here
          </h5>
        </div>

        <ul class="inline pull-right sparkline-box">

          <li class="sparkline-row">
            <h4 class="blue"><span>Orders</span> 847</h4>
            <div class="sparkline big" data-color="blue"><!--19,27,23,13,11,12,15,22,24,14,27,17--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="green"><span>Reviews</span> 223</h4>
            <div class="sparkline big" data-color="green"><!--8,4,13,25,15,8,5,13,27,5,24,27--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="red"><span>New visits</span> 7930</h4>
            <div class="sparkline big"><!--21,29,3,6,3,15,25,26,11,7,25,11--></div>
          </li>

        </ul>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">

      <!-- Breadcrumb line -->

      <div id="breadcrumbs">
        <div class="breadcrumb-button blue">
          <span class="breadcrumb-label"><i class="icon-home"></i> Home</span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>

        
            <div class="breadcrumb-button">
              <span class="breadcrumb-label">
                <i class="icon-beaker"></i> UI Lab
              </span>
              <span class="breadcrumb-arrow"><span></span></span>
            </div>
        

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-beaker"></i> General elements
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="box">
  <div class="box-header">
    <div class="title">Sliders</div>
    <ul class="box-toolbar">
      <li><span class="label label-red">5</span></li>
    </ul>
  </div>
  <div class="box-content">
    <!-- find me in partials/jquery_sliders -->

<div class="row-fluid box-section">
  <div class="span3">Simple Slider</div>
  <div class="span9">
    <div class="normal-slider"></div>
  </div>
</div>

<div class="row-fluid box-section">
  <div class="span3">Ranged Slider (only min)</div>
  <div class="span9">
    <div class="ranged-slider-ui only-min"></div>
  </div>
</div>

<div class="row-fluid box-section">
  <div class="span3">Ranged Slider (only max)</div>
  <div class="span9">
    <div class="ranged-slider-ui only-max"></div>
  </div>
</div>

<div class="row-fluid box-section">
  <div class="span3">Ranged Slider</div>
  <div class="span9">
    <div class="ranged-slider-ui normal"></div>
  </div>
</div>

<div class="row-fluid box-section">
  <div class="span3">Vertical sliders</div>
  <div class="span9">
    <div class="ranged-slider-ui vertical-bars">
      <span>70</span>
      <span>60</span>
      <span>50</span>
      <span>40</span>
      <span>30</span>
      <span>40</span>
      <span>50</span>
      <span>60</span>
    </div>
  </div>
</div>
  </div>
</div>

<div class="box">
  <div class="box-header">
    <div class="title">Photo Gallery</div>
    <ul class="box-toolbar">
      <li>
        <form class="fill-up" style="width: 100px">
          <label class="input-with-submit">
            <input type="text" placeholder="Search..."/>
            <button type="submit" class="submit-icon">
              <i class="icon-search"></i>
            </button>
          </label>
        </form>
      </li>
    </ul>
  </div>

  <div class="box-content">
    <!-- find me in partials/gallery -->

<div id="thumbs">
  <a href="http://farm8.staticflickr.com/7013/6754656011_3de2cc73a2_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7013/6754656011_3de2cc73a2_m.jpg)" title="Lion Rock"></a>
  <a href="http://farm8.staticflickr.com/7042/6895252645_45f5dfffaa_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7042/6895252645_45f5dfffaa_m.jpg)" title="Holsten Gate"></a>
  <a href="http://farm8.staticflickr.com/7183/6943277737_21b521659c_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7183/6943277737_21b521659c_m.jpg)" title="Blue Hour"></a>
  <a href="http://farm8.staticflickr.com/7047/7000951429_5eae078a62_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7047/7000951429_5eae078a62_m.jpg)" title="Waikato Landscape"></a>
  <a href="http://farm6.staticflickr.com/5346/7051537899_efc7a44830_z.jpg" style="background-image:url(http://farm6.staticflickr.com/5346/7051537899_efc7a44830_m.jpg)" title="Tauranga Bridge"></a>
  <a href="http://farm8.staticflickr.com/7268/6951148260_440661b4d1_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7268/6951148260_440661b4d1_m.jpg)" title="East Coast"></a>
  <a href="http://farm8.staticflickr.com/7259/6930112984_5fcc076288_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7259/6930112984_5fcc076288_m.jpg)" title="Cathedral Cove"></a>
  <a href="http://farm8.staticflickr.com/7276/6886626710_047cd03acb_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7276/6886626710_047cd03acb_m.jpg)" title="The Pond"></a>
  <a href="http://farm8.staticflickr.com/7020/6683299491_f2b5f6aa8b_z.jpg" style="background-image:url(http://farm8.staticflickr.com/7020/6683299491_f2b5f6aa8b_m.jpg)" title="Good Night"></a>
</div>
  </div>
</div>

<div class="row-fluid">

  <div class="span6">
    <!-- find me in partials/accordions -->

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Collapsible Group Item #1
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
        Collapsible Group Item #3
      </a>
    </div>
    <div id="collapseThree" class="accordion-body collapse">
      <div class="accordion-inner">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

    <div class="box">
      <div class="box-header">
        <span class="title">Growl</span>
        <ul class="box-toolbar">
          <li>
            <input class="iButton-icons" type="checkbox" />
          </li>
        </ul>
      </div>

      <div class="box-content padded">
        <a class="growl-info btn btn-blue" href="#">Info</a>
        <a class="growl-success btn btn-green" href="#">Success</a>
        <a class="growl-warn btn btn-gray" href="#">Warning</a>
        <a class="growl-error btn btn-red" href="#">Error</a>
      </div>
    </div>

    <div class="box">

      <div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
          <li class="active"><a href="#labels" data-toggle="tab">Labels</a></li>
          <li><a href="#badges" data-toggle="tab">Badges</a></li>
        </ul>
      </div>

      <div class="box-content padded">
        <div class="tab-content">
          <div class="tab-pane active" id="labels">
            
                <span style="margin-right: 10px" class="label label-blue">10</span>
            
                <span style="margin-right: 10px" class="label label-gray">15</span>
            
                <span style="margin-right: 10px" class="label label-green">20</span>
            
                <span style="margin-right: 10px" class="label label-red">25</span>
            
                <span style="margin-right: 10px" class="label label-dark-red">30</span>
            
                <span style="margin-right: 10px" class="label label-black">35</span>
            
          </div>
          <div class="tab-pane" id="badges" style="padding: 5px">
            
                <span style="margin-right: 10px" class="badge badge-blue">10</span>
            
                <span style="margin-right: 10px" class="badge badge-gray">15</span>
            
                <span style="margin-right: 10px" class="badge badge-green">20</span>
            
                <span style="margin-right: 10px" class="badge badge-red">25</span>
            
                <span style="margin-right: 10px" class="badge badge-dark-red">30</span>
            
                <span style="margin-right: 10px" class="badge badge-black">35</span>
            
          </div>
        </div>
      </div>
    </div>

    <div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  Best check yo self, you're not...
</div>

<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div>

<div class="alert alert-info">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> You successfully read this important alert message.
</div>

    <div class="pagination pagination-centered pagination-large">
  <ul>
    <li><a href="#">Prev</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>

<div class="pagination pagination-centered">
  <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li class="active"><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>

<div class="pagination pagination-centered pagination-small">
  <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li class="active"><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>

<div class="pagination pagination-centered pagination-mini">
  <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li class="active"><a href="#">4</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>


  </div>


  <div class="span6">

    <div class="box core-animate-bars">
      <div class="box-header">
        <div class="title">Progress bars</div>
        <ul class="box-toolbar">
          <li class="toolbar-link">
            <a href="#">
              <i class="icon-refresh"></i> Click to randomize bars
            </a>
          </li>
        </ul>
      </div>
      <div class="box-content">
        
            <div class="box-section">

              

              
                  
                  <div class="progress progress-blue">
                    <div class="bar tip" title="18%" data-percent="18" style="width: 18%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-blue">
                    <div class="bar tip" title="12%" data-percent="12" style="width: 12%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-blue active">
                    <div class="bar tip" title="10%" data-percent="10" style="width: 10%;"></div>
                  </div>
              

            </div>
        
            <div class="box-section">

              

              
                  
                  <div class="progress progress-green">
                    <div class="bar tip" title="26%" data-percent="26" style="width: 26%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-green">
                    <div class="bar tip" title="33%" data-percent="33" style="width: 33%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-green active">
                    <div class="bar tip" title="39%" data-percent="39" style="width: 39%;"></div>
                  </div>
              

            </div>
        
            <div class="box-section">

              

              
                  
                  <div class="progress progress-orange">
                    <div class="bar tip" title="16%" data-percent="16" style="width: 16%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-orange">
                    <div class="bar tip" title="48%" data-percent="48" style="width: 48%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-orange active">
                    <div class="bar tip" title="12%" data-percent="12" style="width: 12%;"></div>
                  </div>
              

            </div>
        
            <div class="box-section">

              

              
                  
                  <div class="progress progress-black">
                    <div class="bar tip" title="16%" data-percent="16" style="width: 16%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-black">
                    <div class="bar tip" title="19%" data-percent="19" style="width: 19%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-black active">
                    <div class="bar tip" title="49%" data-percent="49" style="width: 49%;"></div>
                  </div>
              

            </div>
        
            <div class="box-section">

              

              
                  
                  <div class="progress progress-red">
                    <div class="bar tip" title="24%" data-percent="24" style="width: 24%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-red">
                    <div class="bar tip" title="44%" data-percent="44" style="width: 44%;"></div>
                  </div>
              
                  
                  <div class="progress progress-striped progress-red active">
                    <div class="bar tip" title="45%" data-percent="45" style="width: 45%;"></div>
                  </div>
              

            </div>
        
      </div>
    </div>

    <div class="box">
      <div class="box-header">
        <span class="title">Tooltips</span>
        <ul class="box-toolbar">
          <li>
            <input class="iButton-icons" type="checkbox" checked="checked" />
          </li>
        </ul>
      </div>

      <div class="box-content padded">
        <a href="#" class="btn btn-green" rel="tooltip" data-placement="top" data-original-title="Tooltip on top">on top</a>
        <a href="#" class="btn btn-green" rel="tooltip" data-placement="right" title="Tooltip on right">on right</a>
        <a href="#" class="btn btn-green" rel="tooltip" data-placement="bottom" title="Tooltip on bottom">on bottom</a>
        <a href="#" class="btn btn-green" rel="tooltip" data-placement="left" title="Tooltip on left">on left</a>
      </div>
    </div>

    <div class="box">
      <div class="box-header">
        <span class="title">Modals with custom content</span>
        <ul class="box-toolbar">
          <li><span class="label label-green">+98</span></li>
        </ul>
      </div>

      <div class="box-content padded">
        <a data-toggle="modal" href="#modal-simple" class="btn btn-blue"><i class="icon-comments-alt"></i> Simple modal</a>
        <a data-toggle="modal" href="#modal-form" class="btn btn-blue"><i class="icon-external-link"></i> Modal with form</a>
        <a data-toggle="modal" href="#modal-tables" class="btn btn-blue"><i class="icon-table"></i> Modal with tables</a>
      </div>
    </div>

    <div class="box">
      <div class="box-header">
        <ul class="nav nav-tabs nav-tabs-left">
          <li class="active"><a href="#home" data-toggle="tab"><i class="icon-home"></i></a></li>
          <li><a href="#messages" data-toggle="tab"><i class="icon-comments-alt"></i> <span>Messages</span></a></li>
          <li><a href="#settings" data-toggle="tab"><i class="icon-cog"></i> <span>Settings</span></a></li>
        </ul>

        <div class="title">Left tabs</div>
      </div>

      <div class="box-content padded">
        <div class="tab-content">
          <div class="tab-pane active" id="home">Going home</div>
          <div class="tab-pane" id="profile">And now to the profile</div>
          <div class="tab-pane" id="messages">No new messages</div>
          <div class="tab-pane" id="settings">Changing the settings</div>
        </div>
      </div>
    </div>

    <div class="box">
      <div class="box-header">
        <div class="title">Right tabs</div>

        <ul class="nav nav-tabs nav-tabs-right">
          <li class="active"><a href="#home2" data-toggle="tab"><i class="icon-home"></i></a></li>
          <li><a href="#messages2" data-toggle="tab"><i class="icon-comments-alt"></i> <span>Messages</span></a></li>
          <li><a href="#settings2" data-toggle="tab"><i class="icon-cog"></i> <span>Settings</span></a></li>
        </ul>

      </div>

      <div class="box-content padded">
        <div class="tab-content">
          <div class="tab-pane active" id="home2">Going home</div>
          <div class="tab-pane" id="profile2">And now to the profile</div>
          <div class="tab-pane" id="messages2">No new messages</div>
          <div class="tab-pane" id="settings2">Changing the settings</div>
        </div>
      </div>
    </div>

  </div>

</div>


<!-- find me in partials/modal_simple -->

<div id="modal-simple" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h6 id="modal-tablesLabel">Modal Heading</h6>
  </div>
  <div class="modal-body">
    Cool stuff eh?
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Close</button>
    <button class="btn btn-blue">Save changes</button>
  </div>
</div>
<!-- find me in partials/modal_form -->

<div id="modal-form" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h6 id="modal-formLabel">Modal Heading</h6>
  </div>
  <div class="modal-body">
    <form class="form-horizontal fill-up separate-sections">
      <div>
        <label>Enter your name here</label>
        <input type="text" name="regular" placeholder="Your name" />
      </div>

      <div class="divider"><span></span></div>

      <div class="row-fluid">
        <div class="span6">
          <label>And a dropdown with search:</label>
          <select class="chzn-select" name="colors">
<option value="SAE/ECE Amber (color)">SAE/ECE Amber (color)</option>
<option value="Alabama Crimson">Alabama Crimson</option>
<option value="Alizarin crimson">Alizarin crimson</option>
<option value="Anti-flash white">Anti-flash white</option>
<option value="Aero blue">Aero blue</option>
<option value="Air superiority blue">Air superiority blue</option>
<option value="Antique brass">Antique brass</option>
<option value="Almond">Almond</option>
<option value="American rose">American rose</option>
<option value="Amazon">Amazon</option>
<option value="Air Force blue (RAF)">Air Force blue (RAF)</option>
<option value="Antique bronze">Antique bronze</option>
<option value="Amethyst">Amethyst</option>
<option value="Antique fuchsia ">Antique fuchsia </option>
<option value="Amber">Amber</option>
<option value="Amaranth">Amaranth</option>
<option value="Alloy orange">Alloy orange</option>
<option value="Alice blue">Alice blue</option>
<option value="Air Force blue (USAF)">Air Force blue (USAF)</option>
<option value="Android Green">Android Green</option></select>
        </div>
        <div class="span6">
          <label>or without search...</label>
          <select class="uniform" name="colors">
<option value="Alabama Crimson">Alabama Crimson</option>
<option value="Amaranth">Amaranth</option>
<option value="Antique brass">Antique brass</option>
<option value="SAE/ECE Amber (color)">SAE/ECE Amber (color)</option>
<option value="American rose">American rose</option>
<option value="Alizarin crimson">Alizarin crimson</option>
<option value="Alloy orange">Alloy orange</option>
<option value="Antique fuchsia ">Antique fuchsia </option>
<option value="Air Force blue (USAF)">Air Force blue (USAF)</option>
<option value="Android Green">Android Green</option>
<option value="Air superiority blue">Air superiority blue</option>
<option value="Antique bronze">Antique bronze</option>
<option value="Aero blue">Aero blue</option>
<option value="Anti-flash white">Anti-flash white</option>
<option value="Amethyst">Amethyst</option>
<option value="Alice blue">Alice blue</option>
<option value="Amber">Amber</option>
<option value="Amazon">Amazon</option>
<option value="Air Force blue (RAF)">Air Force blue (RAF)</option>
<option value="Almond">Almond</option></select>
        </div>
      </div>

      <div class="divider"><span></span></div>

      <div>
        <textarea rows="4" placeholder="Enter your comments here"></textarea>
      </div>

      <div class="row-fluid">
        <div class="span6">
          <div>
            <input type="checkbox" class="icheck" checked id="icheckModal1">
            <label for="icheckModal1">The number one option</label>
          </div>

          <div>
            <input type="checkbox" class="icheck" id="icheckModal2">
            <label for="icheckModal2">The number two option</label>
          </div>
        </div>

        <div class="span6">
          <div>
            <input type="radio" name="optionsRadios" class="icheck" checked id="iradioModal1">
            <label for="iradioModal1">The number one option</label>
          </div>

          <div>
            <input type="radio" name="optionsRadios" class="icheck" id="iradioModal2">
            <label for="iradioModal2">The number two option</label>
          </div>
        </div>

      </div>
    </form>

  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Close</button>
    <button class="btn btn-blue">Save changes</button>
  </div>
</div>
<!-- find me in partials/modal_tables -->

<div id="modal-tables" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h6 id="modal-tablesLabel">Modal Heading</h6>
  </div>
  <div class="modal-body nopadding">
    <!-- find me in partials/data_tables_custom -->

<div id="dataTables">

<table cellpadding="0" cellspacing="0" border="0" class="dTable-small responsive">
<thead>
<tr>
  <th><div>Rendering engine</div></th>
  <th><div>Browser</div></th>
  <th><div>Platform(s)</div></th>
  <th><div>Engine version</div></th>
</tr>
</thead>
<tbody>
<tr>
  <td>Trident</td>
  <td>Internet
    Explorer 4.0</td>
  <td>Win 95+</td>
  <td class="center">4</td>
</tr>
<tr>
  <td>Trident</td>
  <td>Internet
    Explorer 5.0</td>
  <td>Win 95+</td>
  <td class="center">5</td>
</tr>
<tr>
  <td>Trident</td>
  <td>Internet
    Explorer 5.5</td>
  <td>Win 95+</td>
  <td class="center">5.5</td>
</tr>
<tr>
  <td>Trident</td>
  <td>Internet
    Explorer 6</td>
  <td>Win 98+</td>
  <td class="center">6</td>
</tr>
<tr>
  <td>Trident</td>
  <td>Internet Explorer 7</td>
  <td>Win XP SP2+</td>
  <td class="center">7</td>
</tr>
<tr>
  <td>Trident</td>
  <td>AOL browser (AOL desktop)</td>
  <td>Win XP</td>
  <td class="center">6</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Firefox 1.0</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.7</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Firefox 1.5</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Firefox 2.0</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Firefox 3.0</td>
  <td>Win 2k+ / OSX.3+</td>
  <td class="center">1.9</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Camino 1.0</td>
  <td>OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Camino 1.5</td>
  <td>OSX.3+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Netscape 7.2</td>
  <td>Win 95+ / Mac OS 8.6-9.2</td>
  <td class="center">1.7</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Netscape Browser 8</td>
  <td>Win 98SE+</td>
  <td class="center">1.7</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Netscape Navigator 9</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.0</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.1</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.1</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.2</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.2</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.3</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.3</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.4</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.4</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.5</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.5</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.6</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">1.6</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.7</td>
  <td>Win 98+ / OSX.1+</td>
  <td class="center">1.7</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Mozilla 1.8</td>
  <td>Win 98+ / OSX.1+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Seamonkey 1.1</td>
  <td>Win 98+ / OSX.2+</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Gecko</td>
  <td>Epiphany 2.20</td>
  <td>Gnome</td>
  <td class="center">1.8</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>Safari 1.2</td>
  <td>OSX.3</td>
  <td class="center">125.5</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>Safari 1.3</td>
  <td>OSX.3</td>
  <td class="center">312.8</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>Safari 2.0</td>
  <td>OSX.4+</td>
  <td class="center">419.3</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>Safari 3.0</td>
  <td>OSX.4+</td>
  <td class="center">522.1</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>OmniWeb 5.5</td>
  <td>OSX.4+</td>
  <td class="center">420</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>iPod Touch / iPhone</td>
  <td>iPod</td>
  <td class="center">420.1</td>
</tr>
<tr>
  <td>Webkit</td>
  <td>S60</td>
  <td>S60</td>
  <td class="center">413</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 7.0</td>
  <td>Win 95+ / OSX.1+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 7.5</td>
  <td>Win 95+ / OSX.2+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 8.0</td>
  <td>Win 95+ / OSX.2+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 8.5</td>
  <td>Win 95+ / OSX.2+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 9.0</td>
  <td>Win 95+ / OSX.3+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 9.2</td>
  <td>Win 88+ / OSX.3+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera 9.5</td>
  <td>Win 88+ / OSX.3+</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Opera for Wii</td>
  <td>Wii</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Nokia N800</td>
  <td>N800</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Presto</td>
  <td>Nintendo DS browser</td>
  <td>Nintendo DS</td>
  <td class="center">8.5</td>
</tr>
<tr>
  <td>KHTML</td>
  <td>Konqureror 3.1</td>
  <td>KDE 3.1</td>
  <td class="center">3.1</td>
</tr>
<tr>
  <td>KHTML</td>
  <td>Konqureror 3.3</td>
  <td>KDE 3.3</td>
  <td class="center">3.3</td>
</tr>
<tr>
  <td>KHTML</td>
  <td>Konqureror 3.5</td>
  <td>KDE 3.5</td>
  <td class="center">3.5</td>
</tr>
<tr>
  <td>Tasman</td>
  <td>Internet Explorer 4.5</td>
  <td>Mac OS 8-9</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Tasman</td>
  <td>Internet Explorer 5.1</td>
  <td>Mac OS 7.6-9</td>
  <td class="center">1</td>
</tr>
<tr>
  <td>Tasman</td>
  <td>Internet Explorer 5.2</td>
  <td>Mac OS 8-X</td>
  <td class="center">1</td>
</tr>
<tr>
  <td>Misc</td>
  <td>NetFront 3.1</td>
  <td>Embedded devices</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Misc</td>
  <td>NetFront 3.4</td>
  <td>Embedded devices</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Misc</td>
  <td>Dillo 0.8</td>
  <td>Embedded devices</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Misc</td>
  <td>Links</td>
  <td>Text only</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Misc</td>
  <td>Lynx</td>
  <td>Text only</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Misc</td>
  <td>IE Mobile</td>
  <td>Windows Mobile 6</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Misc</td>
  <td>PSP browser</td>
  <td>PSP</td>
  <td class="center">-</td>
</tr>
<tr>
  <td>Other browsers</td>
  <td>All others</td>
  <td>-</td>
  <td class="center">-</td>
</tr>
</tbody>
</table>
</div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Close</button>
    <button class="btn btn-blue">Save changes</button>
  </div>
</div>


  </div>
</div>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-40069579-1']);
    _gaq.push(['_setDomainName', 'beer2code.com']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>
