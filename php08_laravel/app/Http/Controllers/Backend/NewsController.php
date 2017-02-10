<?php
	namespace App\Http\Controllers\Backend;
	use App\Http\Controllers\Controller;
	//Lay thong tin theo kieu post,get
	use Request;
	//thao tac voi csdl
	use DB;
	class NewsController extends Controller{
		public function list_news(){
			$data["arr"] = DB::table("tbl_news")->paginate(10);
			return view("backend.list_news",$data);
		}
		public function edit($id){
			//lay ban ghi co id truyen vao
			$data["news"] = DB::table("tbl_news")->where("pk_news_id","=",$id)->first();
			return view("backend.add_edit_news",$data);
		}
		public function do_edit($id){
			$c_name = Request::get("c_name");
			$fk_category_news_id = Request::get("fk_category_news_id");
			$c_description = Request::get("c_description");
			$c_content = Request::get("c_content");
			$c_hotnews = Request::get("c_hotnews")=="on" ? 1:0;
			//update ban ghi co id truyen vao
			DB::update("update tbl_news set c_name='$c_name',fk_category_news_id=$fk_category_news_id,c_description='$c_description',c_content='$c_content',c_hotnews=$c_hotnews where pk_news_id=$id");
			//upload image
			//=============
			$c_img = "";
			if (Request::hasFile('c_img')){
				$c_img = Request::file("c_img")->getClientOriginalName();
				$c_img = time()."_".$c_img;
				//upload image
				Request::file("c_img")->move("upload/news",$c_img);
			}
			if($c_img != "")
				DB::update("update tbl_news set c_img = '$c_img' where pk_news_id=$id");
			return redirect(url("admin/news"));
		}
		public function add(){
			return view("backend.add_edit_news");
		}
		public function do_add(){
			$c_name = Request::get("c_name");
			$fk_category_news_id = Request::get("fk_category_news_id");
			$c_description = Request::get("c_description");
			$c_content = Request::get("c_content");
			$c_hotnews = Request::get("c_hotnews")=="on" ? 1:0;
			//=============
			$c_img = "";
			if (Request::hasFile('c_img')){
				$c_img = Request::file("c_img")->getClientOriginalName();
				$c_img = time()."_".$c_img;
				//upload image
				Request::file("c_img")->move("upload/news",$c_img);
			}
			//insert ban ghi vao csdl
			DB::insert("insert into tbl_news(c_name,fk_category_news_id,c_description,c_content,c_img,c_hotnews) values('$c_name',$fk_category_news_id,'$c_description','$c_content','$c_img',$c_hotnews)");
			return redirect(url("admin/news"));
		}
		public function delete($id){
			$get_img = DB::table("tbl_news")->where("pk_news_id","=",$id)->first();
			$c_img = $get_img->c_img;
			if(file_exists("upload/news/$c_img"))
				unlink("upload/news/$c_img");
			DB::delete("delete from tbl_news where pk_news_id=$id");
			return redirect(url("admin/news"));
		}
	}
?>