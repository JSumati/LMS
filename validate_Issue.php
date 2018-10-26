<?php
  session_start();
  $id = $_POST['id'];
  $bookname = $_POST['name'];
  $writername = $_POST['writer'];
  $publication = $_POST['publication'];
  $edition =  $_POST['edition'];
  $copies = $_POST['copies'];
  $updatedcopies = $copies-1;
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
    $query = 'SELECT * FROM booklist WHERE  Name="'.$bookname.'" AND '. '  Edition="'.$edition.'"  AND '. ' writer="'.$writername.'" ';
    $result = $mysqli->query($query);
     if($result->num_rows == 0)
    {
        header("Location:home_Books.php?year=2017&month=all");
        exit();
    }
    $sql='UPDATE booklist  
          SET NumOfCopies="'.$updatedcopies.'"
          WHERE bookid="'.$_POST['id'].'" ';

      if ($mysqli->query($sql) === TRUE)
        {
          header("Location:home_Books.php?year=2017&month=all");
          exit();
       } 
      else {
           echo "Error: " . $sql . "<br>" . $mysqli->error;
           }
    
  

$mysqli->close(); 
}
?>