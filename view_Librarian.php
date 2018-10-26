<?php
  session_start(); 
  if($_SESSION['userid'] == '')
  {
      header("Location: Admin.html");
      die();
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--<style type="text/css">
      .btn { 
display: inline-block;
*display: inline;
*zoom: 1;
padding: 4px 10px 4px;
margin-bottom: 0;
font-size: 13px;
line-height: 18px;
color: #333333;
text-align: center;
text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
vertical-align: middle;
background-color: #f5f5f5;
background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
background-image: linear-gradient(top, #ffffff, #e6e6e6);
background-repeat: repeat-x;
filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0);
border-color: #e6e6e6 #e6e6e6 #e6e6e6;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
border: 1px solid #e6e6e6;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
cursor: pointer;
*margin-left: .3em;
}
.btn:hover,.btn:active,.btn.active,.btn.disabled,.btn[disabled]{ 
background-color: #e6e6e6;
}
.btn-large {
padding: 9px 14px;
font-size: 15px;
line-height: normal;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}
.btn:hover {
color: #333333;
text-decoration: none;
background-color: #e6e6e6;
background-position: 0 -15px;
-webkit-transition: background-position 0.1s linear;
-moz-transition: background-position 0.1s linear;
-ms-transition: background-position 0.1s linear;
-o-transition: background-position 0.1s linear;
transition: background-position 0.1s linear;
}
.btn-primary, .btn-primary:hover{
text-shadow: 0
-1px 0 rgba(0, 0, 0, 0.25);
color: #ffffff;
}
.btn-primary.active{
color: rgba(255, 255, 255, 0.75);
}
.btn-primary {
background-color: #4a77d4;
background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4);
background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4));
background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4);
background-image: -o-linear-gradient(top, #6eb6de, #4a77d4);
background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x;
filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);
border: 1px solid #3762bc;
text-shadow: 1px 1px 1px rgba(0,0,0,0.4);
box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5);
}
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
filter: none; background-color: #4a77d4;
}
.btn-block {
width: 100%;
display:block;
}
    </style>-->
    
  
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel = "icon" type="image/jpg" href="img/icon.png">
    <title>Library Management System</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" href="js/table.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="#">Menu</a></li>
          <li><a href="view_Librarian.php">View Librarian</a></li>
           <li><a href="add_Librarian.php">Add Librarian</a></li>
            <li><a href="delete_Librarian.php">Delete Librarian</a></li>
        </ul>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div class="container-fluid">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="#menu-togglee" class="navbar-brand btn btn-default" id="menu-toggle">
              <img src="img/menu.svg"></a>
            <a class="navbar-brand" href="home_Admin.php">Library Management System</a>
          </div>

          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <strong><?php echo $_SESSION['username']; ?></strong> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Home.html"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <section>
        <!--for demo wrap-->
        <div style="margin-top: 70px;padding-bottom: 10px"></div>
        <h1> Librarians Record </h1>
        <div class="tbl-header-outer">          
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>LibraryID</th>
                  <th>Full Name</th>
                  <th>Contact</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <?php
                $dbserver = "localhost";
                $dbusername = "Sumati";
                $dbpassword = "1234";
                $dbname = "lmstables";
                
                $mysqli = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
                
                if($mysqli->connect_error)
                {
                  die("\nConnection failed: " . $mysqli->connect_error);
                }
                //$date = date("Y-m-d");
                
                //if ($_GET['year'] != '') $date = $_GET['year'].'-';
                //$userid = '1';
                if ($_SESSION['userid'] != '') $userid = substr($_SESSION['userid'], 3,1);
                $query = 'SELECT * FROM librarianrecords'; 
                //<!--WHERE edate LIKE "'//.$date.'%"'.' ORDER BY edate ASC, eshift ASC;';
                
                //echo $query;
                $result = $mysqli->query($query);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc())
                  {
                    echo "<tr><td>" . $row['Lid'] ."</td><td>" .$row['Name'].
                         "</td><td>". $row['ContactNo'] ."</td></tr>";
                  }
                }  
              ?>
            </tbody>
          </table>
        </div>
        <br>
       <!--<div><a href="Librarian_add.php"> <button class="btn btn-primary btn-block btn-large">Add Librarian</button></a></div>-->

      </section>
      <!--<div id="page-content-wrapper">
        <div><a href="#menu-togglee" class="btn btn-default" id="menu-toggle">Menu</a></div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <form method="post" action="index.php">
                  </form>-->
                  <!--<h3 class="panel-title">Your Daily Cunsumption Record</h3>-->
                  <div class="pull-right">
                    <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                    <i class="glyphicon glyphicon-filter"></i>
                    </span>
                  </div>
                </div>
                <div class="panel-body">
                  <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <!-- /#page-content-wrapper -->
    </div>
    <div style="width:100%;position: fixed; bottom: 0; text-align: center;z-index: 10;background-color: #222;vertical-align: bottom;color: white">
      <p>Copyright &copy; 2017 Library Management System</p>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });
    </script>
  </body>
</html>