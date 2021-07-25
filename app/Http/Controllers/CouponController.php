<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
{
return view('admin/coupon/addcoupon');
}

public function inserted(Request $a){
	
	$a->validate([
            'coupon_code'=>'required|unique:coupons,coupon_code,', 
            'amount'=>'required',
            'amount_type'=>'required',
            'expiry_date'=>'required',
            
        ]);
$data = new Coupon;
$data->coupon_code=$a->coupon_code;
$data->amount=$a->amount;
$data->amount_type=$a->amount_type;
$data->expiry_date=$a->expiry_date;
$data->save();
if ($data) {
return redirect('admin/coupon')->with('message','Coupon Inserted');
}

}
public function display(){
// echo "display";
$data = Coupon::all();
// echo "</pre>";
// print_r($data);
return view('admin/coupon/manage_coupon',compact('data'));
}

public function view($id){
// echo $id;
$data = Coupon::find($id);
return view('admin/coupon/view_coupon',compact('data'));
}

public function edit($id){
$data = Coupon::find($id);
return view('admin/coupon/edit_coupon',compact('data'));
}

public function update(Request $a){

$data = Coupon::find($a->id);
// $req = new Curd;
$data->coupon_code=$a->coupon_code;
$data->amount=$a->amount;
$data->amount_type=$a->amount_type;
$data->expiry_date=$a->expiry_date;
$data->save();
if($data){
return redirect('admin/manage_coupon')->with('message','Coupon Successfully Updated');
}

}

public function delete($id){
$data = Coupon::find($id);
$delete = $data->delete();
if($delete){
return redirect('admin/manage_coupon')->with('message','Coupon Successfully Deleted');
}
}


  
}
