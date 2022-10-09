<?php
include('shared/header.php');
?>
<div class="login-page-wrap">
    <div class="login-page-content">
        <div class="login-box">
            <div class="item-logo">
                <img src="img/logo2.png" alt="logo">
            </div>
            <form action="index_a.php" class="login-form" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" placeholder="Enter usrename" class="form-control" name="uname" value="admin@csc.com">
                    <i class="far fa-envelope"></i>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Enter password" class="form-control" name="pwd" value="Demo@123">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember-me">
                        <label for="remember-me" class="form-check-label">Remember Me</label>
                    </div>
                    <a href="#" class="forgot-btn">Forgot Password?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- Login Page End Here -->
<?php
include('shared/footer.php');
?>
