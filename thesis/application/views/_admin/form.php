<!doctype html>
<html>
<head>

  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">


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

        

    

        

            <li class="dark-nav ">

              <span class="glow"></span>

              

              <a class="accordion-toggle collapsed " data-toggle="collapse" href="#Xcz3n2KpY4">
                  <i class="icon-beaker icon-2x"></i>
                    <span>
                      UI Lab
                      <i class="icon-caret-down"></i>
                    </span>

              </a>

              <ul id="Xcz3n2KpY4" class="collapse ">
                
                    <li class="">
                      <a href="../ui_lab/buttons.html">
                          <i class="icon-hand-up"></i> Buttons
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../ui_lab/general.html">
                          <i class="icon-beaker"></i> General elements
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../ui_lab/icons.html">
                          <i class="icon-info-sign"></i> Icons
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../ui_lab/grid.html">
                          <i class="icon-th-large"></i> Grid
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../ui_lab/tables.html">
                          <i class="icon-table"></i> Tables
                      </a>
                    </li>
                
                    <li class="">
                      <a href="../ui_lab/widgets.html">
                          <i class="icon-plus-sign-alt"></i> Widgets
                      </a>
                    </li>
                
              </ul>

            </li>

        

    

        

            <li class="active">
              <span class="glow"></span>
              <a href="forms.html">
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

              

              <a class="accordion-toggle collapsed " data-toggle="collapse" href="#tw5EKuXfEr">
                  <i class="icon-link icon-2x"></i>
                    <span>
                      Others
                      <i class="icon-caret-down"></i>
                    </span>

              </a>

              <ul id="tw5EKuXfEr" class="collapse ">
                
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
        <div class="sparkline big" data-color="gray"><!--4,8,4,18,29,21,28,12,7,23,26,15--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="dark-green"><span>Income</span> $43.330</h4>
        <div class="sparkline big" data-color="darkGreen"><!--5,27,24,28,28,17,23,24,29,11,24,25--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="blue"><span>Reviews</span> 223</h4>
        <div class="sparkline big" data-color="blue"><!--4,11,13,26,13,29,11,24,17,26,17,9--></div>
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
            <i class="icon-edit"></i>
            Form Elements
          </h3>
          <h5>
            A subtitle can be added here
          </h5>
        </div>

        <ul class="inline pull-right sparkline-box">

          <li class="sparkline-row">
            <h4 class="blue"><span>Orders</span> 847</h4>
            <div class="sparkline big" data-color="blue"><!--5,21,18,19,21,4,4,10,5,8,29,5--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="green"><span>Reviews</span> 223</h4>
            <div class="sparkline big" data-color="green"><!--24,10,13,15,3,7,8,29,7,14,13,23--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="red"><span>New visits</span> 7930</h4>
            <div class="sparkline big"><!--20,24,14,11,27,28,22,10,13,16,27,8--></div>
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
            <i class="icon-edit"></i> Form Elements
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">
  <div class="span12">

    <div class="box">
      <div class="box-header">
        <span class="title">Forms</span>
        <ul class="box-toolbar">
          <li>
            <i class="icon-refresh"></i>
          </li>
          <li>
            <input type="checkbox" class="iButton-icons" checked="checked" />
          </li>
          <li class="toolbar-link">
            <a href="#" class="dropdown" data-toggle="dropdown"><i class="icon-cog"></i></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="icon-plus-sign"></i> Add</a></li>
              <li><a href="#"><i class="icon-remove-sign"></i> Remove</a></li>
              <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="box-content">

        <form class="fill-up">

          <div class="row-fluid">
            <div class="span6">

              <ul class="padded separate-sections">

                <li class="input">
                  <input type="text" placeholder="Email"/>
                </li>

                <li class="input">
                  <input type="text" placeholder="Address"/>
                </li>

                <li class="input">
                  <input type="text" placeholder="Username"/>
                </li>

                <li class="input">
                  <input type="password" placeholder="Password"/>
                </li>

                <li class="clearfix">
                  <div class="note pull-right">Please use a secure password</div>
                </li>

                <li class="input">
                  <input type="file" name="img">
                </li>

                <li>
                  <label>Dropdown with search:</label>
                  <select class="chzn-select" name="colors">
<option value="Amethyst">Amethyst</option>
<option value="Aero blue">Aero blue</option>
<option value="Alabama Crimson">Alabama Crimson</option>
<option value="Amber">Amber</option>
<option value="Antique brass">Antique brass</option>
<option value="Antique bronze">Antique bronze</option>
<option value="Air Force blue (USAF)">Air Force blue (USAF)</option>
<option value="Amazon">Amazon</option>
<option value="Alice blue">Alice blue</option>
<option value="Android Green">Android Green</option>
<option value="Almond">Almond</option>
<option value="Air Force blue (RAF)">Air Force blue (RAF)</option>
<option value="Antique fuchsia ">Antique fuchsia </option>
<option value="Air superiority blue">Air superiority blue</option>
<option value="Alloy orange">Alloy orange</option>
<option value="Amaranth">Amaranth</option>
<option value="Anti-flash white">Anti-flash white</option>
<option value="SAE/ECE Amber (color)">SAE/ECE Amber (color)</option>
<option value="American rose">American rose</option>
<option value="Alizarin crimson">Alizarin crimson</option></select>
                </li>

                <li>
                  <label>Dropdown menu:</label>
                  <select class="uniform" name="colors">
<option value="Alloy orange">Alloy orange</option>
<option value="Amber">Amber</option>
<option value="Alizarin crimson">Alizarin crimson</option>
<option value="American rose">American rose</option>
<option value="Alabama Crimson">Alabama Crimson</option>
<option value="Antique brass">Antique brass</option>
<option value="Android Green">Android Green</option>
<option value="Almond">Almond</option>
<option value="Aero blue">Aero blue</option>
<option value="Antique fuchsia ">Antique fuchsia </option>
<option value="Amaranth">Amaranth</option>
<option value="Alice blue">Alice blue</option>
<option value="Anti-flash white">Anti-flash white</option>
<option value="SAE/ECE Amber (color)">SAE/ECE Amber (color)</option>
<option value="Air superiority blue">Air superiority blue</option>
<option value="Amethyst">Amethyst</option>
<option value="Air Force blue (USAF)">Air Force blue (USAF)</option>
<option value="Amazon">Amazon</option>
<option value="Antique bronze">Antique bronze</option>
<option value="Air Force blue (RAF)">Air Force blue (RAF)</option></select>
                </li>

                <li>
                  <label>Dropdown with multiple choice:</label>
                  <select multiple="multiple" name="colors[]" class="chzn-select">
                    <option value="SAE/ECE Amber (color)">SAE/ECE Amber (color)</option>
                    <option value="Alloy orange">Alloy orange</option>
                    <option value="Amethyst">Amethyst</option>
                    <option value="Antique bronze">Antique bronze</option>
                    <option value="Air superiority blue">Air superiority blue</option>
                    <option value="Amber" selected="selected">Amber</option>
                    <option value="Anti-flash white" selected="selected">Anti-flash white</option>
                    <option value="Android Green">Android Green</option>
                    <option value="Air Force blue (RAF)">Air Force blue (RAF)</option>
                    <option value="Amazon">Amazon</option>
                    <option value="Alabama Crimson">Alabama Crimson</option>
                    <option value="Amaranth" selected="selected">Amaranth</option>
                    <option value="Alizarin crimson">Alizarin crimson</option>
                    <option value="Air Force blue (USAF)">Air Force blue (USAF)</option>
                    <option value="American rose">American rose</option>
                    <option value="Alice blue">Alice blue</option>
                    <option value="Aero blue">Aero blue</option>
                    <option value="Antique fuchsia ">Antique fuchsia </option>
                    <option value="Antique brass">Antique brass</option>
                    <option value="Almond">Almond</option></select>
                </li>

                <li class="input">
                  <label>Tags:</label>
                  <textarea class="tags" placeholder="This is a textarea">tag1,tag2,tag3</textarea>
                </li>
              </ul>
            </div>

            <div class="span6">

              <ul class="padded separate-sections">
                <li class="input">
                  <textarea placeholder="This is a textarea" rows="6"></textarea>
                </li>

                <li>
                  <div class="row-fluid">

                    <div class="span6">
                      <div>
                        <input type="checkbox" class="icheck" checked id="icheck1">
                        <label for="icheck1">The number one option</label>
                      </div>

                      <div>
                        <input type="checkbox" class="icheck" id="icheck2">
                        <label for="icheck2">The number two option</label>
                      </div>
                    </div>

                    <div class="span6">
                      <div>
                        <input type="checkbox" class="icheck" disabled id="icheck3">
                        <label for="icheck3">Number three (disabled)</label>
                      </div>

                      <div>
                        <input type="checkbox" class="icheck" checked disabled id="icheck4">
                        <label for="icheck4">Number four (disabled & checked)</label>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <input class="datepicker fill-up" type="text" placeholder="date picker">
                </li>

                <li>
                  <div class="row-fluid">

                    <div class="span6">

                      <div>
                        <input type="radio" name="optionsRadios[abc]" class="icheck" checked id="iradio1">
                        <label for="iradio1">The number one option</label>
                      </div>

                      <div>
                        <input type="radio" name="optionsRadios[abc]" class="icheck" id="iradio2">
                        <label for="iradio2">The number two option</label>
                      </div>

                    </div>

                    <div class="span6">

                      <div>
                        <input type="radio" class="icheck" disabled id="iradio3">
                        <label for="iradio3">Number three (disabled)</label>
                      </div>

                      <div>
                        <input type="radio" class="icheck" checked disabled id="iradio4">
                        <label for="iradio4">Number four (disabled & checked)</label>
                      </div>

                    </div>
                  </div>
                </li>
                <li>
                  <div class="row-fluid">
                    <div class="span12">

                      <div class="note large">
                        <i class="icon-warning-sign"></i> Warning: You have to complete all fields
                      </div>

                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non felis non orci congue mollis. Sed euismod magna sed nunc dignissim tincidunt. Maecenas faucibus varius elit.
                      </p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-blue">Save changes</button>
            <button type="button" class="btn btn-default">Cancel</button>
            <div class="pull-right">
              <div>
                <input type="checkbox" class="icheck" checked id="ichecks">
                <label for="ichecks">Sign me up for tha' newsletta!</label>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>


<div class="row-fluid">
  <div class="span12">

    <div class="box">
      <div class="box-header">
        <span class="title"><i class="icon-warning-sign"></i> Forms with validation</span>
      </div>

      <div class="box-content">

        <form class="form-horizontal fill-up validatable">

          <div class="padded">

            <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="text" class="validate[required]" data-prompt-position="topLeft"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address</label>
              <div class="controls">
                <input type="text" class="validate[required]" data-prompt-position="topLeft"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text" class="validate[required]" data-prompt-position="topLeft"/>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Password</label>
              <div class="controls">
                <input type="password" id="password" class="validate[required,minSize[4]]">
                <span class="help-block note"><i class="icon-warning-sign"></i> Please use a secure password.</span>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Confirmation</label>
              <div class="controls">
                <input type="password" id="password_confirmation" class="validate[required,equals[password],minSize[4]]"/>
              </div>
            </div>

          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-blue">Save changes</button>
            <button type="button" class="btn btn-default">Cancel</button>
            <div class="pull-right">
              <div>
                <input type="checkbox" class="icheck" id="ichecks2">
                <label for="ichecks2">Sign me up for tha' newsletta!</label>
              </div>
            </div>
          </div>
        </form>

      </div>
    </div>

  </div>
</div>


<div class="box">
  <div class="box-header"><span class="title">Bootstrap X-Editable</span></div>
  <div class="box-content">
    <!-- find me in partials/bootstrap_editable -->

<table id="user" class="table table-striped responsive" style="clear: both">
  <tbody>

  <tr>
    <td width="15%">Username</td>
    <td width="50%"><a href="#" class="editable" id="username" data-type="text" data-pk="1" data-original-title="Enter username">superuser</a></td>
    <td width="35%"><span class="muted">Simple text field</span></td>
  </tr>

  <tr>
    <td>First name</td>
    <td><a href="#" id="firstname" class="editable" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-original-title="Enter your firstname"></a></td>
    <td><span class="muted">Required text field, originally empty</span></td>
  </tr>

  <tr>
    <td>Sex</td>
    <td><a href="#" id="sex" class="editable" data-type="select" data-pk="1" data-value="" data-original-title="Select sex"></a></td>
    <td><span class="muted">Select, loaded from js array. Custom display</span></td>
  </tr>

  <tr>
    <td>Group</td>
    <td><a href="#" id="group" class="editable" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-original-title="Select group">Admin</a></td>
    <td><span class="muted">Select, loaded from server. <strong>No buttons</strong> mode</span></td>
  </tr>

  <tr>
    <td>Status</td>
    <td><a href="#" id="status" class="editable" data-type="select" data-pk="1" data-value="0" data-original-title="Select status">Active</a></td>
    <td><span class="muted">Error when loading list items</span></td>
  </tr>

  <tr>
    <td>Plan vacation?</td>
    <td><a href="#" id="vacation" class="editable" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-original-title="When you want vacation to start?">25.02.2013</a></td>
    <td><span class="muted">Datepicker</span></td>
  </tr>

  <tr>
    <td>Comments</td>
    <td><a href="#" id="comments" class="editable" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Enter comments">awesome<br>user!</a></td>
    <td><span class="muted">Textarea. Submit by ctrl+enter</span></td>
  </tr>

  <tr>
    <td>Type State <sup><span class="editable" class="label label-success">new</span></sup></td>
    <td><a href="#" id="state" data-type="typeahead" data-pk="1" data-placement="right" data-original-title="Start typing State.."></a></td>
    <td><span class="muted">Typeahead (bootstrap only)</span></td>
  </tr>

  <tr>
    <td>Fresh fruits</td>
    <td><a href="#" id="fruits" class="editable" data-type="checklist" data-value="2,3" data-original-title="Select fruits"></a></td>
    <td><span class="muted">Checklist</span></td>
  </tr>

  <tr>
    <td>Country</td>
    <td><a href="#" id="country" class="editable" data-type="select2" data-pk="1" data-value="BS" data-original-title="Select country"></a></td>
    <td><span class="muted">Select2 (dropdown mode)</span></td>
  </tr>

  <tr>
    <td>Address</td>
    <td><a href="#" id="address" class="editable" data-type="address" data-pk="1" data-original-title="Please, fill address"></a></td>
    <td><span class="muted">Your custom input, several fields</span></td>
  </tr>

  </tbody>
</table>

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
