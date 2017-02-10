@extends('backend.layout')
@section('content')
<div class="col-md-6 col-xs-offset-3">
	<div class="panel panel-primary">
		<div class="panel-heading">Category news</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên danh mục</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
			<?php
				foreach($arr as $rows)
				{
			?>
				<tr>
					<td>{{ $rows->c_name }}</td>
					<td style="text-align:center">
						<a href="#">Edit</a>&nbsp;|&nbsp;
						<a href="{{ url('admin/category_news/delete') }}/{{ $rows->pk_category_news_id }}" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php } ?>
			</table>
			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			{{ $arr->render() }}
		</div>
	</div>
</div>
@endsection