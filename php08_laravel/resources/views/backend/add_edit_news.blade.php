@extends('backend.layout')
@section('content')
<script language="javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
<div class="col-md-8 col-xs-offset-2">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<form method="post" action="" enctype= "multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Tiêu đề</div>
				<div class="col-md-9">
					<input type="text" name="c_name" class="form-control" value="{{ isset($news->c_name)?$news->c_name:"" }}">
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Thuộc danh mục</div>
				<div class="col-md-9">
					<select name="fk_category_news_id">
					<?php
						$fk_category_news_id = isset($news->fk_category_news_id) ? $news->fk_category_news_id:0;
						$cat = DB::select("select * from tbl_category_news");
						foreach($cat as $rows_cat)
						{
					?>
						<option {{ $fk_category_news_id== $rows_cat->pk_category_news_id ? "selected":"" }} value="{{ $rows_cat->pk_category_news_id }}">{{ $rows_cat->c_name }}</option>
					<?php } ?>
					</select>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Giới thiệu</div>
				<div class="col-md-9">
					<textarea name="c_description" class="form-control" style="height:250px;">
						{{ isset($news->c_description)?$news->c_description:"" }}
					</textarea>
					<script language="javascript">
					CKEDITOR.replace("c_description");
					</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Chi tiết</div>
				<div class="col-md-9">
					<textarea name="c_content" class="form-control" style="height:300px;">
						{{ isset($news->c_content)?$news->c_content:"" }}
					</textarea>
					<script language="javascript">
					CKEDITOR.replace("c_content");
					</script>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="checkbox" name="c_hotnews" id="c_hotnews" {{ isset($news->c_hotnews) && $news->c_hotnews==1?"checked":"" }}> <label for="c_hotnews">Tin nổi bật</label>
				</div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3">Ảnh</div>
				<div class="col-md-9">
					<input type="file" name="c_img">
				</div>
			</div>
			<!-- end row -->			
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<input type="submit" class="btn btn-primary" value="Process">
				</div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>
@endsection