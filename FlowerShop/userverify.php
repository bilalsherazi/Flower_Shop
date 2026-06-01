<!--VERIFY.PHP-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php 
session_start();
include ("CRUD_ops/config.php");
if(isset($_POST["ulogin"])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $username= validate ($_POST['uname']);
    $pass= validate($_POST['pass']);
    if(empty($username)){
        ?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Username is missing</strong>
        </div>      
        <?php
        header("location:login.php?error=user name is required");
        exit();
    }
    else if(empty($pass)){
        ?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Password is missing</strong>
        </div>      
        <?php
        header("location:userlogin.php?error=user pass is required");
        exit();
    }
    else{
        $sql="SELECT * FROM users WHERE Username='$username' AND Password='$pass'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            header("location:HomePage.php");
            exit();
        }
        else{
            
                $_SESSION['error_message'] = 'Incorrect Username or Password';
                header("location:ulogin.php");
                exit();
                
        }
    }
}

else{
    header("location:HomePage.php");
    exit();
}
session_abort();
?>
</body>
</html>