@extends('front/master')
@section('title','Edit Address')
@section('content')
<style type="text/css">
    .border-radius{
        border-radius: 30px;
    }
</style>
<!-- product tab start -->
<div class="my-account pt-80 pb-50" style="background-color: #efefef;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title text-capitalize mb-30 pb-25 text-center">Update account</h3>
            </div>
            <!-- My Account Tab Menu Start -->
            <div class="col-lg-6 offset-lg-3 col-12 mb-30">
                <!--  contact form content -->
                <div class="contact-form-content">
                     <div class="card">
                    <h3 class="contact-page-title text-center mt-4">Fill Up the Details</h3>
                         <div class="card-body">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input class="border-radius" type="text" name="customerName" id="customername" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input class="border-radius" type="email" name="customerEmail" id="customerEmail" required="">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input class="border-radius" type="text" name="contactSubject" id="contactSubject" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="contactMessage" class="pb-10" id="contactMessage"
                                    required=""></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" value="submit" id="submit" class="btn theme-btn--dark1 btn--lg"
                                    name="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messegemt-10"></p>
                      </div>
               </div>    
                </div>
                <!-- End of contact -->
            </div>  
            <!-- My Account Tab Menu End -->

            <!-- My Account Tab Content Start -->
           
            <!-- My Account Tab Content End -->
        </div>
    </div>
</div>
<!-- product tab end -->
@endsection