<?php
  session_start();
  function login($username, $password)
  {
    $dbserver = "localhost";
    $dbusername = "Sumati";
    $dbpassword = "1234";
    $dbname = "lmstables";
    
    $mysqli = new mysqli($dbserver, $dbusername, $dbpassword, $dbname);
  
    if($mysqli->connect_error)
    {
      die("\nConnection failed: " . $mysqli->connect_error);
    }
    $query = 'SELECT ID FROM userinfo WHERE Email= "' . $username . '" AND '. ' Password= "' . $password . '" AND role= "' . student . '"';
    $result = $mysqli->query($query);
    if($result->num_rows == 1)
    {
      $row = $result->fetch_assoc();
      $_SESSION['userid'] = $row['ID'];
      $_SESSION['username'] = $username;
      echo $row['ID'];
      return true;
    }
    else{
      return false;
    }
  }

  $validLogin = login($_POST['username'], $_POST['password']);
  
  if ($validLogin){
      header("Location:home_Student.php?year=2017&month=all");
      exit();
   } else {
      header("Location:Login.html?error=true");
   }
?>