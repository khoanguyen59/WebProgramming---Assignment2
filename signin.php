<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php 
	require "sesssion.php";
?>
<body>
<div class="fluid-container" style="margin-top: 15px;">
		<div class="fluid-container contact">
			<div class="row row-no-gutters">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<span class="glyphicon glyphicon-envelope"></span> soitbackstage@gmail.com
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<span class="glyphicon glyphicon-phone-alt"></span> 0359681552
				</div>
			</div>
		</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img style="width:100%" src="./pic/cover1.png" alt="">     
			  </div>
		
			  <div class="item">
				<img style="width:100%" src="./pic/cover2.jpg" alt="">
			  </div>
			
			  <div class="item">
				<img style="width:100%" src="./pic/cover3.png" alt="">      
			  </div>
			</div>
		
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>

		<nav class="navbar navbar-default navbar-fixed-top">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Icon Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="overview.php">Giới thiệu</a></li>
					<li><a href="service.php">Dịch vụ</a></li>
					<li><a href="price.php">Bảng giá</a></li>
					<li><a href="contact.php">Liên hệ</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search" method="GET" action="search.php">
					<div class="form-group">
						<input type="text" name="query" class="form-control" placeholder="Nhập từ khóa">
					</div>
					<button type="submit" class="btn btn-default btnsearch">Tìm kiếm</button>
				</form>
				
				<form class="navbar-form navbar-right dropdown"style="margin-right : -15px;" role="search" method="GET" >
					<button type="submit"  data-toggle="dropdown"  class="dropdown-toggle btn btn-default btnsearch">				
						<?php echo $type, ' ', $name ?>
					</button>
					<ul class="dropdown-menu">
  						<li><a href="<?php echo $link1 ?>"><?php echo $function1 ?></a></li>
    					<li><a href="<?php echo $link2 ?>"><?php echo $function2 ?></a></li>
  					</ul>
				</form>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
    <br>
    <div class="container">
        <form class="form-horizontal" action='signin_action.php' method="POST">
        <fieldset>
        <div id="legend">
            <legend class="">Sign In</legend>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
            <input type="text" id="username" name="username" placeholder=""  class="input-xlarge">
            </div>
        </div>
        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
            </div>
        </div>
        <br>
       
        <div class="control-group">
            <!-- Button -->
            <div class="controls">
            <button class="btn btn-success">Sign In</button>
            </div>
        </div>
        </fieldset>
        </form>
	</div><br>
	
	<div class="fluid-container footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h3>LIÊN HỆ</h3>
					<P>Liên hệ với chúng tôi để tìm đúng đam mê của bạn</P>
					<span class="text-center">
						<button type="button" class="btn btn-default btnfoot" style="margin-right:20px; width:120px;" >Gửi Email</button>
						<button type="button" class="btn btn-default btnfoot" style="width: 120px">Hotline</button>
					</span>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h3>ĐĂNG KÝ NHẬN EMAIL CẬP NHẬT</h3>
					<P>Để lại email để nhận được thông tin mới nhất từ chúng tôi</P>
					<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nhập email">
						</div>
						<button type="submit" class="btn btn-default btnfoot">Tìm kiếm</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>