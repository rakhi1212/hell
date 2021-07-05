<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:profiile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
</head>
<body>



        <?php
            include_once "configuration.php";

                $id=$_SESSION['id'];kjrdjkgjkjtjhwvehrjtkylohikujyhgtrewdrgthyjmkiloujhy6t5re
                
                $username=$_SESSION['username'];
                
                $password=$_SESSION['password'];
                $mobile=$_SESSION['mobile'];
                $token=$_SESSIONfgjfhgks['token'];

                

               // $username = $_SESSION['email'];
                


                


                if($username=="")
                {
                    $err= "Enter Your email!";
                }
               
                

                else
                {
                $password = password_hash($password, PASSWORD_DEFAULT);
                    $updatesql= "UPDATE `users` SET `username` = '$username',  `password` = '$password','mobile' = '$mobile' WHERE id=$id";
                    echo"$updatesql";

                    $updatequery = mysqli_query($conn, $updatesql);

                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['confirm_password'] = $confirm_password;
                    $_SESSION['mobile'] = $mobile;

                    header("location:profile.php");
                }
        


    ?>





                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $_SESSION['username']; ?>
                                    </h5>
                                    <h6>
                                        <?php echo $_SESSION['password']; ?>
                                    </h6>
                                    <h6>
                                        <?php echo $_SESSION['mobile']; ?>
                                    </h6>

                                    
                                    <p style=background-color:red;><?php 
                                        if(isset($err)){
                                            echo $err;
                                        }
                                    ?>
                                    </p>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['id']; ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email']; ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><input type="password"  value="<?php echo $_SESSION['mobile']; ?>"/></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="submit" name="submit" class="profile-edit-btn" name="btnAddMore" value="Update Profile"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                                <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab" href="profile.php">Cancel</a>
                                        </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    
</body>
</html>
