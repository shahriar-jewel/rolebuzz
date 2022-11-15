@extends('frontend.layouts.master')
@section('content')
<section class="bg-light mt-3">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-12 mb-5">
                <h2 class="fw-normal wow fadeInLeft" >Facility and Capability of the Learning Center</h2>
                <hr size="5" width="150" />

            </div>
            <div class="col-md-4 col-sm-6  col-xs-12 margin">
                <img src="{{ asset('frontend/images/feature-1.png') }}" alt="features" width="100%">
                <p class="fw-normal mt-4 wow fadeInLeft">Immersive learning experience, two spacious classrooms, a multimedia lab, exclusive bays with training aids</p>
            </div>

            <div class="col-md-4 col-sm-6  col-xs-12 margin">
                <img src="{{ asset('frontend/images/feature-2.png') }}" alt="features" width="100%">
                <p class="fw-normal mt-4 wow fadeInLeft">On-site training solutions to its customers</p>
            </div>

            <div class="col-md-4 col-sm-6  col-xs-12 margin">
                <img src="{{ asset('frontend/images/feature-3.png') }}" alt="features" width="100%">
                <p class="fw-normal mt-4 wow fadeInLeft">Trainers with more than 10 years of industry experience with knowledge on latest learning tools, applications, and technologies</p>
            </div>
        </div>
    </div>

</section>

<section class="">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-12 wow fadeIn">
                <h2 class="fw-normal">Additional Features</h2>
                <hr size="5" width="150" />
                <div class="row mt-5">
                    <div class="col-md-6 col-12 mb-md-0 mb-5 text-center wow fadeInUp">
                        <img src="{{ asset('frontend/images/softSkillPyramidChart.png') }}" alt="" >
                    </div>
                    <div class="col-md-6 col-12 mb-md-0 text-center wow fadeInUp">
                        <img src="{{ asset('frontend/images/techSkillPyramidChart.png') }}" alt="" >
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection