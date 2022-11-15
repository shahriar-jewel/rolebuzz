@extends('frontend.layouts.master')
@section('content')
<header class="head align-items-center"> <!-- Head Section Start-->
	<div class="container">
		<div class="row align-items-center h-100vh">
			<div class="col-12 main-content wow fadeInLeft">
				<h1 class="funnytext1 my-0 text-uppercase">YOUTH WORKFORCE</h1> 
				<h1 class="funnytext2 my-0 text-uppercase">READINESS PROGRAM</h1>
			</div>
		</div><!-- Row End -->
	</div><!-- Container End -->
</header><!-- Head Section End -->


<section>
	<div class="container">
		<div class="row py-5">
			<div class="col py-5">
				<h1 class="fw-normal mb-4 wow fadeInUp">Opening the Door to the Future</h1>
				<p class="wow fadeInRight">Skill development and vocational education must be aligned to ensure better employment opportunities for the Bangladeshi unprivileged community in both local and overseas job markets. </p>
				<p class="wow fadeInRight">In Bangladesh, the lack of relevant skills of underprivileged youth, and the mismatch between demand and supply in job market lead to very poor employability with lower wages. </p>
				<p class="wow fadeInRight">Education, training and skill development programs are pivotal for underprivileged youth to build an improved life. Education and training are key to ensure sustainable economic and social development. Investment on skill development and employability of workers contribute to the improvement in productivity ,competitiveness and employment ratio.</p>
				<p class="wow fadeInRight">Bangla Trac Foundation is proud to be part of noble initiative by nurturing and enhancing the technical skills of underprivileged youth, to help them play a major role in the socio-economic development of the country.</p>
			</div>
		</div>
	</div>
</section>



<section class="services"><!-- Head Section Start -->
	<div class="container">
		<div class="row d-flex justify-content-md-between justify-content-around">
			<div class="col-md-2 col-sm-4 services-list">
				<div class="d-flex bg-white justify-content-center align-items-center mx-auto" style="width: 127px; height: 127px; border-radius: 127px;"><img src="{{ asset('frontend/images/service-icon-1.png') }}" alt="icon" width="50%" height="50%"></div>
				<h1></h1>
				<p class=" px-5 px-sm-0 mt-4 wow fadeInUp" style="font-size: 15px;">To nurture understanding of  features pertaining to mechanical and electrical field, and operational safety of heavy construction machines and equipment.</p>
			</div>

			<div class="col-md-2 col-sm-4 services-list">
				<div class="d-flex bg-white justify-content-center align-items-center mx-auto" style="width: 127px; height: 127px; border-radius: 127px;"><img src="{{ asset('frontend/images/service-icon-2.png') }}" alt="icon" width="50%" height="50%"></div>
				<h1></h1>
				<p class=" px-5 px-sm-0 mt-4 wow fadeInUp" style="font-size: 15px;">To learn the best practices to operate machines under various working conditions.</p>
			</div>

			<div class="col-md-2 col-sm-4 services-list">
				<div class="d-flex bg-white justify-content-center align-items-center mx-auto" style="width: 127px; height: 127px; border-radius: 127px;"><img src="{{ asset('frontend/images/service-icon-3.png') }}" alt="icon" width="50%" height="50%"></div>
				<h1></h1>
				<p class=" px-5 px-sm-0 mt-4 wow fadeInUp" style="font-size: 15px;">To maintain machines in a professional manner- Pre and Post Operations. </p>
			</div>

			<div class="col-md-2 col-sm-4 services-list">
				<div class="d-flex bg-white justify-content-center align-items-center mx-auto" style="width: 127px; height: 127px; border-radius: 127px;"><img src="{{ asset('frontend/images/service-icon-4.png') }}" alt="icon" width="50%" height="50%"></div>
				<h1></h1>
				<p class=" px-5 px-sm-0 mt-4 wow fadeInUp" style="font-size: 15px;">Hands on training for real life experience. </p>
			</div>

			<div class="col-md-2 col-sm-4 services-list">
				<div class="d-flex bg-white justify-content-center align-items-center mx-auto" style="width: 127px; height: 127px; border-radius: 127px;"><img src="{{ asset('frontend/images/service-icon-5.png') }}" alt="icon" width="50%" height="50%"></div>
				<h1></h1>
				<p class=" px-5 px-sm-0 mt-4 wow fadeInUp" style="font-size: 15px;">Educating guideline of operations and maintenance during hand on training. </p>
			</div>

		</div><!-- Row End -->
	</div><!-- Container End -->
</section><!-- Services Section End -->
@endsection