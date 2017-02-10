<?php
	namespace App\Http\Controllers\Backend;
	use App\Http\Controllers\Controller;
	use DB;
	use Request;
	class CategoryNewsController extends Controller{
		public function list_category_news(){
			//lay danh sach tin tuc
			$data["arr"] = DB::table("tbl_category_news")->paginate(10);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
			return view("backend.list_category_news",$data);
		}
		public function delete($pk_category_news_id){
			DB::delete("delete from tbl_category_news where pk_category_news_id=$pk_category_news_id");
			return redirect("admin/category_news");
		}
	}
?>