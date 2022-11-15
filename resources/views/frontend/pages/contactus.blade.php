@extends('frontend.layouts.master')
@section('extra_css')
<style type="text/css">
    
    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        /* background-color: rgba(30, 32, 32, 0.472);*/
        background-color: #003E6B;
        opacity: 0.7;
        overflow: hidden;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transition: all 0.4s ease-in-out;
    }

    .btn-theme{
        background-color: #004497;
    }


    .img_iso:hover .overlay {
        transform: scale(1);
    }

    .text {

        /* color: white;*/
        font-size: 1rem;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }
    .img_iso{
        margin-bottom: 30px;
        cursor: pointer;
    }

    .contact, .contact:hover, .contact:focus, .contact:active {
        background: transparent;
        border: 0;
        border-style: none;
        border-color: transparent;
        outline: none;
        outline-offset: 0;
        box-shadow: none;
    }

    input[type=date]:focus::-webkit-datetime-edit {
        color: #757575 !important;
    }

    .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
        border-bottom: 1px dotted #707070 !important;
        border-top: 0 !important;
        border-left: 0 !important;
        border-right: 0 !important;
        background-color: transparent;
        margin: 15px;
        padding: 0.375rem 0 !important;
        color: #000 !important;
        border-radius: 0;
        width: 41%;
    }

    @media (min-width: 387px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 42%;
        }
    }

    @media (min-width: 427px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 43%;
        }
    }

    @media (min-width: 576px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 44%;
        }
    }

    @media (min-width: 768px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 45%;
        }
    }

    @media (min-width: 992px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 46%;
        }
    }

    @media (min-width: 1200px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 47%;
        }
    }

    @media (min-width: 1400px){
        .form-control-reg, .form-control-reg:hover, .form-control-reg:focus, .form-control-reg:active {
            width: 48%;
        }
    }
    

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    
    input[type=number] {
        -moz-appearance: textfield;
    }


</style>
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-12 mb-5">
                <h2 class="fw-normal wow fadeInLeft" >Contact Us</h2>
                <hr size="5" width="100">
            </div>
            <div class="col-sm-8 p-2">
                <div class="mb-3 pe-5">
                    <input class="contact" type="text" placeholder="Full Name" style="width: 100%;">
                    <hr class="mt-1 mb-5" style="background-color: transparent; border-top: 1px dotted">
                </div>
                <div class="mb-3 pe-5">
                    <input class="contact" type="text" placeholder="Email" style="width: 100%;">
                    <hr class="mt-1 mb-5" style="background-color: transparent; border-top: 1px dotted">
                </div>
                <div class="mb-3 pe-5">
                    <input class="contact" type="text" placeholder="Message" style="width: 100%;">
                    <hr class="mt-1 mb-5" style="background-color: transparent; border-top: 1px dotted">
                </div>
                <div class="mb-3 pe-5 text-sm-end">
                    <button class="btn btn-theme text-white px-5">Send</button>
                </div>

            </div>
            <div class="col-sm-4 p-2">
                <!--<p class="fw-normal text-secondary mb-3">Contact-->
                    <!--    <span class="d-block"><a href="mailto:hi@bfoundation.com" class="text-decoration-none text-secondary">hi@bfoundation.com</a></span>-->
                    <!--</p>-->

                    <p class="fw-normal text-secondary">Phone : +8802-55041951-7</p>
                    <p class="fw-normal text-secondary">Fax : +8802-55041997</p>
                </div>
            </div>


            <div class="row justify-content-center py-5">
                <div class="col-md-12 mb-5">
                    <h2 class="fw-normal wow fadeInLeft" >Workforce Readiness Program Registration Form</h2>
                    <hr size="5" width="100">
                </div>
                <div class="col-md-12 bg-light p-5">
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="Name" class="contact form-control-reg">
                            <input type="text" placeholder="" class="contact form-control-reg">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="Father's Name" class="contact form-control-reg">
                            <input type="text" placeholder="" class="contact form-control-reg">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="Mother's Name" class="contact form-control-reg">
                            <input type="text" placeholder="" class="contact form-control-reg">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="tel" pattern="[0-9]{11}" placeholder="Mobile Number" class="contact form-control-reg">
                            <input type="tel" pattern="[0-9]{11}" placeholder="Father's Mobile Number" class="contact form-control-reg">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="Date of Birth" class="contact form-control-reg" onfocus="this.type='date'" onblur="this.type='text'">
                            <input type="text" placeholder="Religion" class="contact form-control-reg">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="Present Address" class="contact form-control-reg">
                            <!-- <input type="text" placeholder="Message" class="contact form-control"-reg> -->
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="Permanent Address" class="contact form-control-reg">
                            <!-- <input type="text" placeholder="Message" class="contact form-control"-reg> -->
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2">
                            <input type="text" placeholder="District" class="contact form-control-reg">
                            <input type="number" placeholder="NID No" class="contact form-control-reg">
                        </div>
                    </div>
                    <div>
                        <div class="input-group mb-3 px-2 w-50">
                            <input type="number" placeholder="Birth Registration Number" class="contact form-control-reg">
                            <!-- <input type="text" placeholder="Message" class="contact form-control"-reg> -->
                        </div>
                    </div>

                    <div class="mb-3 pe-5 text-end">
                        <button class="btn btn-theme text-white px-5">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection