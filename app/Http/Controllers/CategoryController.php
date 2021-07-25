<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function index()
{
return view('admin/category/add_category');
}

public function inserted(Request $a){
$a->validate([
            'name'=>'required', 
            'description'=>'required',
            'image'=>'mimes:jpeg,jpg,jfif|max:5000',
        ]);

$file = $a->file('image');
$filename = 'image'. time().'.'.$a->image->extension();
//dd($filename);
//exit();
$file->move("upload/",$filename);
$data = new Category;
$data->name=$a->name;
$data->description=$a->description;
$data->image=$filename;
$data->status=1;
$data->save();
if ($data) {
return redirect('admin/category/add_category')->with('record_added','Category Inserted Successfully');
}

}
public function display(){
// echo "display";
$data = Category::all();
// echo "</pre>";
// print_r($data);
return view('admin/category/manage_category',compact('data'));
}

public function view($id){
// echo $id;
$data = Category::find($id);
return view('admin/category/view',compact('data'));
}

public function edit($id){
$data = Category::find($id);
return view('admin/category/edit',compact('data'));
}

public function update(Request $a){
$file = $a->file('image');
$filename = 'image'. time().'.'.$a->image->extension();
//dd($filename);
//exit();
$file->move("upload/",$filename);
$data = Category::find($a->id);
// $req = new Curd;
$data->name=$a->name;
$data->description=$a->description;
$data->image=$filename;
$data->status=1;
$data->save();
if($data){
return redirect('admin/category/manage_category')->with('record_updated','Category Successfully Updated');
}

}

public function delete($id){
$data = Category::find($id);
$delete = $data->delete();
if($delete){
return redirect('admin/category/manage_category')->with('record_deleted','Category Successfully Deleted');
}
}




}