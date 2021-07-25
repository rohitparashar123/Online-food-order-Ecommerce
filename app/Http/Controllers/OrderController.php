<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\User;
use PDF;
 use Dompdf\Dompdf;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {   
       $Orders = Order::with('order_products')->orderBy('id','DESC')->get()->toArray();
       // dd($Orders);
       
        return view('admin.order.manage_order',compact('Orders'));   
    }


   public function invoicePrint($id){

    $lists = Order::with('order_products')->where('id',$id)->first()->toArray();
    $userDetails = User::where('email',$lists['useremail'])->first()->toArray();
        
        $output = '<!DOCTYPE html>
       <html lang="en">
       <head>
       <meta charset="utf-8">
       <title>Foodbuddy Order Invoice</title>
       <style>
         @font-face {
         font-family: SourceSansPro;
         src: url(SourceSansPro-Regular.ttf);
         }
         .clearfix:after {
         content: "";
         display: table;
         clear: both;
         }
         a {
         color: #0087C3;
         text-decoration: none;
         }
         body {
         position: relative;
         width: 21cm;  
         height: 29.7cm; 
         margin: 0 auto; 
         color: #555555;
         background: #FFFFFF; 
         font-family: Arial, sans-serif; 
         font-size: 14px; 
         font-family: SourceSansPro;
         }
         header {
         padding: 10px 0;
         margin-bottom: 20px;
         border-bottom: 1px solid #AAAAAA;
         }
         #logo {
         float: left;
         margin-top: 8px;
         }
         #logo img {
         height: 70px;
         }
         #company {
         float: right;
         text-align: right;
         }
         #details {
         margin-bottom: 50px;
         }
         #client {
         padding-left: 6px;
         border-left: 6px solid #0087C3;
         float: left;
         }
         #client .to {
         color: #777777;
         }
         h2.name {
         font-size: 1.4em;
         font-weight: normal;
         margin: 0;
         }
         #invoice {
         float: right;
         text-align: right;
         }
         #invoice h1 {
         color: #0087C3;
         font-size: 2.4em;
         line-height: 1em;
         font-weight: normal;
         margin: 0  0 10px 0;
         }
         #invoice .date {
         font-size: 1.1em;
         color: #777777;
         }
         table {
         width: 100%;
         border-collapse: collapse;
         border-spacing: 0;
         margin-bottom: 20px;
         }
         table th,
         table td {
         padding: 20px;
         background: #EEEEEE;
         text-align: center;
         border-bottom: 1px solid #FFFFFF;
         }
         table th {
         white-space: nowrap;        
         font-weight: normal;
         }
         table td {
         text-align: right;
         }
         table td h3{
         color: #57B223;
         font-size: 1.2em;
         font-weight: normal;
         margin: 0 0 0.2em 0;
         }
         table .no {
         color: #FFFFFF;
         font-size: 1.6em;
         background: #57B223;
         }
         table .desc {
         text-align: left;
         }
         table .unit {
         background: #DDDDDD;
         }
         table .qty {
         }
         table .total {
         background: #57B223;
         color: #FFFFFF;
         }
         table td.unit,
         table td.qty,
         table td.total {
         font-size: 1.2em;
         }
         table tbody tr:last-child td {
         border: none;
         }
         table tfoot td {
         padding: 10px 20px;
         background: #FFFFFF;
         border-bottom: none;
         font-size: 1.2em;
         white-space: nowrap; 
         border-top: 1px solid #AAAAAA; 
         }
         table tfoot tr:first-child td {
         border-top: none; 
         }
         table tfoot tr:last-child td {
         color: #57B223;
         font-size: 1.4em;
         border-top: 1px solid #57B223; 
         }
         table tfoot tr td:first-child {
         border: none;
         }
         #thanks{
         font-size: 2em;
         margin-bottom: 50px;
         }
         #notices{
         padding-left: 6px;
         border-left: 6px solid #0087C3;  
         }
         #notices .notice {
         font-size: 1.2em;
         }
         footer {
         color: #777777;
         width: 100%;
         height: 30px;
         position: absolute;
         bottom: 0;
         border-top: 1px solid #AAAAAA;
         padding: 8px 0;
         text-align: center;
         }
      </style>
   </head>
   <body>
      <header class="clearfix">
         <div id="logo">
            <h1>Order Invoice</h1>
         </div>
      </header>
      <main>
         <div id="details" class="clearfix">
            <div id="client">
               <div class="to">INVOICE TO:</div>
               <h2 class="name">'.$lists['name'].'</h2>
               <h2 class="phone">'.$lists['phone'].'</h2>
               <div class="address">'.$lists['address'].','.$lists['pincode'].','.$lists['city'].','.$lists['state'].'</div>
               <div class="address">'.$lists['country'].'</div>
               <div class="email"><a href="mailto: '.$lists['useremail'].'">'.$lists['useremail'].'</a></div>
            </div>
            <div style="float: right; margin-top: -15px;">
               <h1>Order ID: '.$lists['order_id'].'</h1>
               <div class="date">Date of Invoice: '.date('d-m-Y',strtotime($lists['created_at'])).'</div>
               <div class="date">Order Amount: Rs '.$lists['grand_total'].' </div>
               <div class="date">Payment Method: '.$lists['payment_method'].'</div>
            </div>
         </div>
         <table border="0" cellspacing="0" cellpadding="0">
            <thead>
               <tr>
                      <th class="unit">ID</th>
                      <th class="desc">Product Name</th>
                      <th class="unit">Product Price</th>
                      <th class="qty">Product Quantity</th>
                      <th class="total">Product Price</th>
               </tr>
            </thead>
            <tbody>';
              
                  $subTotal=0;
                   foreach($lists['order_products'] as $list){
                   $output .= '<tr>
                    <td class="unit">'.$list['order_id'].'</td>
                    <td class="desc">'.$list['product_name'].'</td>
                    <td class="unit">Rs '.$list['product_price'].'</td>
                    <td class="qty">'.$list['product_quantity'].'</td>
                    <td class="total">Rs '.$list['product_price']*$list['product_quantity'].'</td>
                  </tr>';
                  $subTotal = $subTotal + ($list['product_price']*$list['product_quantity']);   
                 }
                 $output .= '
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="2"></td>
                  <td colspan="2">SUBTOTAL</td>
                  <td>Rs '.$subTotal.'</td>
               </tr>
               <tr>
                  <td colspan="2"></td>
                  <td colspan="2">TAX</td>
                  <td>Rs.0</td>
               </tr>
               <tr>
                  <td colspan="2"></td>
                  <td colspan="2">GRAND TOTAL</td>
                  <td>Rs '.$lists['grand_total'].'</td>
               </tr>
            </tfoot>
         </table>
         <div id="notices">
         </div>
      </main>
      <footer>
      Hope,You Like our Service Thank You!
      </footer>
   </body>
</html>

';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($output);


        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();

    return view('admin.order.invoice-print',compact('lists','userDetails'));
    
   }

   public function ViewOrder($id){

    $lists = Order::with('order_products')->where('id',$id)->first()->toArray();
    // dd($lists);
    $prd = Product::all();
    $userDetails = User::where('email',$lists['useremail'])->first()->toArray();
    return view('admin.order.view-orders',compact('lists','prd','userDetails'));

   }

   public function invoice($id){

    $lists = Order::with('order_products')->where('id',$id)->first()->toArray();
    // dd($lists);
    $prd = Product::all();
    $userDetails = User::where('email',$lists['useremail'])->first()->toArray();
    return view('admin.order.invoice',compact('lists','prd','userDetails'));

   }

   public function pdf($id){
    $lists = Order::with('order_products')->where('id',$id)->first()->toArray();
    // dd($lists);
    $prd = Product::all();
    $userDetails = User::where('email',$lists['useremail'])->first()->toArray();
    $data = DB::table('orders')
       ->join('order_products','orders.id','order_products.order_id')
       ->get();

    $pdf = PDF::loadView('admin.order.invoice-print',compact('data','lists','prd','userDetails'))->setPaper('a4', 'landscape');
    
    return $pdf->download('Order-details.pdf');
    }

        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
