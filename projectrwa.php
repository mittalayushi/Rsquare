<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Residence Welfare Association</title>
  <link href='css/bootstrap.css' rel='stylesheet'>
  <link href='css/hackathon.css' rel='stylesheet'>
</head>
<body><nav class="navbar navbar-inverse" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>
    <a class="navbar-brand" href="#">United Us, Multiplied Development</a>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#">What We Do</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Discussions</a></li>
        <li><a href="#">Locations</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Reviews</a></li>
            <li class="divider"></li>
            <li><a href="#">Scope for Improvement</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<!--page-->
<!-- project-->
<div class='row well col-sm-6 col-sm-offset-3 col-sm-offset-3'>
<div class="PROJECT">
<div class="container">
    <div class="row">
      <!--Login1-->
      <div class="col-md-4 col-md-offset-1">
    <form class="form-horizontal">

<!-- Form Name -->

<form method = "post" action = "<php $_PHP_SELF ?>" class="form-horizontal" role="form">
  <legend>New Project</legend>
  <fieldset>
  <div class="form-group">
    <label class="control-label col-sm-2" >Project Name: </label>
    <div class="col-sm-9 col-sm-offset-1">
      <input class="form-control" name = "proj_name" type = "text" id = "proj_name" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Estimated Fund:</label>
    <div class="col-sm-9 col-sm-offset-1"> 
      <input class="form-control" name = "proj_cost" type = "text" id = "proj_cost" placeholder="Enter fund">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" >Estimated time:</label>
    <div class="col-sm-9 col-sm-offset-1"> 
      <input class="form-control" name = "proj_time" type = "text" id = "proj_time" placeholder="Enter time">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2">Description:</label>
    <div class="col-sm-9 col-sm-offset-1"> 
      <input class="form-control" name = "proj_desc" type = "text" id = "proj_desc" placeholder="Descrie it a little bit">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form></fieldset>
</form>
</div>
</div>
</div>
</div>
</div>

<!--/.page-->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
  <script src='js/bootstrap.js'></script>
  <script src='js/hackathon.js'></script>
</body>
</html>

