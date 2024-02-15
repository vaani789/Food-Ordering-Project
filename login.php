<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo site_url(); ?>public/css/style1.css">
</head>
<body>
    <div class="wrapper">
      <div class="title">
          Login Form
        </div>
      <form method="POST" action="<?php echo site_url('loginaction');?>" autocomplete="off">
        <div class="field">
          <input type="text" name="name" autocomplete="false" required>
          <label>Name</label>
        </div>
        <div class="field">
          <input type="text" name="email" autocomplete="false" required>
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="password" autocomplete="false" required>
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="chk" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
        <div class="pass-link">
            <a href="#">Forgot password?</a></div>
        </div>
        <div class="field">
          <input type="submit" name="submit"  value="submit">
        </div>
        <div class="signup-link">
            Not a member? <a href="reg">Signup now</a></div>
    </form>
</div>
</body>
</html>