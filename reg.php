<?PHP
require_once './includes/security.php';
if ($user->isLoggedIn()){
  header('Location: /');
  die();
}
require_once './template/header.php';
?>
<body style="background:#dcd8d4;">
  <?PHP require_once './template/nav.php'; ?>
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-6 col-md-offset-3 form-panel">
        <h1>Registration form</h1><br>
        <form class="form" role="form" method="post" action="auth.php" accept-charset="UTF-8" id="login-nav">
          <div class="form-group">
             <label class="sr-only" for="email">Email address</label>
             <input type="email" name="email" class="form-control" id="email" placeholder="Email address" required="">
          </div>
          <div class="form-group">
              <label class="sr-only" for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
          </div>
         <div class="form-group">
           <button type="submit" name="btnsave" class="btn btn-success btn-block">Register</button>
         </div>
      </form>
      </div>
    </div>
 </div>
 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
