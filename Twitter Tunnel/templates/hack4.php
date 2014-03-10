<?php
$page = stripslashes($_GET['page']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Silky Road</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script src="../SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script> 
   $(document).ready(function(){
      $("#nud").click(function()
      {
        $("#passAlert").slideUp();
        $("#emailAlert").slideUp();

        if ( $("#inputPassword").val() != $("#inputPasswordConfirm").val())
        {
          $("#passAlert").slideDown();
        }
        
        else if ( $("#inputEmail").val() != $("#inputEmailConfirm").val())
        {
          $("#emailAlert").slideDown();
        }
		
		else
		{
			window.location = '?page=browse';
		}
      });  
    });
</script>
    
  </head>
  <body>
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
      <a class="navbar-brand" href="#">The Silky Road</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if($page == "signup" || empty($page)) echo "class=\"active\""; ?>><a href="?page=signup">Sign Up</a></li>
        <li <?php if($page == "post") echo "class=\"active\""; ?>><a href="?page=post">New Task</a></li>
        <li <?php if($page == "browse" || $page == "view") echo "class=\"active\""; ?>><a href="?page=browse">Browse</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
  </div>
  </nav>
  
<div class="container">
<div class="alert alert-danger" id = "passAlert" style= "display:none">Error: Passwords do not match</div>
  <div class="alert alert-danger" id = "emailAlert" style= "display:none"> Error: Emails do not match </div>
<?php
if($page == "browse")
{
?>
<div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Sorting
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                <form class="form-inline" role="form">

                  <div class="form-group">
                    <label>Location: </label>
                    <select id="location" class="form-control">
                      <option value="one">Boulder</option>
                      <option value="two">Denver</option>
                      <option value="three">Vail</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>&nbsp; Reward(฿): </label>
                    <select id="location" class="form-control">
                      <option value="one"> ฿0 - ฿0.005</option>
                      <option value="two">฿0.01 - ฿0.05</option>
                      <option value="three">฿0.05+</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label>&nbsp; Sort by: </label>
                    <select id="location" class="form-control">
                      <option value="one">Newest</option>
                      <option value="two">Oldest</option>
                      <option value="three">Highest Reward</option>
                    </select>


                    <button type="submit" class="btn btn-default">Sort</button>
                </form>
              </div>
            </div>
  </div>
  </div>
          <br>

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Browse Tasks</h3>
            </div>
            <div class="panel-body">

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-10">
                    <b>Help my find my kitten, Molly</b><br>My kitten Molly ran away. She's a light white tan color.
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary form-control" onClick="window.location.href='?page=view'"> Reward(฿): 0.02
                    </button>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-10">
                    <b>Pick up my laundry for me</b><br>I'm too tired to pick it up myself. Yes, seriously.
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary form-control"> Reward(฿): 0.015
                    </button>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-10">
                    <b>Pick up some taco bell for me</b><br>I'm not in a condition to drive right now. But, there's nothing in the world that sounds better than some taco bell right now.
                  </div>
                  <div class="col-md-2">
                    <button type="button" class="btn btn-primary form-control"> Reward(฿): 0.005
                    </button>
                  </div>
                </div>
              </div>




            </div>
          </div>
<?php
}

else if($page == "post")
{
?>
<form class="form-horizontal" role="form" method="post" action="?page=view">
    <center><h2 class="form-signin-heading">Create task</h2></center>

	<div class="form-group">
      <center><label for="inputSerial" class="col-sm-2 control-label">Title</label></center>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Title" placeholder="Title of your task">
      </div>
    </div>
    <div class="form-group">
      <label for="inputMAC" class="col-sm-2 control-label">Money</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Money" placeholder="Type in amount of money that you are going to pay for task">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Time</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="Time" placeholder="When or until which date or time task must be completed">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputModel" class="col-sm-2 control-label">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Description " placeholder="Write detailed description of your task and specify the requirements">
      </div>
    </div>
   
     
	<center>
    <button class="btn btn-lg btn-primary btn-block" type="submit" style="width: 200px;">Submit</button>
    </center>

  </form>
<?php
}

else if($page == "view")
{
?>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <h1>Help me find my friend, Molly</h1>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
        <div class ="row">
          <div class = "col-md-6">
            <img src = "cat.jpg">
          </div>
          <div class = "col-md-6">
            I recently lost my cat, named Molly. She is white/tan, small, and somewhere on the University Hill. I need to find her ASAP, before midnight tonight. It was last seen yesterday at 4:20 PM in its <span style="text-decoration:line-through">small plastic bag</span> kennel. I need someone to drive me around campus, I'm worried it is unsafe. </div>
        </div>
        <br>
        <div class="well well-sm" style="text-align: center;" >
          Payment: ฿.001/hr Time: 1-6 hrs
        </div>
            <button type="button" class="btn btn-lg btn-success btn-block" onclick="alert('Booked!')">Accept This Task</button>
    </div>
  </div>
<?php
}

// signup
else
{
?>
<form class="form-horizontal" role="form">
    <center><h2 class="form-signin-heading">Sign Up for <span style="font-style:italic">The Silky Road</span></h2></center><br />

	<div class="form-group">
      <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="inputFirstName" placeholder="First Name">
      </div>
    </div>
    <div class="form-group">
      <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="inputLastName" placeholder="Last Name">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputPasswordConfirm" class="col-sm-2 control-label">Confirm Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPasswordConfirm" placeholder="Confirm Password">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmail" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputEmailConfirm" class="col-sm-2 control-label">Confirm Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmailConfirm" placeholder="Confirm Email">
      </div>
    </div>
    
    <div class="form-group">
      <label for="inputYear" class="col-sm-2 control-label">D.O.B.</label>
      <div class="col-sm-10">
        <select class="form-inline" style="width: 100px;">
        	<option>Month</option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
        </select>
        <select class="form-inline" style="width: 100px;">
        	<option>Day</option>
            <?php
            for($i = 1; $i <= 31; $i++)
			{
				echo "<option>$i</option>";
			}
			?>
        </select>
        <select class="form-inline" style="width: 100px;">
        	<option>Year</option>
            <?php
            for($i = 2014; $i > 1900; $i--)
			{
				echo "<option>$i</option>";
			}
			?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="inputEmailPrefs" class="col-sm-2 control-label">Email Preferences:</label>
      <div class="col-sm-10">
        <!--<label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> Daily Updates
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> Weekly Updates
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> Monthly Updates
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox4" value="option4"> No Updates
        </label>-->
        
        <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Daily Updates
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          Weekly Updates
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
          Monthly Updates
        </label>
      </div>
      <div class="radio-inline">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
          No Updates
        </label>
      </div>
      </div>
    </div>
    
    <center>
    <p class="help-block">By registering you comply to our <a href="#" onClick="alert('Everything on our website is encrypted - including our legal policy. Can I get a Go Buffs?')">Obscure Legal Policy</a>.</p>

    <button type="button" class="btn btn-lg btn-primary btn-block" style="width: 200px;" id="nud">Sign Up</button>
    <button type="reset" class="btn btn-lg btn-default btn-block" style="width: 200px;">Reset</button>
    </center>

  </form>
<?php
}
?>
  </div> <!-- /container -->
  </body>
</html>