<?php
if($fullname == "Thanhdeptrai"){
    header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html>  
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> học php</title>
</head>
<body>
    <div class="container fluid">
        <form method="POST" action="process_form.php">
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
         
            <button class="btn btn-success">Register</button>
        </form>
    </div>
</body>
</html>