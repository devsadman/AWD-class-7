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
    <?php
        if(isset($_POST['account'])){
            $name=$_POST['name'];
            $skill=$_POST['skill'];
            $bio=$_POST['bio'];
            $files=$_FILES['photo'];
            
            
            if(empty($name)||empty($skill)||empty($bio)){
                $msg=msgShow('All Fields are Required','danger');
            }else{
                $file_name=move($files,'temms/');
                $user_data=[
                    'name' => $name,
                    'skill' => $skill,
                    'bio' => $bio,
                    'photo' => $file_name,
                ];
                $users=json_encode($user_data);
                setcookie('users',$users,time()+(60*60*24*365));
                $msg=msgShow('Dev Team added Successfully','success');
            }

        }
    ?>
   <div class="container">
       <div class="row justify-content-center mt-3">
           <div class="col-md-3">
               <div class="card">
                   <div class="card-header">
                       <h3>Create an Account</h3>
                       <?php
                       if(isset($msg)){
                           echo $msg;
                       }
                       ?>
                      
                   </div>
                   <div class="card-body">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Skill</label>
                            <input type="text" name="skill" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Bio</label>
                            <textarea name="bio" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                           <img src="" id="load" alt="">
                            <input type="file" style="display: none;" name="photo" class="form-control" id="photo">
                            <label for="photo"><img class="upload" src="assets/img/photo.jpg" alt=""></label>
                        </div>
                        <div class="form-group">
                            
                            <input type="submit" name="account" class="btn btn-primary" value="Sign Up">
                        </div>
                    </form>
                   </div>
               </div>
           </div>
           <div class="col-md-9">
               <?php
                    $all_users=$_COOKIE['users'];
                    $data= json_decode($all_users,false);
               ?>
               <div class="card team">
                   <div class="card-body">
                       <img src="temms/<?php echo $data->photo;?>" alt="">
                       <h3><?php echo $data->name;?></h3>
                       <h5><?php echo $data->skill;?></h5>
                       <p><?php echo $data->bio;?></p>
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