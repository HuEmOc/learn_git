<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
<title>PHP - testpage</title>




</head>

<body>
<div id="wrapper">
<!-- header -->
<div id="header">
	<div style="text-align:right; padding-top:50px; padding-right:300px; font-size:20px;">Họ và tên: Nguyễn Văn A</div>
</div>
<div id="menu">
	<a href="index.html">Trang chủ</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="index.html">Sản phẩm</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="index.html">Liên hệ</a>
</div>
<div id="menu_line"></div>
<!-- end header -->
<!-- content -->
<div id="content">
<!-- left -->
	<div id="left" style="float:left;">
		<div id="menu_left">
		<?php
			$category = DB::select("select * from tbl_category_news");
			foreach($category as $rows_category)
			{
		?>
			<div id="text_menu_left"><a href="{{ url('category') }}/{{ $rows_category->pk_category_news_id }}">{{ $rows_category->c_name }}</a></div>
		<?php } ?>
		</div>		
		<div id="online">
			<div id="online_text">
			<b>Số lượng truy cập:</b> 123<br />
			<b>Đang online:</b> 123
			</div>
		</div>
		
		<div id="online">
			<div style="padding:5px 0px 0px 0px;">
			Hỗ trợ bán hàng
			</div>
			<div style="padding:5px 5px 5px 5px;">
			<img src="http://opi.yahoo.com/online?u=hagrimex2008&amp;m=g&amp;t=2" border="0">
			</div>
			<div style="padding:5px 5px 0px 5px;">
			Hỗ trợ kỹ thuật
			</div>
			<div style="padding:5px 5px 5px 5px;">
			<img src="http://opi.yahoo.com/online?u=hagrimex2008&amp;m=g&amp;t=2" border="0">
			</div>
		</div>
		
		<div id="logo">
			<div style="text-align:right; font-weight:bold; padding-right:60px; padding-top:6px;">Logo</div>
			<div style="border-color:#dddddd; border-style:solid; border-width:1px; margin-top:8px; padding-left:0px; padding-top:5px; padding-bottom:5px; padding-right:0px;">
			<div><a href="#"><img src="{{ asset('images/logo1.jpg') }}" border="0" width="190" /></a></div>
			<div><a href="#"><img src="{{ asset('images/logo2.jpg') }}" border="0" width="190" /></a></div>
			<div><a href="#"><img src="{{ asset('images/logo3.jpg') }}" border="0" width="190" /></a></div>
			</div>
		</div>
	</div>
<!-- end left -->
<!-- main -->
	<div id="main">
	
	
	@yield('content')
	
	
	
	</div>
<!-- end main -->
<!-- right -->
	<div id="menu_right">
		<div id="hot_news_bar"><div style="padding-top:5px; text-align:center; font-weight:bold">Tin nổi bật</div></div>
		<div id="hot_news">
		<marquee style="height:200px;"  direction="up" height="300" scrollamount="2" scrollamount=2 scrolldelay=2 onmouseover='this.stop()' onmouseout='this.start()'>
			<div style="padding-bottom:5px; padding-top:5px;">- trọng tài chính Nguyễn Văn Kiên rút ra trong trận đấu</div>
			<div style="padding-bottom:5px; padding-top:5px;">- trọng tài chính Nguyễn Văn Kiên rút ra trong trận đấu</div>
			<div style="padding-bottom:5px; padding-top:5px;">- trọng tài chính Nguyễn Văn Kiên rút ra trong trận đấu</div>
			<div style="padding-bottom:5px; padding-top:5px;">- trọng tài chính Nguyễn Văn Kiên rút ra trong trận đấu</div>
			<div style="padding-bottom:5px; padding-top:5px;">- trọng tài chính Nguyễn Văn Kiên rút ra trong trận đấu</div>
		</marquee>
		</div>
		
		<div id="hot_news_bar"><div style="padding-top:5px; text-align:center; font-weight:bold">Bầu chọn</div></div>
		<div id="hot_news">
			<div style="padding-bottom:5px; padding-top:5px;"><b>Bạn thấy website này như thế nào?</b></div>
			<div style="padding-bottom:5px; padding-top:5px;"><input type="checkbox" />&nbsp;Bố cục hợp lý</div>
			<div style="padding-bottom:5px; padding-top:5px;"><input type="checkbox" />&nbsp;Bố cục không hợp lý</div>
			<div style="padding-bottom:5px; padding-top:5px;"><input type="checkbox" />&nbsp;Cần chỉnh sửa thêm</div>
		</div>
		
		<div id="logo">
			<div style="text-align:right; font-weight:bold; padding-right:60px; padding-top:6px;">Logo</div>
			<div style="border-color:#dddddd; border-style:solid; border-width:1px; margin-top:8px; padding-left:0px; padding-top:5px; padding-bottom:5px; padding-right:0px;">
			<div><a href="#"><img src="images/logo1.jpg" border="0" width="190" /></a></div>
			<div><a href="#"><img src="images/logo2.jpg" border="0" width="190" /></a></div>
			<div><a href="#"><img src="images/logo3.jpg" border="0" width="190" /></a></div>
			</div>
		</div>
		
	</div>
 <!-- end right -->
</div>
<!-- footer -->
<div id="footer">
	Your site<br />
	Địa chỉ: Cầu giấy - Hà Nội. Email: my_email@mail.com
</div>
<!-- end footer -->
</div>



</body>
</html>
