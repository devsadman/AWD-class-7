<?php
    include_once('autoload.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
   
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Create an Account</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" >
                            </div>
                            
                            <div class="form-group">
                                <label for="">Skill</label>
                                <input type="text" name="skill" class="form-control" >
                            </div>
                            
                            <div class="form-group">
                                <label for="">Bio</label>
                                <textarea name="bio" class="form-control" id=""></textarea>
                            </div>
                            <div class="form-group">
                                <img id="load" src="" alt="">
                                <input type="file" style="display: none;" class="form-control" name="photo" id="photo">
                                <label for="photo"><img src="assets/img/photo.jpg" alt="" class="upload"></label>
                            </div>
                           
                            <div class="form-group">
                                
                                <input type="submit" name="account" class="btn btn-info" value="Sign Up">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>