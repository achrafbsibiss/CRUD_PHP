<?php
    require("connecxion.php");

    if(isset($_GET['id'])){
        $name= $_POST["name"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $adress=$_POST["adress"];
        $id=$_POST['id'];

        $sql="UPDATE client SET name='$name', email='$email' , number='$number', adress='$adress' WHERE id='$id'";
        $result=mysqli_query($conn,$sql);
        if(isset($result)){
            echo "<p>updatet successful</p>";
        }else{
            echo "<p>updatet failed </p>";
        };

    }else{
    $name= $_POST["name"];
    $email=$_POST["email"];
    $number=$_POST["number"];
    $adress=$_POST["adress"];

    

    $insert="insert into client (name,email,number,adress) values ('$name','$email','$number','$adress')";

    $query=mysqli_query($conn,$insert);

    if(isset($query)){
        echo "<p>Insert successful</p>";
    }else{
        echo "<p>Insert failed </p>";
    };
};

?>
