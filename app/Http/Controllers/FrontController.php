<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Monarobase\CountryList\CountryListFacade;
use App\Banner;
use App\Category;
use App\Product;
use App\Cart;
use Session;
use Auth;
use DB;
use App\Order;
use App\OrderProduct;
use PDF;
use Dompdf\Dompdf;
use App\SMS;
use App\DeliveryAddress;
use Mail;
use App\User;
use App\Coupon;
use App\Wishlist;


class FrontController extends Controller
{
	

public function index()
    { 
        $banner=Banner::all();   
        $categories=Category::orderby('name','ASC')->get(); 
        $products=Product::orderby('created_at','DESC')->get();
        return view('front.index',compact('banner','categories','products'));    
    }

public function productdetail(Product $products){
	// $products=Product::find($id);
	$prds=Product::orderby('created_at','DESC')->get();
	return view('front.product-detail',compact('products','prds'));
}

public function addtocart(Request $a){
Session::forget('couponAmount');
	Session::forget('couponCode');
$data = $a->all();

if(empty(Auth::user()->email)){
	$data['user_email'] = '';
}else{
	$data['user_email'] = Auth::user()->email;
}

$session_id=Session::getId();
if(!isset($session_id)){
	$session_id = str_random(40);
	Session::put('session_id',$session_id);
}
if(empty(Auth::check())){
$countProducts = DB::table('carts')->where(['product_id'=>$data['product_id'],'product_quantity'=>$data['product_quantity'],'product_name'=>$data['product_name'],'product_price'=>$data['product_price'],'product_image'=>$data['product_image'],'session_id'=>$session_id])->count();
if($countProducts>0){
	return redirect()->back()->with('message','Product Is already in the cart');
}	
}else{
	$countProducts = DB::table('carts')->where(['product_id'=>$data['product_id'],'user_email'=>$data['user_email'],'product_quantity'=>$data['product_quantity'],'product_name'=>$data['product_name'],'product_price'=>$data['product_price'],'product_image'=>$data['product_image']])->count();
if($countProducts>0){
	return redirect()->back()->with('message','Product Is already in the cart');
}

}

DB::table('carts')->insert(['product_id'=>$data['product_id'],'product_quantity'=>$data['product_quantity'],'product_name'=>$data['product_name'],'product_price'=>$data['product_price'],'product_image'=>$data['product_image'],'user_email'=>$data['user_email'],'session_id'=>$session_id]);
return redirect('cart')->with('message','Product has been added to cart');

}

public function cart(){
	if (Auth::check()){
	$useremail= Auth::User()->email; 
	$data= Cart::where('user_email',$useremail)->get();
	$a= Cart::where('user_email',$useremail)->get();
	return view('front.cart',compact('data','a'));
	}
	else{
	$session_id=Session::getId();
	$data=Cart::where(['session_id'=>$session_id])->get();
	// $data = Cart::all();
	$a=Cart::where(['session_id'=>$session_id])->get();
	return view('front.cart',compact('data','a'));
	}
}


public function deletecart($id){
	Session::forget('couponAmount');
	Session::forget('couponCode');
	$data = Cart::find($id);
	$delete = $data->delete();
	if($delete){
	return redirect('cart')->with('Order_deleted','Your product has been deleted');
	} 
}



public function updatequantity($id=null,$product_quantity=null){
	Session::forget('couponAmount');
	Session::forget('couponCode');
	DB::table('carts')->where('id',$id)->increment('product_quantity',$product_quantity);
	return redirect('cart');

}

public function applycoupon(Request $request){

	Session::forget('couponAmount');
	Session::forget('couponCode');
    if($request->isMethod('post')){
        $data= $request->all();
        // echo "<pre>";
        // print_r($data);
        // die;
        $couponCount = Coupon::where('coupon_code',$data['coupon_code'])->count();
        if($couponCount == 0){
        	return redirect()->back()->with('do_login','Coupon code Does not Exist');
        }
        else{
        	$couponDetails = Coupon::where('coupon_code',$data['coupon_code'])->first();

        	// if($couponDetails->stauts==0){
        	// 	return redirect()->back()->with('do_login','Coupon code is not Working');

        	// }
        	 //check coupon expiry date
        	$expiry_date = $couponDetails->expiry_date;
        	$current_date = date('Y-m-d');
        	if ($expiry_date < $current_date) {
        		return redirect()->back()->with('do_login','Coupon code is expired');
        	}
        	//coupon is ready for discount
        	$session_id = Session::get('session_id');
        	$userCart = DB::table('carts')->where(['session_id'=>$session_id])->get();
        	$total_amount = 0;
        	foreach($userCart as $item){
        		$total_amount = $total_amount +($carts->product_price*$carts->product_quantity);
        	}
        	//check if the amount is fixed or percentage
        	if($couponDetails->amount_type=='fixed'){
        		$couponAmount = $couponDetails->amount;
        	}else{
        		$couponAmount = $total_amount * ($couponDetails->amount/100);
        	}
        	//add coupon code in session
        	Session::put('couponAmount',$couponAmount);
        	Session::put('couponCode',$data['coupon_code']);
        	return redirect()->back()->with('do_login','Coupon Applied Successfylly.You are Availing discount');

        }
       
       
    }
}

public function checkout(){

	if (Auth::check()){

	$useremail= Auth::User()->email; 
	$data= Cart::where('user_email',$useremail)->get();
	$a= Cart::where('user_email',$useremail)->get();
	$countries = CountryListFacade::getList('en');
	return view('front.checkout',compact('data','a','countries'));

    }
	else
	{
	$session_id=Session::getId();
	$data=Cart::where(['session_id'=>$session_id])->get();
	// $data = Cart::all();
	$a=Cart::where(['session_id'=>$session_id])->get();
	return view('front.checkout',compact('data','a'));
	}
}

public function about(){

	return view('front.about');

}

public function contactus(){

	return view('front.contact');
}

public function placeOrder(Request $a){
	$data = new Order;
	$data->useremail=$a->email;
	$data->name=$a->name;
	$data->address=$a->address;
	$data->city=$a->city;
	$data->state=$a->state;
	$data->country=$a->country;
	$data->pincode=$a->pincode;
	$data->phone=$a->phone;
	$data->payment_method=$a->payment_method;
	$data->grand_total=$a->grand_total;
	$data->order_status='pending';
	$data->order_id=Str::random(10);
	$data->save();
	$order_id=DB::getPdo()->lastinsertID();
	// print_r($order_id);
	// die;
	$cart_product=DB::table('carts')->where(['user_email'=>$a->email])->get();
	foreach($cart_product as $c){
	$cart = new OrderProduct;
	$cart->useremail=$a->email;
	$cart->order_id=$order_id;
	$cart->product_id=$c->product_id;
	$cart->product_name=$c->product_name;
	$cart->product_size=$c->product_size;
	$cart->product_price=$c->product_price;
	$cart->product_image=$c->product_image;
	$cart->product_quantity=$c->product_quantity;
	$cart->save();
	}
	
	if($data['payment_method']=='Cash on delivery'){
		
		$lists = Order::with('order_products')->where('id',$order_id)->first()->toArray();
        $lists = json_decode(json_encode($lists),true);
        // dd($lists);
        // die;
        // $productlists = OrderProduct::where('id',$order_id)->first();
        // $productlists = json_decode(json_encode($productlists),true);
         $productlists = User::where('email',$lists['useremail'])->first()->toArray();
          $productlists = json_decode(json_encode($productlists),true);



		$email = $data['useremail'];

            $messageData=[
                'email' => $data['useremail'],
                'name' => $data['name'],
                'lists' => $lists,
                'productlists' => $productlists,
                
            ];
            Mail::send('front.order_email',$messageData,function($message) use($email){
                $message->to($email)->subject(' Order placed Successfully ');
            }); 

            $useremail=Auth::user()->email;
	        DB::table('carts')->where('user_email',$useremail)->delete();

		return view('front.order-complete',compact('lists','productlists'));
	}

	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']==''){
		return redirect('thanks');
	}
	if($data['payment_method']=='paytm'){
		
		
            //$data->order_status = 'pending';
            $amount=$data['grand_total'];
            $order_id=$data['order_id'];

            $data_for_request = $this->handlePaytmRequest( $order_id, $amount, );


            $paytm_txn_url = 'https://securegw-stage.paytm.in/theia/processTransaction';
            $paramList = $data_for_request['paramList'];
            $checkSum = $data_for_request['checkSum'];
    
            return view( 'front.paytm-merchant-form', compact( 'paytm_txn_url', 'paramList', 'checkSum' ) );
	}

}

public function handlePaytmRequest( $order_id, $grand_total ) {
		// Load all functions of encdec_paytm.php and config-paytm.php
		$this->getAllEncdecFunc();
		$this->getConfigPaytmSettings();

		$checkSum = "";
		$paramList = array();

		// $paramList["body"] = array(
		// 	"requestType"   => "Payment",
		// 	"mid"           => "izMqEx58417900878943",
		// 	"websiteName"   => "WEBSTAGING",
		// 	"orderId"       => "$order_id",
		// 	"callbackUrl"   => "/paytm-callback",
		// 	"txnAmount"     => array(
		// 		"value"     => "1.00",
		// 		"currency"  => "INR",
		// 	),
		// 	"userInfo"      => array(
		// 		"custId"    => "CUST_001",
		// 	),
		// );

		// Create an array having all required parameters for creating checksum.
		$paramList["MID"] = 'pAvTJo89149283760589';
		$paramList["ORDER_ID"] = $order_id;
		$paramList["CUST_ID"] = $order_id;
		$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
		$paramList["CHANNEL_ID"] = 'WEB';
		$paramList["TXN_AMOUNT"] = $grand_total;
		$paramList["WEBSITE"] = 'WEBSTAGING';
		$paramList["CALLBACK_URL"] = url( '/paytm-callback' );
		$paytm_merchant_key = 'JdfNKOubhfqQXBQ8';

		//Here checksum string will return by getChecksumFromArray() function.
		$checkSum = getChecksumFromArray( $paramList, $paytm_merchant_key );

		return array(
			'checkSum' => $checkSum,
			'paramList' => $paramList
		);
	}


    function getAllEncdecFunc() {
		function encrypt_e($input, $ky) {
			$key   = html_entity_decode($ky);
			$iv = "@@@@&&&&####$$$$";
			$data = openssl_encrypt ( $input , "AES-128-CBC" , $key, 0, $iv );
			return $data;
		}

		function decrypt_e($crypt, $ky) {
			$key   = html_entity_decode($ky);
			$iv = "@@@@&&&&####$$$$";
			$data = openssl_decrypt ( $crypt , "AES-128-CBC" , $key, 0, $iv );
			return $data;
		}

		function pkcs5_pad_e($text, $blocksize) {
			$pad = $blocksize - (strlen($text) % $blocksize);
			return $text . str_repeat(chr($pad), $pad);
		}

		function pkcs5_unpad_e($text) {
			$pad = ord($text[strlen($text) - 1]);
			if ($pad > strlen($text))
				return false;
			return substr($text, 0, -1 * $pad);
		}

		function generateSalt_e($length) {
			$random = "";
			srand((double) microtime() * 1000000);

			$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
			$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
			$data .= "0FGH45OP89";

			for ($i = 0; $i < $length; $i++) {
				$random .= substr($data, (rand() % (strlen($data))), 1);
			}

			return $random;
		}

		function checkString_e($value) {
			if ($value == 'null')
				$value = '';
			return $value;
		}

		function getChecksumFromArray($arrayList, $key, $sort=1) {
			if ($sort != 0) {
				ksort($arrayList);
			}
			$str = getArray2Str($arrayList);
			$salt = generateSalt_e(4);
			$finalString = $str . "|" . $salt;
			$hash = hash("sha256", $finalString);
			$hashString = $hash . $salt;
			$checksum = encrypt_e($hashString, $key);
			return $checksum;
		}
		function getChecksumFromString($str, $key) {

			$salt = generateSalt_e(4);
			$finalString = $str . "|" . $salt;
			$hash = hash("sha256", $finalString);
			$hashString = $hash . $salt;
			$checksum = encrypt_e($hashString, $key);
			return $checksum;
		}

		function verifychecksum_e($arrayList, $key, $checksumvalue) {
			$arrayList = removeCheckSumParam($arrayList);
			ksort($arrayList);
			$str = getArray2StrForVerify($arrayList);
			$paytm_hash = decrypt_e($checksumvalue, $key);
			$salt = substr($paytm_hash, -4);

			$finalString = $str . "|" . $salt;

			$website_hash = hash("sha256", $finalString);
			$website_hash .= $salt;

			$validFlag = "FALSE";
			if ($website_hash == $paytm_hash) {
				$validFlag = "TRUE";
			} else {
				$validFlag = "FALSE";
			}
			return $validFlag;
		}

		function verifychecksum_eFromStr($str, $key, $checksumvalue) {
			$paytm_hash = decrypt_e($checksumvalue, $key);
			$salt = substr($paytm_hash, -4);

			$finalString = $str . "|" . $salt;

			$website_hash = hash("sha256", $finalString);
			$website_hash .= $salt;

			$validFlag = "FALSE";
			if ($website_hash == $paytm_hash) {
				$validFlag = "TRUE";
			} else {
				$validFlag = "FALSE";
			}
			return $validFlag;
		}

		function getArray2Str($arrayList) {
			$findme   = 'REFUND';
			$findmepipe = '|';
			$paramStr = "";
			$flag = 1;
			foreach ($arrayList as $key => $value) {
				$pos = strpos($value, $findme);
				$pospipe = strpos($value, $findmepipe);
				if ($pos !== false || $pospipe !== false)
				{
					continue;
				}

				if ($flag) {
					$paramStr .= checkString_e($value);
					$flag = 0;
				} else {
					$paramStr .= "|" . checkString_e($value);
				}
			}
			return $paramStr;
		}

		function getArray2StrForVerify($arrayList) {
			$paramStr = "";
			$flag = 1;
			foreach ($arrayList as $key => $value) {
				if ($flag) {
					$paramStr .= checkString_e($value);
					$flag = 0;
				} else {
					$paramStr .= "|" . checkString_e($value);
				}
			}
			return $paramStr;
		}

		function redirect2PG($paramList, $key) {
			$hashString = getchecksumFromArray($paramList, $key);
			$checksum = encrypt_e($hashString, $key);
		}

		function removeCheckSumParam($arrayList) {
			if (isset($arrayList["CHECKSUMHASH"])) {
				unset($arrayList["CHECKSUMHASH"]);
			}
			return $arrayList;
		}

		function getTxnStatus($requestParamList) {
			return callAPI(PAYTM_STATUS_QUERY_URL, $requestParamList);
		}

		function getTxnStatusNew($requestParamList) {
			return callNewAPI(PAYTM_STATUS_QUERY_NEW_URL, $requestParamList);
		}

		function initiateTxnRefund($requestParamList) {
			$CHECKSUM = getRefundChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY,0);
			$requestParamList["CHECKSUM"] = $CHECKSUM;
			return callAPI(PAYTM_REFUND_URL, $requestParamList);
		}

		function callAPI($apiURL, $requestParamList) {
			$jsonResponse = "";
			$responseParamList = array();
			$JsonData =json_encode($requestParamList);
			$postData = 'JsonData='.urlencode($JsonData);
			$ch = curl_init($apiURL);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($postData))
			);
			$jsonResponse = curl_exec($ch);
			$responseParamList = json_decode($jsonResponse,true);
			return $responseParamList;
		}

		function callNewAPI($apiURL, $requestParamList) {
			$jsonResponse = "";
			$responseParamList = array();
			$JsonData =json_encode($requestParamList);
			$postData = 'JsonData='.urlencode($JsonData);
			$ch = curl_init($apiURL);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($postData))
			);
			$jsonResponse = curl_exec($ch);
			$responseParamList = json_decode($jsonResponse,true);
			return $responseParamList;
		}
		function getRefundChecksumFromArray($arrayList, $key, $sort=1) {
			if ($sort != 0) {
				ksort($arrayList);
			}
			$str = getRefundArray2Str($arrayList);
			$salt = generateSalt_e(4);
			$finalString = $str . "|" . $salt;
			$hash = hash("sha256", $finalString);
			$hashString = $hash . $salt;
			$checksum = encrypt_e($hashString, $key);
			return $checksum;
		}
		function getRefundArray2Str($arrayList) {
			$findmepipe = '|';
			$paramStr = "";
			$flag = 1;
			foreach ($arrayList as $key => $value) {
				$pospipe = strpos($value, $findmepipe);
				if ($pospipe !== false)
				{
					continue;
				}

				if ($flag) {
					$paramStr .= checkString_e($value);
					$flag = 0;
				} else {
					$paramStr .= "|" . checkString_e($value);
				}
			}
			return $paramStr;
		}
		function callRefundAPI($refundApiURL, $requestParamList) {
			$jsonResponse = "";
			$responseParamList = array();
			$JsonData =json_encode($requestParamList);
			$postData = 'JsonData='.urlencode($JsonData);
			$ch = curl_init($apiURL);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_URL, $refundApiURL);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$headers = array();
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$jsonResponse = curl_exec($ch);
			$responseParamList = json_decode($jsonResponse,true);
			return $responseParamList;
		}
	}




    function getConfigPaytmSettings() {
		define('PAYTM_ENVIRONMENT', 'TEST'); // PROD
		define('PAYTM_MERCHANT_KEY', 'JdfNKOubhfqQXBQ8'); //Change this constant's value with Merchant key downloaded from portal
		define('PAYTM_MERCHANT_MID', 'pAvTJo89149283760589'); //Change this constant's value with MID (Merchant ID) received from Paytm
		define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING'); //Change this constant's value with Website name received from Paytm

		$PAYTM_STATUS_QUERY_NEW_URL='https://securegw-stage.paytm.in/merchant-status/getTxnStatus';
		$PAYTM_TXN_URL='https://securegw-stage.paytm.in/theia/processTransaction';
		if (PAYTM_ENVIRONMENT == 'PROD') {
			$PAYTM_STATUS_QUERY_NEW_URL='https://securegw.paytm.in/merchant-status/getTxnStatus';
			$PAYTM_TXN_URL='https://securegw.paytm.in/theia/processTransaction';
		}
		define('PAYTM_REFUND_URL', '');
		define('PAYTM_STATUS_QUERY_URL', $PAYTM_STATUS_QUERY_NEW_URL);
		define('PAYTM_STATUS_QUERY_NEW_URL', $PAYTM_STATUS_QUERY_NEW_URL);
		define('PAYTM_TXN_URL', $PAYTM_TXN_URL);
	}

    public function paytmCallback( Request $request ) {
   		// return $request;

		$order_id = $request['ORDERID'];

		if ( 'TXN_SUCCESS' === $request['STATUS'] ) {
			$transaction_id = $request['TXNID'];
			$order = Order::where( 'order_id', $order_id )->first();
			$order->order_status = 'complete';
			$order->transaction_id = $transaction_id;
			$order->save();
		    $data = Order::where('order_id',$order_id)->get();

			$useremail=Auth::user()->email;
	        DB::table('carts')->where('user_email',$useremail)->delete();
	        
            $message="Hii rohit welcome to our services foodbuddy.com";
            $mobile = "9340821225";
            SMS::sendSMS($message,$mobile);

			return view( 'front.order-complete', compact( 'order') );

		} else if( 'TXN_FAILURE' === $request['STATUS'] ){
			return view( 'front.payment-failed' );
		}
	}



public function userAccount(){
	if (Auth::check()){

    $data = Order::with('order_products')->where('useremail',Auth::user()->email)->orderBy('id','DESC')->get()->toArray();
    
	return view('front.user_account',compact('data'));
	}
	
}
public function userOrderDetails($id){
	$userOrderDetails = Order::with('order_products')->where('id',$id)->first()->toArray();
	
	return view('front.order_details',compact('userOrderDetails'));
}

public function editAddress(){

    return view('front.edit_address');
}

public function search(Request $request){

			$request->validate([   
            'term'=>'required|min:3',
          ]);


		$prdct = Product::where([
             ['product_name', '!=', Null],
              [function ($query) use ($request){
              	if(($term = $request->term)){
              		$query->orWhere('product_name', 'LIKE', '%' . $term . '%')->get();
              	}
              }]	
		])
		->orderBy('id','desc')
		->paginate(4);

	    return view('front.search-result',compact('prdct'))->with('message','Please Enter at least 3 alphabets');
	}


      public function getwishlist()
    {
        $useremail=Auth::User()->email;
        $wishlist = Product::all();
        $wish=Wishlist::join('products','wishlists.pid','=','products.id')->where('wishlists.u_email','=',$useremail)->paginate(8);

        return view('front.wishlist',compact('wish','wishlist'));
    }
   
    public function postwishlist(Request $w)
    {
        $found = Wishlist::where('u_email', $w->user_email)->where('pid', $w->product_id)->where('product_quantity', $w->product_quantity)->count();

        if($found==0)
        {
            $wish=new Wishlist;

            $wish->u_email=$w->user_email;
            $wish->pid=$w->product_id;
            $wish->product_quantity=$w->product_quantity;

            $wish->save();

            return redirect()->back()->with('wishlist_message','Product wishlisted');
        }
        else
        {
            return redirect()->back()->with('error','This Product is already present in your wishlist!');
        }
        if($found>0){
	     return redirect()->back()->with('message','Product Is already in the cart');
        }	
    }

     public function wishlistdeleteitem($id)
    {
        $wish=Wishlist::where('pid','=',$id);
       
        if($wish)
            {
                $wish->delete();

                return redirect()->back()->with('message','Product Removed from wishlist');
            }
        else
        {
             return redirect()->back()->with('error','Product does not exist in the wishlist');  
        }
             
}
}