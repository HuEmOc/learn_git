@extends("frontend.layout")
@section('content')
<?php
	$arr = DB::table("tbl_news")->where("pk_news_id","=",$pk_news_id)->first();
	$category = DB::table("tbl_category_news")->where("pk_category_news_id","=",$arr->fk_category_news_id)->first();
?>
<div id="block_tin">
		<!-- Bar Tin tuc -->
		<div style="background-image:url({{ asset('images/bar.jpg')  }}); background-repeat:no-repeat; width:250px; height:25px;"><div style="padding-top:5px; padding-left:10px; font-weight:bold;">{{ $category->c_name }}</div></div>
		<!-- End Bar Tin tuc -->
		<!-- Tin tuc -->
	<div style="font-weight:bold; padding-top:10px; padding-bottom:10px;">{{ $arr->c_name }}</div>			
	<div style="text-align:justify;"><img src="{{ asset('upload/news/'.$arr->c_img) }}" align="left" />{!! $arr->c_content !!}</div>
		<!-- End Tin tuc -->
		
		<!--Cac tin khac--><br /><br />
		<div style=" clear:both;"></div>
		<div style="font-weight:bold;">Tin tức khác</div>
		<ul>
		<?php
			$other_news = DB::select("select * from tbl_news where pk_news_id<$pk_news_id order by pk_news_id desc limit 5");
			foreach($other_news as $rows_other_news)
			{
		?>
			<li style="padding-top:5px;"><a href="{{ url('detail') }}/{{ $rows_other_news->pk_news_id }}">{{ $rows_other_news->c_name }}</a></li>
		<?php } ?>
		</ul>
		<!--End-->
		
	  </div>
@endsection