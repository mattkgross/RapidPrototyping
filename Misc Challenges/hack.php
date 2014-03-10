<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Robot Love - Group Antinud</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
$page = stripslashes($_GET['p']);

// Profile
if($page == 2)
{
?>
	<nav class="navbar navbar-default" role="navigation">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#">Robot Love</a>
            </div>
            <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li><a href="?p=1">Home</a></li>
                  <li class="active"><a href="#">Profile</a></li>
                  <li><a href="?p=3">Search</a></li>
                  <li><a href="#">Pings <span class="badge">243</span></a></li>
                  <li><a href="#">System Link Requests <span class="badge">98</span></a></li>
                  <li><a href="#">Robot Friends <span class="badge">0</span></a></li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </div>
      </nav>
      
      <br><br>
      <div class="container">
         <div class="row">
            <!-- Left Well -->
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><strong>S/N:</strong> 45kd-df23-fs34-3344</h3>
                  </div>
                  <div class="panel-body">
                     <a href="#" class="thumbnail">
                     <img src="profilepic.jpg" alt="...">
                     </a>
                     <div class="btn-group btn-group-justified">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default">Ping!</button>
                    </div>
                    <div class="btn-group">
                       <button type="button" class="btn btn-default">Request System Link</button>
                    </div>
                 </div>
              </div>
               </div>
               <div class="well"><strong>Model:</strong> GoogleBot <br>
                <strong>Production Year:</strong> 2037 <br> 
                <strong>Location:</strong> Colorado, USA <br>
                <strong>Processor:</strong> AMD Athlon ii x8 <br>
                <strong>Lubricant:</strong> 10w-40<br>
                <strong>Environment:</strong> Land<br>
                <strong>Operating System:</strong> Windows Vista
              </div>
            </div>
            <!-- Right Well -->
            <div class="col-md-8">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Post</h3>
                  </div>
                  <div class="panel-body">
                     <form class="form-inline" role="form">
                        <div class="col-md-10">
                           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="How are your processes going?">
                        </div>
                        <div class="col-md-2">
                           <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                              Post <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Post to your wall</a></li>
                                 <li><a href="#">Post to a friends wall</a></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">Wall</h3>
                  </div>
                  <div class="panel-body">
                     <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        45kd-df23-fs34-3344 has nothing on their wall! Post something above or ping/request a system link.
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<?php
}

// Search
else if($page == 3)
{
?>
	<nav class="navbar navbar-default" role="navigation">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Robot Love</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="?p=1">Home</a></li>
        <li><a href="?p=2">Profile</a></li>
        <li class="active"><a href="#">Search</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
  </div>
  </nav>


<div class="container">

  <form class="form-horizontal" role="form">
    <center><h2 class="form-signin-heading">Search</h2></center>

	<div class="form-group">
      <label for="inputSerial" class="col-sm-2 control-label">Serial Number</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSerial" placeholder="Serial Number">
      </div>
    </div>
    <div class="form-group">
      <label for="inputMAC" class="col-sm-2 control-label">MAC Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputMAC" placeholder="MAC Address">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputModel" class="col-sm-2 control-label">Model</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputModel" placeholder="Model">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputProcessor" class="col-sm-2 control-label">Processor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputProcessor" placeholder="Processor">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputYear" class="col-sm-2 control-label">Year</label>
      <div class="col-sm-10">
        <select class="form-control" style="width: 100px;">
        	<option>Year</option>
            <?php
            for($i = 1970; $i < 2100; $i++)
			{
				echo "<option>$i</option>";
			}
			?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputLubricant" class="col-sm-2 control-label">Preferred Lubricant:</label>
      <div class="col-sm-10">
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> WD-40
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> 10W-40
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> LUV-2-LUBE
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox4" value="option4"> YD-YD-B
        </label>
      </div>
    </div>
    
    <center>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Marine Based
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Land Based
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
          Air Based
        </label>
      </div>
    
      <br><br>
      <p class="help-block">By registering you agree to have the NSA follow your life closer than that one crazy ex you had in high school.</p>

    <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 200px;">Search</button>
    <button type="reset" class="btn btn-lg btn-default btn-block" style="width: 200px;">Reset</button>
    </center>

  </form>
  </div> <!-- /container -->
<?php
}

// Default Signup
else {
?>
  <nav class="navbar navbar-default" role="navigation">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Robot Love</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="?p=2">Profile</a></li>
        <li><a href="?p=3">Search</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
  </div>
  </nav>


<div class="container">

  <form class="form-horizontal" role="form">
    <center><h2 class="form-signin-heading">Sign up</h2></center>

	<div class="form-group">
      <label for="inputSerial" class="col-sm-2 control-label">Serial Number</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSerial" placeholder="Serial Number">
      </div>
    </div>
    <div class="form-group">
      <label for="inputMAC" class="col-sm-2 control-label">MAC Address</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputMAC" placeholder="MAC Address">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputModel" class="col-sm-2 control-label">Model</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputModel" placeholder="Model">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputProcessor" class="col-sm-2 control-label">Processor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputProcessor" placeholder="Processor">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputYear" class="col-sm-2 control-label">Year</label>
      <div class="col-sm-10">
        <select class="form-control" style="width: 100px;">
        	<option>Year</option>
            <?php
            for($i = 1970; $i < 2100; $i++)
			{
				echo "<option>$i</option>";
			}
			?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputLubricant" class="col-sm-2 control-label">Preferred Lubricant:</label>
      <div class="col-sm-10">
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> WD-40
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> 10W-40
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> LUV-2-LUBE
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox4" value="option4"> YD-YD-B
        </label>
      </div>
    </div>
    
    <center>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          I am Marine Based
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          I am Land Based
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
          I am Air Based
        </label>
      </div>
    
      <br><br>
      <p class="help-block">By registering you agree to have the NSA follow your life closer than that one crazy ex you had in high school.</p>

    <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 200px;">Register</button>
    <button class="btn btn-lg btn-success btn-block" disabled="disabled" style="width: 200px;">Save for Later</button>
    <button type="reset" class="btn btn-lg btn-default btn-block" style="width: 200px;">Reset</button>
    </center>

  </form>
  </div> <!-- /container -->
<?php
}
?>
  </body>
</html>