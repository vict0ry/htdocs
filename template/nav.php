
<?PHP
require_once $_SERVER["DOCUMENT_ROOT"].'/includes/security.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/template/header.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/User.Class.php';
$userData = new User($DB_con);

if (isset($_COOKIE['login'])){
  $email = $_COOKIE['login'];
}

//if ($user->isLoggedIn()){
//  $stmt_user = $DB_con->prepare("SELECT * FROM user JOIN offers ON user.user_id=offers.user_id Where email = '$email'");
//  $stmt_user->execute();
//  $userData = $stmt_user->fetch(PDO::FETCH_ASSOC);
//  // echo "<pre>";
//  // var_dump($userData);
//}
?>
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                    class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">StudySkype.cz</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Find Teacher</a></li>
                <li><a href="/students/requests">Find student</a></li>
                <?PHP if (!$user->isTeacher()): ?>
                <li><a href="/teacher/register">Register as a teacher</a></li>
                <?PHP endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <?PHP if (!$user->isLoggedIn()): ?>
              <li class=""><a href="#" data-toggle="modal" data-target="#myModal">Request</a></li>
              <?PHP endif; ?>
                <?PHP if ($user->isLoggedIn()): ?>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-envelope"></span>Inbox <span class="label label-info">32</span>
                </a>
                <?PHP endif; ?>
                <?PHP if (!$user->isLoggedIn()): ?>
                  <li><a href="/reg/">Register</a></li>
                <?PHP endif; ?>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
                        <li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
                        <li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                            design</a></li>
                        <li class="divider"></li>
                        <li><a href="/messages/" class="text-center">View All</a></li>
                    </ul>
                </li>
                <?PHP if ($user->isLoggedIn()): ?>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="glyphicon glyphicon-user"></span><?PHP echo $userData->_get($email, "Email") ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/teacher/edit"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="/auth/logout"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                </li>
              <?PHP endif; ?>
              <?PHP if (!$user->isLoggedIn()): ?>
                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                   <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                      <li>
                         <div class="row">
                            <div class="col-md-12">
                               <form class="form" role="form" method="post" action="/auth/login" accept-charset="UTF-8" id="login-nav">
                                  <div class="form-group">
                                     <label class="sr-only" for="email">Email address</label>
                                     <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required="">
                                  </div>
                                  <div class="form-group">
                                     <label class="sr-only" for="password">Password</label>
                                     <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">
                                  </div>
                                  <div class="checkbox">
                                     <label>
                                     <input type="checkbox"> Remember me
                                     </label>
                                  </div>
                                  <div class="form-group">
                                     <button type="submit" class="btn btn-success btn-block">Sign in</button>
                                  </div>
                               </form>
                            </div>
                         </div>
                      </li>
                      <li class="divider"></li>
                      <li>
                         <input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
                         <input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
                      </li>
                   </ul>
                </li>
                <?PHP endif; ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
<?PHP require_once $_SERVER["DOCUMENT_ROOT"].'/template/popupRequest.php'; ?>
