@extends("frontend.layout")
@section('content')
<div id="block_tin">
		<!-- Bar Tin tuc -->
		<div style="background-image:url(images/bar.jpg); background-repeat:no-repeat; width:250px; height:25px;"><div style="padding-top:5px; padding-left:10px; font-weight:bold;">Tin sự kiện</div></div>
		<!-- End Bar Tin tuc -->
	<?php
		$event_news = DB::select("select * from tbl_news order by pk_news_id desc limit 0,3");
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