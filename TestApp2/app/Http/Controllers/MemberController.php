<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\member;
use Response;
use Input;
class MemberController extends Controller
{

    public function index()
    {
        return Response::json([
            'data' => 'Le Phi',
            'result' => 'dsadas'
        ]);
    }

    public function main()
    {
       // return Response::json([
          //'records' => $member
       // ]);
        return view('default');
    }


    public function info(){
        $member = member::all();
        return Response::json(['records' => $member]);
    }

    public function theme()
    {
        return view('index');
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $input = $request->only([
            'name', 'address', 'age' , 'photo'
        ]);
        member::create($input);
        return Response::json([ 'success' => true ]);

        //return redirect()->route('admin.index')
            //->with('success', 'Product create successfully');

    }

    public function uploadImage(Request $request)
    {
        $file = $request->file('file');
        if ($file!=null) {
            $ext = $file->getClientOriginalExtension();
            $image_name = str_random(15).'.'.$ext;
        }
        if (!file_exists(public_path().'/uploads/images')) {
            mkdir(public_path().'/uploads/images');
        }

        \Image::make($request->file('file'))->save(public_path().'/uploads/images/'.$image_name);

        return Response::json([ 'success' => true, 'img' => $image_name]);
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
        $member = member::find($id);
        $member->name = $request->name;
        $member->address = $request->address;
        $member->age = $request->age;
        $member->photo = $request->photo;
        $member->save();
    }

    public function destroy($id)
    {
       $member = member::find($id)->delete();
        return Response::json(['records' => $member]);
    }

}
