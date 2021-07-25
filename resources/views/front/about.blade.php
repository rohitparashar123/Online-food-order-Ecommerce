@extends('front/master')
@section('title','FoodBuddy | About Us')
@section('content')
<style type="text/css">
    body{
        font-family: Arial, sans-serif;
    }
    
    .padding{
        padding: 20px;
        margin: 10px;
        border-radius: 15px;
    }
    .text-align{
        text-align: justify;
    }
    img.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
    }
    img.vert-move {
        -webkit-animation: mover 1s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-10px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-10px); }
    }

</style>
<!-- product tab start -->
<section class="about-section pt-80 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-30">
                <div class="about-content">
                    <h2 class="title mb-20">Welcome To FoodBuddy</h2>
                    <p class="mb-20 text-align">
                       Starting of foodbuddy is quite instresting , Food has grown from a home project to one of the largest food aggregators in the world. We are present in 24 countries and 10000+ cities globally, enabling our vision of better food for more people. We not only connect people to food in every context but work closely with restaurants to enable a sustainable ecosystem.
                    </p>
                    <p class="text-align">
                      As we all know that food is the necessary thing in the world,and at this COVID-19 time people fear to order online food so we are starting drone food delivery system which is far more good than a delivery boy system. We are more careful for your safety and health.It will be a good thing to be done like drone technology for food delivery,So come and visit my website "FoodBuddy" Providing the best food.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mb-30">
                <div class="about-left-image mb-30">
                    <img src="https://source.unsplash.com/765x455/daily?office-team" alt="img" class="img-responsive vert-move">
                </div>
            </div>
        </div>
        <div class="row padding" style="box-shadow: 0px 0px 25px rgb(0 0 0 / 10%);">
            <div class="col-md-4 mb-30" >
                <div class="about-info">
                    <h4 class="title mb-20">Acceptance</h4>
                    <p class="text-align">
                       Feedback is never taken personally, we break it into positive pieces and strive to work on each and every element even more effectively.
                       It’s not our abilities that show who we truly are - it’s our choices. We aim to get these right, at least in the majority of the cases.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-30" >
                <div class="about-info">
                    <h4 class="title mb-20">Humility</h4>
                    <p class="text-align">
                       It’s always ‘us’ over ‘me’. We don’t lose ourselves in pride or confidence during individual successes, but focus on being our simple selves in every which way.
                       We believe in, stand for and are evangelists of our culture - both, within FoodBuddy and externally with all our stakeholders.
                    </p>
                </div>
            </div>
            <div class="col-md-4 mb-30 " >
                <div class="about-info">
                    <h4 class="title mb-20">Ownership</h4>
                    <p class="text-align">
                        People here don’t work ‘for’ FoodBuddy, they work ‘with’ FoodBuddy. We treat every problem as our own, take accountability and drive the change.
                        We push ourselves beyond our abilities when faced with tough times. When we foresee uncertainty, we address it only with flexibility.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection