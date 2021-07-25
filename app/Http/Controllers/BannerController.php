<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/banner/add_banner');
    }

 public function inserted(Request $a){
    $a->validate([
            'title'=>'required', 
            'url'=>'required',
            'image'=>'mimes:jpeg,jpg,jfif|max:5000',
        ]);
    
$file = $a->file('image');
$filename = 'image'. time().'.'.$a->image->extension();
//dd($filename);
//exit();
$file->move("upload/",$filename);
$data = new Banner;
$data->title=$a->title;
$data->url=$a->url;
$data->image=$filename;
$data->save();
if ($data) {
return redirect('admin/banner')->with('record_added','Banner Inserted Successfully');
}

}
public function display(){
// echo "display";
$data = Banner::all();
// echo "</pre>";
// print_r($data);
return view('admin/banner/manage_banner',compact('data'));
}

public function view($id){
// echo $id;
$data = Banner::find($id);
return view('admin/banner/view_banner',compact('data'));
}

public function edit($id){
$data = Banner::find($id);
return view('admin/banner/edit_banner',compact('data'));
}

public function update(Request $a){
    if($a->hasFile('image'))
    { 
$data= Banner::find($a->id);
   $file = $a->file('image');
$filename = 'image'. time().'.'.$a->image->extension();
//dd($filename);
//exit();
$file->move("upload/",$filename);
$data->title=$a->title;
$data->url=$a->url;
$data->image=$filename;
$data->save();
if($data){
return redirect('admin/manage_banner')->with('record_updated','Banner Successfully Updated');
}
}else{
    $data= Banner::find($a->id);
$data->title=$a->title;
$data->url=$a->url;

$data->save();

if($data){
return redirect('admin/manage_banner')->with('record_updated','Banner Successfully Updated');
}

}
}

public function delete($id){
$data = Banner::find($id);
$delete = $data->delete();
if($delete){
return redirect('admin/manage_banner')->with('record_deleted','Banner Successfully Deleted');
}
}

}
