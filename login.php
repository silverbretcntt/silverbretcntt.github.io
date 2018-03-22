<?php
session_start();
include('header.php');
?>
<link rel="stylesheet" href="css/login.css">
  <form method="POST" action="login_action.php">
    <div class="login-page">
  <div class="form">
    <form class="login-form">
      <input name="username" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
      <button name="btn_submit">login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>
</div>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

<?php
include('footer.php');
?>