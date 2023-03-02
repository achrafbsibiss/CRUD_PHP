

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>addclient</title>
</head>
<body>
    <div class="container my-5">
        <h2>New client</h2>
        

        <div class="felx" style="display:flex">
        <a href="/crud_php/"><span ><-back</span></a>
        <a href="/crud_php/index.php"><span style=padding-left:10px>admin-></span></a>
        </div>

        <?php
            include('edit.php')
        ?>


        <form method="post" action="tchek.php?<?php  if(isset($_GET['id'])){echo"id=update";} ?>" >
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">


                    <input type="text" class="from-control" value="<?php

                        if(isset($_GET['id'])){
                            echo"$name";
                        };
                    
                    ?>" name="name" >
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="email" class="from-control" name="email" 
                    value="<?php

                            if(isset($_GET['id'])){
                                echo"$email";
                            };

                            ?>"
                    
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">number</label>
                <div class="col-sm-6">
                    <input type="text" class="from-control" name="number" 
                    
                    value="<?php

                        if(isset($_GET['id'])){
                            echo"$number";
                        };
                    
                    ?>"
                    
                    
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">adress</label>
                <div class="col-sm-6">
                    <input type="text" class="from-control" name="adress" 
                    
                    value="<?php

                        if(isset($_GET['id'])){
                            echo"$adress";
                        };
                    
                    ?>"
                    
                    >
                </div>
            </div>
           

            <?php

            if(isset($_GET['id'])){
                echo"<input type='submit' value='Update'>";
            }else{
                    echo"<input type='submit' value='submit'>";
            };

            ?>

            
            

        </form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>