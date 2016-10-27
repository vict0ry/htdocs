<?PHP
require_once './template/nav.php';
require_once './includes/config.php';
require_once './template/header.php';
if (isset($id)){
  $userId = $id;
}
$stmt_user = $DB_con->prepare('SELECT * FROM user JOIN offers ON user.user_id=offers.user_id WHERE user.id = :UserId');
$stmt_user->bindParam(':UserId',$userId);
$stmt_user->execute();
$user = $stmt_user->fetch(PDO::FETCH_ASSOC);
if (empty($user)){
  die('404 ERROR');
}


?>
<link rel="stylesheet" href="/css/profile-style.css" media="screen" title="no title">
<div class="container">
    <div class="user-profile">
        <div class="profile-header-background"><img src="http://demo.thedevelovers.com/dashboard/queenadmin-1.2/assets/img/city.jpg" alt="Profile Header Background"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-info-left">
                    <div class="text-center">
                        <img src="/img/avatar/<?PHP echo $user['Avatar']; ?>" alt="Avatar" class="avatar img-circle">
                        <h2><?PHP echo $user['Name']. ' '. $user['Surname'] ?></h2>
                    </div>
                    <div class="action-buttons">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="btn btn-success btn-block"><i class="fa fa-plus-round"></i> Follow</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" class="btn btn-primary btn-block"><i class="fa fa-android-mail"></i> Message</a>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <h3>About Me</h3>
                        <p>{{About ME}}</p>
                    </div>
                    <div class="section">
                        <h3>Statistics</h3>
                        <p><span class="badge">332</span> Following</p>
                        <p><span class="badge">124</span> Followers</p>
                        <p><span class="badge">620</span> Likes</p>
                    </div>
                    <div class="section">
                        <h3>Social</h3>
                        <ul class="list-unstyled list-social">
                            <li><a href="#"><i class="fa fa-twitter"></i> @jackbay</a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i> Jack Bay</a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i> jackdribs</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i> Jack Bay</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-info-right">
                    <ul class="nav nav-pills nav-pills-custom-minimal custom-minimal-bottom">
                        <li class="active"><a href="#activities" data-toggle="tab">ACTIVITIES</a></li>
                        <li><a href="#followers" data-toggle="tab">Reviews</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- activities -->
                        <div class="tab-pane fade in active" id="activities">
                          <h1><?PHP echo $user['Oname'] ?></h1>
                          <p><?PHP echo $user['ODescription']; ?></p>
                        </div>
                        <!-- end activities -->
                        <!-- followers -->
                        <div class="tab-pane fade" id="followers">
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Antonius<br><span class="text-muted username">@mrantonius</span></a>
                                    <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Michael<br><span class="text-muted username">@iamichael</span></a>
                                    <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                    <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Jane Doe<br><span class="text-muted username">@janed</span></a>
                                    <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar5.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">John Simmons<br><span class="text-muted username">@jsimm</span></a>
                                    <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Antonius<br><span class="text-muted username">@mrantonius</span></a>
                                    <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Michael<br><span class="text-muted username">@iamichael</span></a>
                                    <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar7.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                    <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Jane Doe<br><span class="text-muted username">@janed</span></a>
                                    <button type="button" class="btn btn-sm btn-toggle-following pull-right"><i class="fa fa-checkmark-round"></i> <span>Following</span></button>
                                </div>
                            </div>
                            <div class="media user-follower">
                                <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">John Simmons<br><span class="text-muted username">@jsimm</span></a>
                                    <button type="button" class="btn btn-sm btn-default pull-right"><i class="fa fa-plus"></i> Follow</button>
                                </div>
                            </div>
                        </div>
                        <!-- end followers -->
                        <!-- following -->
                        <div class="tab-pane fade" id="following">
                            <div class="media user-following">
                                <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                    <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                </div>
                            </div>
                            <div class="media user-following">
                                <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Jane Doe<br><span class="text-muted username">@janed</span></a>
                                    <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                </div>
                            </div>
                            <div class="media user-following">
                                <img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">John Simmons<br><span class="text-muted username">@jsimm</span></a>
                                    <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                </div>
                            </div>
                            <div class="media user-following">
                                <img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Antonius<br><span class="text-muted username">@mrantonius</span></a>
                                    <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                </div>
                            </div>
                            <div class="media user-following">
                                <img src="http://bootdey.com/img/Content/avatar/avatar5.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Michael<br><span class="text-muted username">@iamichael</span></a>
                                    <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                </div>
                            </div>
                            <div class="media user-following">
                                <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="User Avatar" class="media-object pull-left">
                                <div class="media-body">
                                    <a href="#">Stella<br><span class="text-muted username">@stella</span></a>
                                    <button type="button" class="btn btn-sm btn-danger pull-right"><i class="fa fa-close-round"></i> Unfollow</button>
                                </div>
                            </div>
                        </div>
                        <!-- end following -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
