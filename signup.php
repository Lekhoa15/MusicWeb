<?php
session_start();

include('db_connect.php');
$msg = false;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];

if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)){

    // validation


    if($user_password == $user_re_password){
        $query = "insert into user (user, email, password) VALUES ('$user_name', '$user_email','$user_password')";
        mysqli_query($con, $query);
        header("Location: login.php");
    } else{
        $msg = "Password Not Match";
    
    }    
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
    <link rel="shortcut icon" type="image/png" href="./assets/image/ac.png" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

    <title>Music Website SignUp</title>
</head>

<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Sign Up</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your UserName..." required>
                    </div>
                    <div class="card">
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Enter Your Email..." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password..." required>
                    </div>
                    <div class="card">
                        <label for="re-password">Re-Password</label>
                        <input type="password" name="user_re_password" placeholder="Enter Your Re-Password..." required>
                    </div>
                    <p id="capslock-warning" hidden>⚠️Caps Lock is on</p>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id="">
                        <span>Save PassWord</span>
                    </div>
                    <p>You have a account ? <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="assets/image/sigun.png" alt="">
            <!-- <h3>Inccorect Password</h3> -->
            <?php
                echo ('<h3>'.$msg.'</h3>');
            ?>

        </div>
    </header>
    <script>
    const passwordInput = document.querySelector("input[name='user_password']");
    const warning = document.getElementById("capslock-warning");
    passwordInput.addEventListener('keyup', (event) => {
        if (event.getModifierState('CapsLock')) {
            warning.hidden = false;
        } else {
            warning.hidden = true;
        }
    })
    </script>

</body>

</html>