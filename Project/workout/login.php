<?php
session_start();

require_once("headers/mysql.php");

$ID = $_SESSION['ID'];
$sql = mysql_query("SELECT * FROM users WHERE id='" . $ID . "'");
$user = mysql_fetch_array($sql);

// Kick out anyone who's already logged in.
if(!empty($ID) || !empty($user)) {
	header('Location: index.php'); }

$submission = stripslashes($_POST['submission']);

if($submission == "yes")
{
	$uname = addslashes($_POST['uname']);
	$pword = md5($_POST['pword']);
	
	// Prevent injection
	if(!get_magic_quotes_gpc())
	{
		$uname = mysql_real_escape_string($uname);
	}
	
	$sql = mysql_query("SELECT * FROM users WHERE u_name='" . $uname . "' AND password='" . $pword . "'");
	$user = mysql_fetch_array($sql);
	
	if(!empty($user)) {
		$_SESSION['ID'] = $user['id'];
		header('Location: index.php');}
	else {
		$warning_message = "Incorrect username and/or password. Try again.";}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cockfight Workout Log</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <script type="text/javascript">
		$(document).ready(function(){			
			$("#uname").focusout(function(e) {
                if($("#uname").val().length > 0) {
					$("#g_uname").attr("class", "form-group has-success has-feedback");
					$("#s_uname_bad").attr("style", "display: none;");
					$("#s_uname_ok").attr("style", "display: inline-block;");}
				else {
					$("#g_uname").attr("class", "form-group has-error has-feedback");
					$("#s_uname_ok").attr("style", "display: none;");
					$("#s_uname_bad").attr("style", "display: inline-block;");}
            });
			
			$("#pword").focusout(function(e) {
                if($("#pword").val().length > 5) {
					$("#g_pword").attr("class", "form-group has-success has-feedback");
					$("#s_pword_bad").attr("style", "display: none;");
					$("#s_pword_ok").attr("style", "display: inline-block;");}
				else {
					$("#g_pword").attr("class", "form-group has-error has-feedback");
					$("#s_pword_ok").attr("style", "display: none;");
					$("#s_pword_bad").attr("style", "display: inline-block;");}
            });
		})
	</script>
  </head>
    <body>
  <nav class="navbar navbar-default" role="navigation">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Cockfight Workout Log</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Log</a></li>
            <li><a href="create.php">New Entry</a></li>
            <li><a href="workouts.php">Workouts</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="login.php">Sign In</a></li>
            <li><a href="signup.php">Sign Up</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
    </nav>
    <?php if(!empty($warning_message)) {?>
    <div class="alert alert-warning alert-dismissable" style=" margin-top: -20px; text-align: center">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong><?php echo $warning_message; ?></strong>
    </div>
    <?php }	?>
	<div class="container-fluid">
    	<h1 style="text-align: center">Log In</h1><br /><br />
        <form class="form-horizontal" role="form" method="post" action="login.php">
          <div class="form-group" id="g_uname">
            <label for="uname" class="col-md-offset-3 col-md-2 control-label">Username</label>
            <div class="col-md-2">
              <input type="text" class="form-control" id="uname" name="uname">
              <span class="glyphicon glyphicon-ok form-control-feedback" id="s_uname_ok" style="display: none;"></span>
              <span class="glyphicon glyphicon-remove form-control-feedback" id="s_uname_bad" style="display: none;"></span>
            </div>
          </div>
          <div class="form-group" id="g_pword">
            <label for="pword" class="col-md-offset-3 col-md-2 control-label">Password</label>
            <div class="col-md-2">
              <input type="password" class="form-control" id="pword" name="pword">
              <span class="glyphicon glyphicon-ok form-control-feedback" id="s_pword_ok" style="display: none;"></span>
              <span class="glyphicon glyphicon-remove form-control-feedback" id="s_pword_bad" style="display: none;"></span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-offset-5 col-md-2" style="text-align: center">
              <input type="hidden" id="submission" name="submission" value="yes">
              <button type="submit" class="btn btn-success">Log In</button>
            </div>
          </div>
        </form>
    </div>
  </body>
</html>