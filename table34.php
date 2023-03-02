<div class="container my-5">
    <h2>list of client</h2>
    <a class="btn btn-primary" href="/crud_php/create.php" role="button"> new client</a>
    <br>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">number</th>
            <th scope="col">adress</th>
            <th scope="col">time</th>
            <th scope="col">action</th>

            </tr>
        </thead>
    <?php
    require("connecxion.php");
    $select="SELECT * FROM client";
    
    $query=mysqli_query($conn,$select);
   


    
    
    ?>
    <tbody>
 
        <?php 

                while($row= mysqli_fetch_assoc($query)){
                        
                    echo"
                    <tr>
                        <th scope='row'>$row[id]</th>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[number]</td>
                        <td>$row[adress]</td>
                        <td>$row[creat_date]</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='/crud_php/create.php?id=$row[id]'>edit</a>
                            <a class='btn btn-danger btn-sm' href='/crud_php/delete.php?id=$row[id]'>Delete</a>

                        </td>

                     </tr>
                    ";
                }

        
        ?>
        
      
    </tbody>
    </table>

</div> 