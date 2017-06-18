<!DOCTYPE html>
<html lang="en">
<head>
<title>Engineers Management</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Management</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href=""><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Manage Team</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="form-common.html">Add Team</a></li>
        <li><a href="form-validation.html">Edit Team</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Manage Project</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="form-common.html">Add Project</a></li>
        <li><a href="form-validation.html">Edit Project</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Manage Engineer</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="../AddEngineer">Add Engineer</a></li>
        <li><a href="../EngineerManagement">Manage Engineer</a></li>
      </ul>
    </li>
    <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Log out</span></a></li>

    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->
  <?php echo $__env->yieldContent('content'); ?>
<!-- <div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Engineers Management</a> </div>
    <h1>Engineers Management</h1>
  </div>
  <div class="container-fluid">
    <hr>
        <div style="width: 150px; float: left; margin-bottom: 5px;">
        <label for="">Experience</label>
          <select name="">
            <option value="">All</option>
            <option value="">No experience</option>
            <option value="">1 year</option>
            <option value="">More 2 years</option>
            <option value="">More 5 years</option>
            <option value="">More 10 years</option>              
          </select>         
        </div> 
        <div style="width: 150px;float: left; margin-bottom: 5px;">
        <label for="">Technical Skill</label>
          <select name="">
            <option value="">PHP</option>
            <option value="">Java</option>
            <option value="">C++</option>
            <option value="">.Net</option>
            <option value="">Ruby</option>
            <option value="">Android</option>              
          </select>         
        </div>  
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <button class="btn btn-info" style="margin: 3px 0px 0px 3px;">Add Engineer</button>
            
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Technical Skill</th>
                  <th>Experience</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeX">
                  <td>EN001</td>
                  <td>Long (Leesin) N.B. TRAN</td>
                  <td>Danang City</td>
                  <td>intern.m0011@enclave.vn</td>
                  <td>01654351834</td>
                  <td>PHP, Java</td>
                  <td>10 years</td>
                  <td> <a href="" ><i class="icon-edit" style="margin-left: 10px;"></i></a></td>
                  <td> <a href="" ><i class="icon-remove" style="margin-left: 15px;"></i></a></td>
                </tr>
                 <tr class="gradeX">
                  <td>EN002</td>
                  <td>Nhan (Leesin) N.B. TRAN</td>
                  <td>Danang City</td>
                  <td>intern.m0011@enclave.vn</td>
                  <td>01654351834</td>
                  <td>PHP, Java</td>
                  <td>10 years</td>
                  <td> <a href="" ><i class="icon-edit" style="margin-left: 10px;"></i></a></td>
                  <td> <a href="" ><i class="icon-remove" style="margin-left: 15px;"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
