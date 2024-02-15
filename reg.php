<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo site_url(); ?>public/css/style1.css">
  </head>
<body>

<?= \Config\Services::validation()->listErrors();?>
  <div class="wrapper">
    <div class="title">
      Registration Form
    </div>

    <form method="POST" action="reg">
        <div class="field">
          <input type="text" name="name">
          <label>Name</label>
        </div>
        <div class="field">
            <input type="text" name="email">
            <label>Email</label>
        </div>
        <div class="field">
            <input type="text" name="phone">
            <label>Phone</label>
        </div>
        <div class="field">
            <input type="password" name="password">
            <label>Password</label>
        </div>
        <div class="field">
            <input type="password" name="confirmpassword">
            <label>confirm password</label>
        </div>
        <div class="field">
            <a href="login"><input type="submit" name="btn" value="Submit"></a>
        </div>
        <div class="signup-link">
          Already have an account <a href="login"><b>Signin now</b></a>
        </div>
    </form>
  </div>
</body>
</html>