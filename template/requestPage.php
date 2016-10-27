<?PHP
require_once $_SERVER["DOCUMENT_ROOT"].'/includes/config.php';
$stmt_users = $DB_con->prepare('SELECT * FROM user JOIN request ON user.user_id=request.user_id');
$stmt_users->execute();
$users = $stmt_users->fetchAll(PDO::FETCH_ASSOC);
require_once $_SERVER["DOCUMENT_ROOT"].'/template/header.php';
?>

<body>
<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/template/nav.php';
?>

<div class="container">
<div class="row ng-scope">
    <div class="col-md-3 col-md-push-9">
        <h4>Results <span class="fw-semi-bold">Filtering</span></h4>
        <p class="text-muted fs-mini">Listed content is categorized by the following groups:</p>
        <ul class="nav nav-pills nav-stacked search-result-categories mt">
            <li><a href="#">Friends <span class="badge">34</span></a>
            </li>
            <li><a href="#">Pages <span class="badge">9</span></a>
            </li>
            <li><a href="#">Images</a>
            </li>
            <li><a href="#">Groups</a>
            </li>
            <li><a href="#">Globals <span class="badge">18</span></a>
            </li>
        </ul>
    </div>
    <div class="col-md-9 col-md-pull-3">
        <p class="search-results-count">Nalezeno 25 vyucujicich</p>
        <?PHP foreach ($users as $user): ?>
        <section class="search-result-item">
            <div class="">
                <div class="row">
                    <div class="col-sm-9">
                        <h4 class="search-result-item-heading"><?PHP echo $user['Rsubject']; ?> English tutor needed</h4>
                        <h5><?PHP // echo $user['Oname'] ?></h5>
                        <p class="info"><?PHP echo $user['Rdate'] ?></p>
                        <p class="description"><?PHP echo $user['Rdescription'] ?></p>
                    </div>
                    <div class="col-sm-3 text-align-center">
                      <p></p>
                        <p class="value3 mt-sm"><?PHP echo $user['RpriceFrom']. ' - '. $user['RpriceTo'].' CZK'; ?></p>
                        <!--<p class="fs-mini text-muted"><?PHP echo $user['OTime']; ?> min</p><a class="btn btn-primary btn-info btn-sm" href="/profile.php?id=<?PHP echo $user['id']; ?>">Contact</a>-->
                    </div>
                </div>
            </div>
        </section>
      <?PHP endforeach ?>
        <div class="text-align-center">
            <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#">Prev</a>
                </li>
                <li class="active"><a href="#">1</a>
                </li>
                <li><a href="#">2</a>
                </li>
                <li><a href="#">3</a>
                </li>
                <li><a href="#">4</a>
                </li>
                <li><a href="#">5</a>
                </li>
                <li><a href="#">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

 */

