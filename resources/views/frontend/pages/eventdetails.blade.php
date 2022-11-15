@extends('frontend.layouts.master')
@section('content')
<section>
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-md-12 mb-5">
                <h2 class="fw-normal wow fadeInUp">Event Highlights</h2>
                <hr size="5" width="150" />
                <h5 class="wow fadeInRight">Operations & Maintenance of Heavy Equipment </h5>
                <p class="wow fadeInRight">Bangla Trac Foundation is privileged to start its first batch on “Operations & Maintenance of Heavy Equipment's” for the year 2022.  </p>

                <p class="wow fadeInRight" style="text-align: justify;">The objective of this program is to empower unprivileged group from rural areas, so that they can find a gainful employment either as self- or as wage-employed and pull themselves and contribute their families out of poverty. This session will be directly beneficiary to all its attendees for their professional development on operation and Maintenance of Heavy Equipment, which will add more value to their professional career. Moreover, better training and education would refine their skills, which lead to a higher income and better living standard. </p>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-12 p-2">
                <img src="{{ asset('frontend/images/img1.jpeg') }}" alt="image" width="100%" height="100%">
            </div>
            <div class="col-md-4 col-12">
                <div class="row">
                    <div class="col-12 p-2">
                        <img src="{{ asset('frontend/images/img2.jpg') }}" alt="image" width="100%" height="100%">
                    </div>
                    <div class="col-12 p-2">
                        <img src="{{ asset('frontend/images/img3.jpg') }}" alt="image" width="100%" height="100%">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 p-2">
                <img src="{{ asset('frontend/images/img4.jpg') }}" alt="image" width="100%" height="100%">
            </div>
            <div class="col-md-4 col-12 p-2">
                <img src="{{ asset('frontend/images/img5.jpeg') }}" alt="image" width="100%" height="100%">
            </div>
            <div class="col-md-4 col-12 p-2">
                <img src="{{ asset('frontend/images/img6.jpg') }}" alt="image" width="100%" height="100%">
            </div>
        </div>
    </div>

</section>
@endsection