<!DOCTYPE html>
<html lang="vi">
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
		<nav class="navbar navbar-default navbar-fixed-top ">
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
					<li  class="active"><a href="overview.php">Giới thiệu</a></li>
					<li><a href="service.php">Dịch vụ</a></li>
					<li><a href="price.php">Bảng giá</a></li>
					<li><a href="contact.php">Liên hệ</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search" method="GET" action=search.php>
					<div class="form-group">
						<input type="text" name="query" class="form-control" placeholder="Nhập từ khóa">
					</div>
					<button type="submit" class="btn btn-default btnsearch">Tìm kiếm</button>
				</form>
				<form class="navbar-form navbar-right dropdown"style="margin-right : -15px;" role="search" method="GET" action="<?php echo $link; ?>">
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
        <H3 style="padding-left: 10px; border-left: #fec902 7px solid;">TỔNG QUAN</H3>
        <p style= "text-align: justify;">
            Sound of IT (SoIT) là một CLB được thành lập bởi Đoàn Khoa Khoa học và Kỹ thuật Máy tính vào năm 2018 với định hướng
            hoạt động trong mảng nghệ thuật nhằm cung cấp, phục vụ các tiết mục liên quan đến âm nhạc trong các sự kiện của Khoa.
            CLB ban đầu có 10 thành viên trực thuộc, sau hơn 2 năm, hiện CLB đang có số lượng thành viên trực thuộc là 20 với
            nhiều vai trò khác nhau.
        </p>
        <H3 style="padding-left: 10px; border-left: #fec902 7px solid;">QUÁ TRÌNH PHÁT TRIỂN</H3>
        <p  style= "text-align: justify;">
            Vào thời gian đầu, với 10 thành viên, CLB chủ yếu cung cấp các tiết mục thiên về hướng Acoustic. Sau một thời gian, 
            SoIT dần dần đổi mới về định hướng âm nhạc khi trở thành CLB duy nhất trong nội bộ trường Đại học Bách Khoa có khả năng
            tổ chức một Live Concert miễn phí tại Kí túc xá khu A, ĐHQG-TP.HCM. Đây cũng chính là khoảng thời gian CLB có sự liên kết
            với BQL KTX ĐHQG-TP.HCM.
        </p>
        <p>
            Vào cuối năm 2019, SoIT chính thức trở thành một thành viên chính thức của KTX bên cạnh vai trò là CLB Âm nhạc của Đoàn Khoa KH&KT Máy tính
        </p>
        <p>
            Đầu năm 2020, với được sự hỗ trợ từ Ban chủ nhiệm, SoIT có khả năng thu âm, từ đó CLB mở thêm một lĩnh vực hoạt động mới, với nhiều MV được ra mắt vào thời điểm nàynày
        </p>
        <p>
            Tháng 5/2020, CLB mở rộng quy mô CLB khi "mạo hiểm" lấn sân sang lịch vực Event - Backstage. Với nguồn vốn khá ổn định, CLB có khả năng
            tổ chức sự kiện quy mô dưới 1000 khán giả.
        </p>
        <p>
            Tháng 6/2020, CLB trở thành đơn vị đồng hành về mảng âm thanh - ánh sáng, cũng như cung cấp ban nhạc cho nhiều công ty, nhà hàng, bar,...
        </p>
        <H3 style="padding-left: 10px; border-left: #fec902 7px solid; ">MỤC TIÊU</H3>
        <p  style= "text-align: justify;">
            Với phạm vi hoạt động đa dạng, SoIT rất mong muốn trở thành một gương mặt quen thuộc của các Agency trên khắp TP. HCM, cũng như
            với thầy cô và các bạn sinh viên trong trường. Các bạn chỉ cần lên ý tưởng Event, mọi thứ còn lại hãy để SoIT chúng mình lo.
        </p>
        <h3 style="padding-left: 10px; border-left: #fec902 7px solid;">LĨNH VỰC HOẠT ĐỘNG CHÍNH</h3>
        
        <div style= "text-align: justify;">
            <div>
                SoIT chuyên cung cấp các dịch vụ sau: 
                <ul>
                    <li>Hệ thống âm thanh - ánh sáng chuyên nghiệp</li>
                    <li>Các ban nhạc theo mô hình Acoustic, Jazz, Modern, Rock,...</li>
                    <li>Tổ chức các sự kiện quy mô dưới 1000 khách</li>
                </ul>
            </div>
        </div>

    </div>    

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