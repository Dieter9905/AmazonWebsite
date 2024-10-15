<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
$errors = array();
$success_message = "";

if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $mobile_email = $_POST['mobile_email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    if(empty($fullname) OR empty($mobile_email) OR empty($password) OR empty($repeat_password)){
        $errors['all_fields'] = "All fields are required";
    }
    if(!filter_var($mobile_email,FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Invalid email address";
    }
    if(strlen($password) < 6){
        $errors['password'] = "Password must be at least 6 characters";
    }
    if($password != $repeat_password){
        $errors['password_match'] = "Passwords do not match";
    }
    
    require_once 'db/database.php';
    $sql = "SELECT * FROM user WHERE mobile_email = '$mobile_email'";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);
    if($rowCount > 0){
        $errors['email_exists'] = "Email already exists";
    }
    
    if(empty($errors)){
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (fullname, mobile_email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        if($prepareStmt){
            mysqli_stmt_bind_param($stmt,"sss",$fullname,$mobile_email,$passwordHash);
            mysqli_stmt_execute($stmt);
            $success_message = "Account created successfully. Please sign in.";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'signin.php'; // Redirect to signin page after signup
                    }, 2000);
                  </script>";
        }else{
            $errors['db_error'] = "Something went wrong";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .error {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .success {
        color: green;
        font-size: 1em;
        margin-bottom: 15px;
        text-align: center;
    }
    </style>
</head>
<body>
<?php
if(!empty($success_message)) {
    echo "<div class='success'>{$success_message}</div>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'signin.php';
            }, 2000);
          </script>";
}
?>
<form action="signup.php" method="post">
    <a href="index.html"><img class="logo" src="./assets/amazon_logo_dark.png" width="100px" alt=""></a>
    <div class="signin-container">
        <h1 class="signin-title">Create account</h1>
        <h5 class="input-lable">Your name</h5>
        <input type="text" name="fullname" placeholder="First and last name" value="<?php echo isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : ''; ?>">
        <?php if(isset($errors['all_fields'])) echo "<p class='error'>{$errors['all_fields']}</p>"; ?>
        
        <h5 class="input-lable">Mobile number or email</h5>
        <input type="text" name="mobile_email" value="<?php echo isset($_POST['mobile_email']) ? htmlspecialchars($_POST['mobile_email']) : ''; ?>">
        <?php 
        if(isset($errors['email'])) echo "<p class='error'>{$errors['email']}</p>";
        if(isset($errors['email_exists'])) echo "<p class='error'>{$errors['email_exists']}</p>";
        ?>
        
        <h5 class="input-lable">Password</h5>
        <input type="password" name="password" placeholder="At least 6 characters">
        <?php if(isset($errors['password'])) echo "<p class='error'>{$errors['password']}</p>"; ?>
        
        <div class="condition">
            <i class="fa-solid fa-info"></i> <p style="margin-left: 5px;">Passwords must be at least 6 characters.</p>
        </div>
        
        <h5 class="input-lable">Re-enter password</h5>
        <input type="password" name="repeat_password">
        <?php if(isset($errors['password_match'])) echo "<p class='error'>{$errors['password_match']}</p>"; ?>
        <div class="btn-signin">
            <button type="submit" name="submit">Continue</button>
        </div>
        <p class="signin-conditon">By creating an account, you agree to Amazon's <span>Conditions of Use</span> and <span> Privacy Notice.</span></p>

        <hr style="margin-top: 20px;">
        <h4>Buying for work?</h4>
        <p class="signin-business"><span style="color:#0066c0;">Create a free business account</span></p>
    </div>
    <div class="signin-bottom">
        <hr>
        <p>Have an account?</p>
        <hr>
    </div>
    <a href="signin.php" class="signin-link">
        <button type="button" class="signin-signup-btn">Login with Amazon account</button>
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