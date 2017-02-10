<?php
	namespace App\Http\Controllers\Backend;
	use App\Http\Controllers\Controller;
	use DB;
	use Request;
	use Hash;
	class UserController extends Controller{
		public function list_user(){
			$data["arr"] = DB::table('users')->paginate(2);
			return view("backend.list_user",$data);
		}
		public function delete_user($id){
			//thuc hien xoa ban ghi
			DB::delete("delete from users where id=$id");
			//quay tro ve trang list_user
			return redirect("admin/user");
		}
		public function edit($id){
			//lay ban ghi co id truyen vao
			$data["arr"] = DB::table("users")->where("id","=",$id)->first();
			return view("backend.add_edit_user",$data);
		}	
		public function do_edit($id){
			$name = Request::get("name");
			$email = Request::get("email");
			$password = Request::get("password");
			//update name, password cua ban ghi co id truyen vao
			DB::update("update users set name='$name',email='$email' where id=$id");
			//neu password khong bang rong thi update password
			if($password != ""){
				$password = Hash::make($password);
				DB::update("update users set password='$password' where id=$id");				
			}
			return redirect("admin/user");
		}
		public function add(){
			return view("backend.add_edit_user");
		}
		public function do_add(){
			$name = Request::get("name");
			$email = Request::get("email");
			$password = Request::get("password");
			//neu password khong bang rong thi moi cho insert
			if($password != ""){
				$password = Hash::make($password);
				//insert ban ghi vao csdl
				DB::insert("insert into users(name,email,password) values('$name','$email','$password')");
			}
			//di chuyen ve trang user
			return redirect("admin/user");
		}
	}
?>