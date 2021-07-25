<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
   
    
public function index(){
$category=Category::all();
return view('admin.product.addproduct',compact('category'));
}

public function inserted(Request $a){

$file = $a->file('product_image');
$filename = 'product_image'. time().'.'.$a->product_image->extension();
//dd($filename);
//exit();
$file->move("upload/",$filename);
$data = new Product;

$data->category_id=$a->category_id;
$data->product_name=$a->product_name;
$data->product_code=$a->product_code;
$data->product_description=$a->product_description;
$data->product_image=$filename;
$data->product_price=$a->product_price;
$data->product_quantity=$a->product_quantity;
$data->save();
$data = Product::orderBy('id', 'DESC')->get();
$data=DB::table('categories')->where(['status'=>1])->get();

 // echo "<pre>";
 // print_r($data);
 // die();

if ($data) {
return redirect('admin/product')->with('message','Product Inserted');
}

}
public function display(){
// echo "display";
$data = Product::all();
// echo "</pre>";
// print_r($data);
return view('admin/product/manage_product',compact('data'));
}

public function view($id){
// echo $id;
$data = Product::find($id);
return view('admin/product/view_product',compact('data'));
}

public function edit($id){

$data = product::find($id);
$category = Category::all();
return view('admin/product/edit_product',compact('category','data'));
}

public function update(Request $a){


  if($a->hasFile('image'))
    { 

      $data = Product::find($a->id);
      $file=$a->file('product_image'); 
       $filename = 'product_image'. time().'.'.$a->product_image->extension();
       $file->move("upload/",$filename); 

      $data->category_id=$a->category_id;
      $data->product_name=$a->product_name;
      $data->product_code=$a->product_code;
    
      $data->product_description=$a->product_description;
      
         
      // dd($file);
      // exit();
      
      // dd($filename);
      // exit(); 
     
     $data->product_image=$filename;

     $data->product_price=$a->product_price;
     $data->product_quantity=$a->product_quantity;

  //    print('<pre>');
  //     print_r($a->all());
      
     $data->save();
        if($data)
        {
            return redirect('admin/manage_product')->with('message','Data Updated');
        }

        
        }else{
        $data= Product::find($a->id);
        //$data1=Product::pluck('name','id');

        $data->category_id=$a->category_id;
        
        $data->product_name=$a->product_name;
        $data->product_code=$a->product_code;
        $data->product_description=$a->product_description;
        $data->product_price=$a->product_price;
        $data->product_quantity=$a->product_quantity;
        $data->save();

        if($data)
        {
            return redirect('admin/manage_product')->with('message','Data Updated');
        }

      }

}

public function delete($id){
$data = Product::find($id);
$delete = $data->delete();
if($delete){
return redirect('admin/manage_product')->with('message','Product Successfully Deleted');
}
}
        
  

   

    
}
