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
    if(isset($_POST['account'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $cell=$_POST['cell'];
        $uname=$_POST['uname'];
        $age=$_POST['age'];
        $validation=true;
        if(empty($name)||empty($email)||empty($cell)||empty($uname)||empty($age)){
            $msg[]=msgShow("All Fields are Required",'danger');
            $validation=false;

        }
        if(emailCheck($email)==false){

            $msg[]=msgShow("Invalid Email",'danger');
            $validation=false;

        }
        if(ageCheck($age)==false){

            $msg[]=msgShow("You are under Age",'warning');
            $validation=false;
        }
        if(insEmail($email,['aust.edu.bd'])==false){
            $msg[]=msgShow("Invalid Institute E-mail",'danger');
            $validation=false;
        } 
        if(CellCheck($cell)==false){
            $msg[]=msgShow("Cell Format is Invalid",'danger');
            $validation=false;
        }
        
        if($validation==true){
            formClear();
            $msg[]=msgShow("Data Stable",'success');
           
        }
    }
    ?>
   
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Create an Account</h3>
                        <?php
                            if(isset($msg)){
                                foreach($msg as $m){
                                    echo $m;
                                }
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="<?php echo old('name') ?>">
                            </div>
                            <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="text" name="email" class="form-control" value="<?php echo old('email') ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Cell</label>
                                <input type="text" name="cell" class="form-control" value="<?php echo old('cell') ?>">
                            </div>
                            <div class="form-group">
                                <label for="">User Name</label>
                                <input type="text" name="uname" class="form-control" value="<?php echo old('uname') ?>" >
                            </div>
                            <div class="form-group">
                                <label for="">Age</label>
                                <input type="text" name="age" class="form-control" value="<?php echo old('age') ?>">
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