
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Index</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<script src="js/med_alarm.js"></script>
<script type="text/javascript" src="js/exer_alarm.js"></script>
</head>
<body>
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-3 col-md-3 col-xs-12 hidden-xs">
        <div class="logo"> <a href="#"><img src="images/logo.png" class="img-responsive" alt=""/></a> </div>
      </div>
      <div class="col-lg-8 col-sm-9 col-md-9 col-xs-12 no-padding">
        <nav class="navbar navbar-default bg" role="navigation"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          
     <!--------- menu list ------->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="inner-page.php">Medicine Assistant</a></li>
              <li class="active"><a href="#">Exercise Assistant</a></li>
              <li class="active"><a href="#">Food Assistant</a></li>
              <li class="active"><a href="#">healthcare Assistant</a></li>
			  <li class="active"><a href="signout.php">sign out</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </nav>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 hidden-lg hidden-sm hidden-md">
        <div class="logo"> <a href="#"><img src="images/logo.png" class="img-responsive"  alt=""/></a> </div>
      </div>
    </div>
  </div>
</div>
<div class="content-area">
  <div class="container">
  <div class="content-text col-lg-12 col-sm-12 col-xs-12">
        <h1>Healthcare Forum</h1>
      </div>
    <div class="row">
	<!-------------the categary wrapper is transparent which top margin make box half below--------------->
      <div class="category-wrapper">
        
        <div class="col-lg-4 col-sm-3 col-md-3 col-xs-6 " id ="box1">
          <div class="post">
            <div class="post-img"> <i class="fa  fa-book"></i> </div>
            <div class="post-content"><p>Articles</p> </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3 col-md-3 col-xs-6" id="box2">
          <div class="post">
            <div class="post-img"><i class="fa fa-list"></i></div>
            <div class="post-content">
              <p>create category</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3 col-md-3 col-xs-6" id = "box3">
          <div class="post">
            <div class="post-img"> <i class="fa fa-edit"></i> </div>
            <div class="post-content">
              <p>  create post </p>
            </div>
          </div>
        </div>
       
      </div>
     
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <p></p>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script >


$(document).ready(function () {
	 
	$('#box1').click(function(){
		window.open('index.php','_newtab');
		return false;

		});
 
});
$(document).ready(function () {
	 
	$('#box2').click(function(){
		window.open('create_cat.php','_newtab');
		return false;

		});
 
});
$(document).ready(function () {
	 
	$('#box3').click(function(){
		window.open('create_topic.php','_newtab');

		
		return false;

		});
 
});





$(document).ready(function () {
	 
	$('#box4').click(function(){
		window.open('healthcare_main.html','_newtab');
		return false;

		});
 
});

</script> 
</body>
</html>
