<?php
    // to create the connexion to database from connecxion
    include('connecxion.php');
    // to get witch id to want to delete
    $id = $_GET['id'];

    // the query to  delete the user

    $delete="DELETE FROM client WHERE id=$id";

    $query=mysqli_query($conn,$delete);

    if(isset($query)){
        // if the query is not false 
        header("location:index.php");
    };


?>