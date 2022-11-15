@extends('frontend.layouts.master')
@section('content')
<section>
            <div class="container py-5">
                <div class="row py-5">
                    <div class="col-md-12 mb-5">
                        <h2 class="fw-normal wow fadeInUp">Event Highlights</h2>
                        <hr size="5" width="150" />
                    </div>

    
                    <div class="col-md-4 col-sm-6  col-xs-12 my-3">
                        <a href="{{ url('event-details') }}" class="text-decoration-none text-white">
                            <div class="border border-events p-2">
                                <img src="{{ asset('frontend/images/img1.jpeg') }}" alt="features" width="100%">
                            </div>
                            <div class="px-3 py-1" style="background-color: #9A9A9A;">
                                <p class="mb-0">Operations & Maintenance of Heavy Equipment</p>
                            </div>
                        </a>
                    </div>
    
                    <!--<div class="col-md-4 col-sm-6  col-xs-12 my-3 wow fadeIn">-->
                    <!--    <a href="./singleEvents.html" class="text-decoration-none text-white">-->
                    <!--        <div class="border border-events p-2">-->
                    <!--            <img src="../images/img2.jpg" alt="features" width="100%">-->
                    <!--        </div>-->
                    <!--        <div class="px-3 py-1" style="background-color: #9A9A9A;">-->
                    <!--            <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</div>  -->

    
                    <!--<div class="col-md-4 col-sm-6  col-xs-12 my-3 wow fadeIn">-->
                    <!--    <a href="./singleEvents.html" class="text-decoration-none text-white">-->
                    <!--        <div class="border border-events p-2">-->
                    <!--            <img src="../images/img3.jpg" alt="features" width="100%">-->
                    <!--        </div>-->
                    <!--        <div class="px-3 py-1" style="background-color: #9A9A9A;">-->
                    <!--            <p class="mb-0">Lorem ipsum dolor sit amet consectetur.</p>-->
                    <!--        </div>-->
                    <!--    </a>-->
                    <!--</div>-->
                    
                </div>
            </div>

        </section>
@endsection