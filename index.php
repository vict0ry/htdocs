<?PHP
require './AltoRouter.php';
$router = new AltoRouter();

// map homepage
$router->map( 'GET', '/', function() {
	require __DIR__ . '/template/offerPage.php';
});
// map homepage
$router->map( 'GET', '/students/requests', function() {
	require __DIR__ . '/template/requestPage.php';
});

// map users details page
$router->map( 'GET', '/auth/logout', function() {
	require __DIR__ . '/auth.php';
	$auth->logout();
});
// map users details page
$router->map( 'POST', '/student/request', function() {
	require __DIR__ . '/formRequests/request.php';
});
// map users details page
$router->map( 'POST', '/teacher/offer', function() {
	require __DIR__ . '/saveProfile.php';
});
// map users details page
$router->map( 'GET', '/reg/', function() {
	require __DIR__ . '/template/reg.php';
});
// map users details page
$router->map( 'GET', '/profile/[:id]', function($id) {
	require __DIR__ . '/template/profile.php';
});
$router->map( 'GET', '/messages/', function() {
	require __DIR__ . '/messages.php';
});
$router->map( 'GET', '/teacher/edit', function() {
	require __DIR__ . '/template/edit/reg-teacher.php';
});
// map users details page
$router->map( 'GET|POST', '/auth/login', function() {
	require __DIR__ . '/auth.php';
});
// map users details page
$router->map( 'GET|POST', '/user/register', function() {
        require_once '/includes/config.php';
        require_once '/auth.php';
	require_once '/classes/User.Class.php';
        $newUser = new User($DB_con);
        if($newUser->save(getPost('email'),getPost('password'))){
            $auth->login(getPost('email'),getPost('password'));
        }
});
// map users details page
$router->map( 'GET', '/teacher/register', function() {
  require __DIR__ . '/template/reg-teacher.php';
});




$match = $router->match();

// call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
