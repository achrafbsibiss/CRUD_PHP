<?php

    include("connecxion.php");

    if(isset($_GET['id'])){
    
    $id=$_GET['id'];
    $sql="SELECT * FROM  client  WHERE id='$id'";
    $idselect=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_assoc($idselect);
    $name=$rows['name'];
    $number=$rows['number'];
    $email=$rows['email'];
    $adress=$rows['adress'];

    
};
  

?>