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
   </style>
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
          <li><a href="home_Books.php">View Books</a></li>
          <li><a href="Issued_books.php">Issued Books</a></li>
          <li><a href="Issue.php">Issue Books</a></li>
          <li><a href="Return.php">Return Books</a></li>
          <li><a href="add_Book.php">Add Books</a></li>
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
            <a class="navbar-brand" href="home_Books.php">Library Management System</a>
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
        <h1>Updated Library</h1>

        <div class="tbl-header-outer">          
          <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
              <thead>
                <tr>
                  <th>Books</th>
                  <th>Edition</th>
                  <th>Writers</th>
                  <th>Publication</th>
                  <th>Code</th>
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
                $date = date("Y-m-d");
                
                //if ($_GET['year'] != '') $date = $_GET['year'].'-';
                //$userid = '1';
                if ($_SESSION['userid'] != '') $userid = substr($_SESSION['userid'], 3,1);                $query = 'SELECT * FROM booklist'; 
                //<!--WHERE edate LIKE "'//.$date.'%"'.' ORDER BY edate ASC, eshift ASC;';
                
                //echo $query;
                $result = $mysqli->query($query);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc())
                  {
                    echo "<tr><td>" . $row['Name'] ."</td><td>" .$row['Edition'].
                         "</td><td>". $row['writer'] ."</td><td>" .$row['Publication'].
                         "</td><td>". $row['bookid']  ."</td><tr>";
                  }
                }  
              ?>
            </tbody>
          </table>
        </div>
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
               <!-- <table class="table table-hover" id="dev-table">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Read Time</th>
                      <th>Shift</th>
                      <th>Energy Consumption</th>
                      <th>Cost</th>
                    </tr>
                  </thead>-->
                  <!--<tbody>
                    <?php
                      //$dbserver = "localhost";
                      //$dbusername = "Sumati";
                     //$dbpassword = "1234";
                      //$dbname = "electricity_master";
                      
                      //$mysqli = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
                      
                      //if($mysqli->connect_error)
                      //{
                       // die("\nConnection failed: " . $mysqli->connect_error);
                      //}
                      //$date = date("Y-m-d");
                      
                      //if ($_GET['year'] != '') $date = $_GET['year'].'-';
                      
                      //$query = 'SELECT * FROM energy_center_1 WHERE edate LIKE "'.$date.'%"'.' ORDER BY edate ASC, eshift ASC;';
                      
                      //echo $query;
                      //$result = $mysqli->query($query);
                      //if($result->num_rows > 0)
                      //{
                        //while($row = $result->fetch_assoc())
                        //{
                          //echo "<tr><td>" . $row['edate'] ."</td><td>" .$row['etime'].
                               //"</td><td>". $row['eshift'] ."</td><td>" .$row['ewatthr'].
                              // "</td><td>". $row['ecost']  ."</td></tr>";
                        //}
                     // }  
                      ?>
                  </tbody>
                </table>-->
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
