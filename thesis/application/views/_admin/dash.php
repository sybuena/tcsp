<div class="main-content">
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-dashboard"></i>
            Dashboard
          </h3>
          <h5>
            Good day! <?php echo $firstname.' '.$surname; ?>
          </h5>
        </div>

        <?php /*<ul class="inline pull-right sparkline-box">

          <li class="sparkline-row">
            <h4 class="blue"><span>Orders</span> 847</h4>
            <div class="sparkline big" data-color="blue"><!--19,6,22,23,3,20,8,18,12,3,23,19--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="green"><span>Reviews</span> 223</h4>
            <div class="sparkline big" data-color="green"><!--24,21,28,22,3,9,24,11,17,20,25,17--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="red"><span>New visits</span> 7930</h4>
            <div class="sparkline big"><!--27,10,29,17,20,5,16,17,4,4,22,13--></div>
          </li>

        </ul>*/ ?>
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
            <i class="icon-dashboard"></i> Dashboard
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid padded">
    <div class="row-fluid">

  <div class="span3">
    <!-- find me in partials/action_nav_normal -->

<!--big normal buttons-->
<div class="action-nav-normal">

  <!--<div class="row-fluid">
    <div class="span6 action-nav-button">
      <a href="#" title="New Project">
        <i class="icon-file-alt"></i>
        <span>New Project</span>
      </a>
      <span class="triangle-button red"><i class="icon-plus"></i></span>
    </div>

    <div class="span6 action-nav-button">
      <a href="#" title="Messages">
        <i class="icon-comments-alt"></i>
        <span>Messages</span>
      </a>
      <span class="label label-black">14</span>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6 action-nav-button">
      <a href="#" title="Files">
        <i class="icon-folder-open-alt"></i>
        <span>Files</span>
      </a>
    </div>

    <div class="span6 action-nav-button">
      <a href="#" title="Users">
        <i class="icon-user"></i>
        <span>Users</span>
      </a>
      <span class="triangle-button green"><span class="inner">+3</span></span>
    </div>
  </div>

  <div class="row-fluid">
    <div class="span6 action-nav-button">
      <a href="#" title="Friends">
        <i class="icon-facebook-sign"></i>
        <span>Friends</span>
      </a>
    </div>

    <div class="span6 action-nav-button">
      <a href="#" title="Followers">
        <i class="icon-twitter"></i>
        <span>Followers</span>
      </a>
      <span class="triangle-button blue"><span class="inner">+8</span></span>
    </div>
  </div>-->

</div>
  </div>

  <div class="span9">
  
    <!-- find me in partials/big_chart -->

<!--<div class="box">
  <div class="box-header">
    <div class="title">Sales Stats</div>
    <ul class="box-toolbar">
      <li class="toolbar-link">
        <a href="#" data-toggle="dropdown"><i class="icon-cog"></i></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-plus-sign"></i> Add</a></li>
          <li><a href="#"><i class="icon-remove-sign"></i> Remove</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="box-content padded">
    <div class="row-fluid">
      <div class="span4 separate-sections" style="margin-top: 5px;">

        <div class="row-fluid">
          <div class="span12">
            <div class="dashboard-stats">
              <ul class="inline">
                <li class="glyph"><i class="icon-bolt icon-2x"></i></li>
                <li class="count">973,119</li>
              </ul>
              <div class="progress progress-blue"><div class="bar tip" title="80%" data-percent="80"></div></div>
              <div class="stats-label">Total Visits</div>
            </div>
          </div>
        </div>

        <div class="row-fluid" style="margin-top:30px;">
          <div class="span6">
            <div class="dashboard-stats small">
              <ul class="inline">
                <li class="glyph"><i class="icon-user"></i></li>
                <li class="count">8800</li>
              </ul>
              <div class="progress progress-blue"><div class="bar tip" title="65%" data-percent="65"></div></div>
              <div class="stats-label">New Visitors</div>
            </div>
          </div>

          <div class="span6">
            <div class="dashboard-stats small">
              <ul class="inline">
                <li class="glyph"><i class="icon-eye-open"></i></li>
                <li class="count">25668</li>
              </ul>
              <div class="progress progress-blue"><div class="bar tip" title="80%" data-percent="80"></div></div>
              <div class="stats-label">Page Views</div>
            </div>
          </div>
        </div>

      </div>
      <div class="span8">
        <div class="sine-chart" id="xchart-sine"></div>
      </div>
    </div>
  </div>
</div>-->

  </div>
</div>


<div class="row-fluid">
  <div class="span6">
    <div class="box">
      <div class="box-header">
        <div class="title">Activities</div>
      </div>

      <div class="box-content">
        <div id="calendar"></div>
      </div>
    </div>
  </div>

  <div class="span6">
    <div class="box">
      <div class="box-header">
        <span class="title">Latest News</span>
        <ul class="box-toolbar">
          <li><span class="label label-blue">178</span></li>
        </ul>
      </div>
      <div class="box-content scrollable" style="height: 552px; overflow-y: auto">
        <!-- find me in partials/news_with_icons -->

  <?php for($i = 0; $i <10; $i++) :?>
<div class="box-section news with-icons">
  <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
  <div class="news-time">
    <span>06</span> jan
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Latest News!</a></div>
    <div class="news-text">
      Latest news will be put here
    </div>
  </div>
</div>

  <?php endfor;?>




</div>





 


    </div>


      </div>
    </div>
  </div>
</div>

<div class="row-fluid">

  <div class="span12">
    
<!--<ul class="chat-box timeline">

  <li class="arrow-box-left gray">
    <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar1.jpg" /></div>
    <div class="info">
      <span class="name">
        <span class="label label-green">COMMENT</span> <strong class="indent">Janine</strong> posted a comment on this task: <strong>Core Admin</strong>
      </span>
      <span class="time"><i class="icon-time"></i> 3 minutes ago</span>
    </div>
    <div class="content">
      <blockquote>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </blockquote>
      <div>
        <a href="#"><i class="icon-paper-clip"></i> <b>project_news.docx</b></a>
      </div>
    </div>
  </li>

  <li class="arrow-box-left gray">
    <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar2.jpg" /></div>
    <div class="info">
      <span class="name">
        <span class="label label-blue">TASK</span> <strong class="indent">John</strong> completed this task: <strong class="strikethrough">Core Admin</strong>
      </span>
      <span class="time"><i class="icon-time"></i> 6 minutes ago</span>
    </div>
  </li>

  <li class="arrow-box-left gray">
    <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar3.jpg" /></div>
    <div class="info">
      <span class="name">
        <span class="label label-purple">FILE</span> <strong class="indent">John</strong> added 3 new files in project: <strong>Core Admin</strong>
      </span>
      <span class="time"><i class="icon-time"></i> 12 minutes ago</span>
    </div>
    <div class="content">
      <ul class="thumbnails padded">
        
            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/240x100" alt="">
              </a>
            </li>
        
            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/240x100" alt="">
              </a>
            </li>
        
            <li class="span3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/240x100" alt="">
              </a>
            </li>
        
      </ul>
    </div>
  </li>
</ul>-->

<!--<div class="box closable-chat-box">
  <div class="box-content padded">

    <div class="fields">
      <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar2.jpg" /></div>
      <ul>
        <li><b>Add a comment for project <a href="#">Core Admin</a></b></li>
        <li class="note">Click on the textarea below to expand it!</li>
      </ul>
    </div>

    <form class="fill-up" action="/">

      <div class="chat-message-box">
        <textarea name="ttt" id="ttt" rows="5" placeholder="add a comment (click to expand!)"></textarea>
      </div>

      <div class="clearfix actions">
        <span class="note">An optional note can go here</span>
        <div class="pull-right faded-toolbar">
          <a href="#" class="tip" title="Attach files"><i class="icon-paper-clip"></i></a>
          <a href="#" class="btn btn-blue btn-mini">Send</a>
        </div>
      </div>
    </form>

  </div>
</div>-->

  </div>
</div>

  </div>
</div>


