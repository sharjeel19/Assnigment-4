<?php 
//192380023
//Anas Zulfiqar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movies</title>
   <style>
   
   .add-heading{
    height: 80px;
    background-color: dodgerblue;
    color: white;
    text-align: center;
    font-size: 50px;;
}

.add-form{

    height: 500px;
    margin: 0%;
    padding: 0%;
    background-color: dodgerblue;
}

   
   </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container col-sm-8 add-heading">
MOVIES COUNTER
</div>

<div class="container col-sm-8 mt-5 add-form text-white">


<form action="add_movie_script.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Movie Title</label>
                        <input type="text" name="title" id="title" class="form-control" required maxlength="512">
                    </div>
                    <div class="form-group">
                        <label for="rating">Movie Rating</label>
                        <input type="number" name="rating" id="rating" class="form-control" required min="1" max="5">
                    </div>

                    <div class="form-group">
                        <label for="date">Release Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Movie Image</label>
                        <input type="file" class="form-control-file" name="upload" id="upload" accept="image/*" required>
                    </div>

                    <input type="submit" value="Add Movie" class="btn btn-primary" name="submit">
                </form>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>