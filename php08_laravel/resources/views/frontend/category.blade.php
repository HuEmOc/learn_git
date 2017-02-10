@extends("frontend.layout")
@section('content')
<?php
	$category = DB::table("tbl_category_news")->where("pk_category_news_id","=",$pk_category_news_id)->first();
?>
<div id="block_tin">
		<!-- Bar Tin tuc -->
		<div style="background-image:url({{ asset('images/bar.jpg') }}); background-repeat:no-repeat; width:250px; height:25px;"><div style="padding-top:5px; padding-left:10px; font-weight:bold;">{{ $category->c_name }}</div></div>
		<!-- End Bar Tin tuc -->
	<?php
		$event_news = DB::select("select * from tbl_news where fk_category_news_id=$pk_category_news_id order by pk_news_id desc limit 0,3");
		foreach($event_news as $rows_event_news)
		{
	?>	
		<!-- Tin tuc -->
	<div style="font-weight:bold; padding-top:10px; padding-bottom:10px;"><a href="{{ url('detail') }}/{{ $rows_event_news->pk_news_id }}">{{ $rows_event_news->c_name }}</a></div>			
	<div style="text-align:justify;"><img src="{{ asset('upload/news/'.$rows_event_news->c_img) }}" align="left" style="width:70px;" />{!! $rows_event_news->c_description !!}</div>
		<!-- End Tin tuc -->
	<div style="clear:both;"></div>
	<?php } ?>
	  </div>
@endsection