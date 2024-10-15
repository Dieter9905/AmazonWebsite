<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
</head>

<body>
    <?php
    session_start();
    require_once 'db/database.php';

    if(isset($_POST['mobile_email'])){
        $mobile_email = $_POST['mobile_email'];
        $sql = "SELECT * FROM user WHERE mobile_email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $mobile_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0){
            // Email exists, redirect to signinpas.php
            $_SESSION['mobile_email'] = $mobile_email;
            header("Location: signinpas.php");
            exit();
        } else {
            $error = "Email not found";
        }
        // Thêm dòng này để debug
        error_log("Debug: mobile_email = $mobile_email, redirect status: " . (isset($_SESSION['mobile_email']) ? "success" : "fail"));
    }
    ?>
    <form action="signin.php" method="post">
    <a href="index.html"><img class="logo" src="./assets/amazon_logo_dark.png" width="100px" alt=""></a>
    <div class="signin-container">
        <h1 class="signin-title">Sign in</h1>
        <h5 class="input-lable">Email or mobile phone number</h5>
        <input type="text" name="mobile_email" id="" required>
        <div class="btn-signin">
                <button type="submit">Continue</button>
        </div>
        <p class="signin-conditon">By continuing, you agree to Amazon's <span>Conditions of Use</span> and <span> Privacy Notice.</span></p>
        <p class="signin-help">&#9656 <span> Need help</span></p>
        <hr>
        <h4>Buying for work?</h4>
        <p class="signin-business"><span>Shop on Amazon Business</span></p>
    </div>
    <div class="signin-bottom">
        <hr>
        <p>New to Amazon?</p>
        <hr>
    </div>
    <a href="signup.php" class="signin-signup-link">
        <button type="button" class="signin-signup-btn">Create your Amazon account</button>
    </a>
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