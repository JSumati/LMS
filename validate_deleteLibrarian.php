<?php
  //session_start();
  //$username= $_POST['username'];
  //$email = $_POST['email'];
  $id = $_POST['id'];
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
    $query = "SELECT * FROM librarianrecords WHERE  Lid='".$id."' ";
    $result = $mysqli->query($query);
     if($result->num_rows == 0)
    {
        //echo "Librarian does not exist!";
        header("Location:view_Librarian.php?year=2017&month=all");
       
    }
    $sql="DELETE FROM librarianrecords where Lid = '$id' ";
      if ($mysqli->query($sql) === TRUE)
        {
          header("Location:view_Librarian.php?year=2017&month=all");
      exit();
       } 
      else {
           echo "Error: " . $sql . "<br>" . $mysqli->error;
           }
    
  

$mysqli->close(); 
}
?>