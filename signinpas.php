<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Password</title>
    <link rel="stylesheet" href="signin.css">
    <style>
        .change-link h5 {
            color: #0066c0;
            transition: color 0.3s ease;
        }
        .change-link h5:hover {
            text-decoration: underline;
            cursor: pointer;
            color: #c45500 !important;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    require_once 'db/database.php';

    if(!isset($_SESSION['mobile_email'])) {
        header("Location: signin.php");
        exit();
    }

    $mobile_email = $_SESSION['mobile_email'];

    if(isset($_POST['password'])){
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE mobile_email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $mobile_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                // Password is correct, set session variables
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_fullname'] = $row['fullname'];
                $_SESSION['user_email'] = $row['mobile_email'];
                $_SESSION['logged_in'] = true;
                $_SESSION['role'] = $row['role'];
                
                error_log("Debug: User role = " . $row['role']);
                
                if($row['role'] == 1){
                    error_log("Debug: Redirecting to doc/index.php");
                    header("Location: doc/index.php");
                } else {
                    error_log("Debug: Redirecting to index.php");
                    header("Location: index.php");
                }
                exit();
            } else {
                error_log("Debug: Password verification failed");
                $error = "Incorrect password";
            }
        } else {
            $error = "User not found";
        }
    }
    ?>
    <form action="signinpas.php" method="post">
        <a href="index.html"><img class="logo" src="./assets/amazon_logo_dark.png" width="100px" alt=""></a>
        <div class="signin-container">
            <h1 class="signin-title">Sign in</h1>
            <div class="mail" style="display: flex">
            <h5 class="input-lable" style="font-weight:300"> <?php echo htmlspecialchars($mobile_email); ?></h5>
            <a href="signin.php" class="change-link" style="text-decoration: none;"> <h5 class="input-lable" style="font-weight:300; margin-left: 10px">Change</h5></a>
            </div>
            
            <div class="password-container" style="display: flex; justify-content: space-between;">
                <h5 class="input-lable">Password</h5>
                <h5 class="input-lable" style="font-weight:300; color:#0066c0">Forgot password?</h5>
            </div>
            <input type="password" name="password" required>
            <div class="btn-signin">
                <button type="submit">Sign In</button>
            </div>
            <?php
            if(isset($error)) {
                echo "<p style='color: red;'>$error</p>";
            }
            ?>
            <div class="keep-signed-in">
                <input type="checkbox" id="keep-signed-in" name="keep-signed-in" style="width: 13px; height: 13px;">
                <label for="keep-signed-in" style="font-size: 13px; margin-left: 3px;">Keep me signed in. <a href="#" style="color: #0066c0; margin: 5px; font-size: 13px;">Details</a></label>
            </div>
            <div class="signin-bottom">
            <hr>
            <p>or</p>
            <hr>
            </div>
            <div class="passkey-container">
    <button type="button" class="passkey-button custom-passkey-btn">Sign in with a passkey</button>
</div>
           
        </div>
    </form>
    <footer>
        <div class="footer-links">
            <a href="#">Conditions of Use</a>
            <a href="#">Privacy Notice</a>
            <a href="#">Help</a>
        </div>
        <p class="footer-copyright">© 1996-2024, Amazon.com, Inc. or its affiliates</p>
    </footer>
</body>

</html>