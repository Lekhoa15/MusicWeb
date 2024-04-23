<?php
 session_start();
 $msg = false;
 include('db_connect.php');
 if(isset($_POST['user_name'])){
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    $query = "select * from user where user ='".$user_name. "' AND password ='".$user_password."' limit 1";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result)==1){
        header('Location: welcome.php');

    }else{
        $msg = "Incorrect Password";
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" type="image/png" href="./assets/image/ac.png"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Music Website Login</title>
</head>
<body>
   <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post" >
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Enter Your UserName..." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password"  class="form-control"   name="user_password" placeholder="Enter Your Password..." required>
                    </div>
                    <p id="capslock-warning" hidden>⚠️Caps Lock is on</p>
                   <input type="submit" value="Login" class="submit">
                   <div class="check">
                        <input type="checkbox" name="" id="">
                        <span>Save PassWord</span>
                   </div>
                   <p>Don't have a account ? <a href="signup.php">Sign Up</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="assets/image/loginmu.png" alt="">
            <!-- <h3>Inccorect Password</h3>     -->
        <?php 
            echo ('<h3>'.$msg.'</h3>');
        ?>
        </div>
   </header>
   <script>
    const passwordInput = document.querySelector("input[name='user_password']");
    const warning = document.getElementById("capslock-warning");
    passwordInput.addEventListener('keyup', (event) => {
        if (event.getModifierState('CapsLock')){
            warning.hidden = false;
        } else {
            warning.hidden = true;
        }
    })
</script>

</body>

</html>