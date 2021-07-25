@extends('front/master')
@section('title','FoodBuddy | Contact Us')
@section('content')
<style type="text/css">
    .border-radius{
        border-radius: 30px;
    }
    .padding{
        padding: 25px;
    }
    
    .block-heading{
    border-bottom: 1px solid #eeeeee;
    margin-bottom: 25px;
    padding-bottom: 20px;
    }
    .inner-content {
    padding: 30px;
    box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);
    background-color: #ffffff;
    border-radius: 15px;
    }
    @media screen and (max-width: 576px) {
        .margin-left{
        margin-left: 0px;
    } 

    }
    section.contact-info .info-item {
    text-align: center;
    box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);
    background-color: #ffffff;
    border-radius: 15px;
    padding: 50px 30px 50px 30px!important;
    margin-top: 30px;
    }
    section.contact-info .info-item .icon {
    width: 80px;
    height: 80px;
    position: relative;
    left: -140px;
    display: inline-block;
    text-align: center;
    line-height: 80px;
    border-radius: 50%;
    box-shadow: 0px 0px 20px rgb(0 0 0 / 10%);
    color: #009df2;
    font-size: 28px;
    }
     @media screen and (max-width: 576px) {
      section.contact-info .info-item .icon1 {
    width: 80px;
    height: 80px;
    position: relative;
    left: -98px;
    display: inline-block;
    text-align: center;
    line-height: 80px;
    border-radius: 50%;
    box-shadow: 0px 0px 20px rgb(0 0 0 / 10%);
    color: #009df2;
    font-size: 28px;
    } 
    
    }
    .margin-top {
    margin-top: 40px!important;
    margin-bottom: 20px!important;
    top: 40px;
    left: 42px;
    position: relative;
    }
    section.contact-info .info-item p a {
    position: relative;
    top: 20px;
    font-size: 15px;
    color: #716f85;
    }
</style>
<!-- product tab start -->
<div class="map">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 border-radius">
                <div class="inner-content">
                    <div class="block-heading">
                        <h4>Find Us On Map</h4>
                    </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7159.430168896017!2d78.15768762250975!3d26.205945059821797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c42914647a4f%3A0x184511fc84af60a5!2sShinde%20Ki%20Chhawani%2C%20Gwalior%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1623150946382!5m2!1sen!2sin" style="border-radius: 10px;" loading="lazy">
                        </iframe>
                </div>
            </div>
       </div>
   </div>
</div>

<section class="contact-section pt-50 pb-50">
    <div class="container">
        <div class="row">
             <div class="col-lg-2"></div>
            <div class="col-lg-4 col-12 mb-30 border-radius padding" style="
    box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);">
                <!--  contact page side content  -->
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Contact Us</h3>
                    <p class="contact-page-message mb-30">FoodBuddy provides the best service possible to its customers because for us, our client’s happiness is important. Whatever we choose to do, we do it an exorbitant manner. FoodBuddy Company provides a full range of maintenance and compliance services for Government and Commercial facilities both large and small.</p>
                    <!--  single contact block  -->

                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p>432 C,Atal Library,shinde ki chhawani,Gwalior</p>
                    </div>

                    <!--  End of single contact block -->

                    <!--  single contact block -->

                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p>
                            <a href="tel:123456789">Mobile: +91 9340821225</a>
                        </p>
                    </div>

                    <!-- End of single contact block -->

                    <!--  single contact block -->

                    <div class="single-contact-block">
                        <h4><i class="fas fa-envelope"></i> Email</h4>
                        <p>
                            <a href="mailto:yourmail@domain.com">parasharjirohit@gmail.com</a>
                        </p>
                    </div>

                    <!--=======  End of single contact block  =======-->
                </div>

                <!--=======  End of contact page side content  =======-->

            </div>
            <div class="col-lg-4 col-12 mb-30 border-radius margin-left" style="
    box-shadow: 0px 0px 25px rgb(0 0 0 / 10%); ">
                <!--  contact form content -->
                <div class="contact-form-content">
                    <h3 class="contact-page-title">Tell Us Your Message</h3>
                    <div class="contact-form">
                        <form id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input type="text" class="border-radius" name="customerName" id="customername" required="">
                            </div>
                            <div class="form-group">
                                <label>Your Email <span class="required">*</span></label>
                                <input type="email" class="border-radius"  name="customerEmail" id="customerEmail" required="">
                            </div>
                            
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="contactMessage" class="border-radius"  class="pb-10" id="contactMessage"
                                    required=""></textarea>
                            </div>
                            <div class="form-group mb-20 ">
                                <button type="submit" value="submit" id="submit" class="btn theme-btn--dark1 btn--lg"
                                    name="submit">submit</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messegemt-10"></p>
                </div>
                <!-- End of contact -->
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- product tab end -->
<section class="contact-info mb-5">
    <div class="container">
        <div class="row">
           <div class="col-lg-4">
               <div class="info-item">
                <div  class="icon icon1">
                    <i  class="fa fa-phone">  
                    </i>
                </div>
                    <h4 class="margin-top">
                    Phone Number
                    </h4>
                    <br>
                    <p>
                    <a href="">+91 9340821225</a><br>
                    <a href="#">+91 9174203189</a>
                </p>
            </div>
           </div>
           <div class="col-lg-4">
               <div class="info-item">
                <div  class="icon icon1">
                    <i  class="fa fa-envelope">  
                    </i>
                </div>
                    <h4 class="margin-top">
                    Email Address
                    </h4>
                    <br>
                    <p>
                    <a href="mailto:heyfoodbuddy@gmail.com">heyfoodbuddy@gmail.com</a><br>
                    <a href="mailto:parasharjirohit@gmail.com">parasharjirohit@gmail.com</a>
                </p>
            </div>
           </div> 
           <div class="col-lg-4">
                <div class="info-item">
                <div  class="icon icon1">
                    <i  class="fa fa-map-marker">  
                    </i>
                </div>
                    <h4 class="margin-top">
                    Street Address
                    </h4>
                    <br>
                    <p>
                    <a href="">432-C </a><br>
                    <a href="#">shinde ki chhawani,Gwalior</a><br>
                </p>
            </div>
           </div>
       </div>
    </div>
</section>
@endsection