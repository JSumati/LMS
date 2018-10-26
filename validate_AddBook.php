<?php
  session_start();
  $id = $_POST['id'];
  $bookname = $_POST['name'];
  $writername = $_POST['writer'];
  $publication = $_POST['publication'];
  $edition =  $_POST['edition'];
  $copies = $_POST['copies'];
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
     if($result->num_rows > 0)
    {
        header("Location:home_Books.php?year=2017&month=all");
        exit();
    }
    $sql="INSERT INTO booklist (Name, Edition, writer, Publication, NumOfCopies, bookid)    
      VALUES  ('".$_POST['name']."', '".$_POST['edition']."', '".$_POST['writer']."', '".$_POST['publication']."', '".$_POST['copies']."', '".$_POST['id']."' )";
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