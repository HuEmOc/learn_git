@extends("backend.layout")
@section('content')
<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="{{ url('admin/news/add') }}" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">News</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width:50px;">STT</th>
					<th style="width:100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th style="width:200px;">Thuộc danh mục</th>
					<th style="width:100px;"></th>
				</tr>
			<?php
				$stt = 0;
				foreach($arr as $rows)
				{
					$stt++;
			?>
				<tr>
					<td style="text-align:center;"><?php echo $stt;?></td>
					<td style="text-align:center;">
						@if(isset($rows->c_img))
						<img src="{{ asset('upload/news/'.$rows->c_img) }}" style="width:50px;">
						@endif
					</td>
					<td><?php echo $rows->c_name;?></td>
					<td style="text-align:center;">
						<?php
							//lay mot ban ghi thuoc tbl_category_news
							$category = DB::table("tbl_category_news")->where("pk_category_news_id","=",$rows->fk_category_news_id)->first();
							if(isset($category->c_name))
								echo $category->c_name;
						?>
					</td>
					<td style="text-align:center;">
						<a href="{{ url('admin/news/edit') }}/{{ $rows->pk_news_id }}">Edit</a>&nbsp;
						<a href="{{ url('admin/news/delete') }}/{{ $rows->pk_news_id }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}			
			</style>
			{{ $arr->appends(array("bien1"=>1,"bien2"=>2))->links() }}
		</div>
	</div>
</div>
@endsection