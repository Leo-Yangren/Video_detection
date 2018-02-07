<?php
	session_start();

	require_once 'classes/membership.php';
	//create membership instance to manage the login users.
	$membership = new Membership();
	
	//if the user clicks the logout link on the index page.
	if ( isset($_GET['status']) && $_GET['status'] == 'loggedout'){
		$membership->log_User_Out();
	}

	//did user enter a password/username and click submit?
	if ($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])) {
		$response = $membership->validata_user($_POST['username'], $_POST['pwd']);
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <img src="HKU_logo.png" alt="logo" style="width:407px;height:83px;">
                        <hr>
                        <h1 class="title">Simulated Testing Platform</h1>
                    </div>
                </div> 
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="#">
						
						<!-- username input area -->
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Username</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                </div>
                            </div>
                        </div>
						
						<!-- password input area -->
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="pwd" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>
						
						<!-- submit button -->
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit">Login</button>
                        </div>
                        <div class="login-register">
                            <a href="">Forget your password?</a>
                         </div>
                    </form>
                    <!-- post an alert to let user enter a password/username again-->
                    <?php if (isset($response)) echo "<h4 class = 'alert'>" . $response . "</h4>"; ?>
                </div>
            </div>
        </div>
        <div class="footer-container unified-footer footer-to-table-row" data-reactid=".0.0.2">
            <div class="footer-content" data-reactid=".0.0.2.0">
                <div class="footer-text-center" data-reactid=".0.0.2.0.0">
                    <span class="auth-footer-seperator" data-reactid=".0.0.2.0.0.0"></span>
                    <span data-reactid=".0.0.2.0.0.1">XIE YAN, Copyright. @ 2017</span>
                    <a class="a-link-normal" target="_blank" href="http://www.cs.hku.hk/" data-reactid=".0.0.2.0.0.2">HKU Computer Science</a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>
