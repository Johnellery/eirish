<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payroll</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
<link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form login-form">
            <form action="login-user.php" method="POST" autocomplete="">
                <h2 class="text-center" aria-label="Login Form">Login</h2>
                <p class="text-center" aria-label="Instructions">Please enter your email and password to continue.</p>
                <?php
                if(count($errors) > 0){
                    ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?php
                        foreach($errors as $showerror){
                            echo $showerror;
                        }
                        ?>
                    </div>
                    <?php
                }
                ?>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email Address" required value="<?php echo $email ?>" aria-describedby="email-input-desc">
                    <small id="email-input-desc" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Enter your Password" required aria-describedby="password-input-desc">
                    <small id="password-input-desc" class="form-text text-muted">Password must be 8 characters, with one uppercase.</small>
                    
                </div>
                <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                <div class="form-group">
                <input class="form-control button" type="submit" name="signup" value="Create new account">
                </div>
                <div class="link login-link text-center">Don't have an account ? <a href="signup-user.php">Signup now</a></div>
            </form>
        </div>
    </div>
</div>

</body>
</html>