<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
	    <meta name="author" content="">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/jquery.funnyText.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/animate.css') }}">

		<!-- Important Owl stylesheet -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
 
		<!-- Default Theme -->
		<link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.css') }}">

		<title>BTrac Foundation</title>

    	<style type="text/css">
			
    		/* .overlay {
    			position: absolute;
    			bottom: 0;
    			left: 0;
    			right: 0;
    			background-color: rgba(30, 32, 32, 0.472);
    			background-color: #003E6B;
    			opacity: 0.7;
    			overflow: hidden;
    			width: 100%;
    			height: 100%;
    			transform: scale(0);
    			transition: all 0.4s ease-in-out;
    		}


    		.img_iso:hover .overlay {
    			transform: scale(1);
    		} */

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
    		
    		/* .img_iso{
    			margin-bottom: 30px;
    			cursor: pointer;
    		} */
    	</style>
    	@yield('extra_css')

	</head>

	<body>
		<!-- navbar start -->
		@include('frontend.include.header')
		<!-- navbar end -->

		@yield('content')

		<!-- Footer Section Start -->
		@include('frontend.include.footer')
		<!-- Footer Section End -->


		<!-- scripts starts here-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
		<script src="{{ asset('frontend/assets/js/jquery.funnyText.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
		<!--<script src="assets/js/queryloader2.min.js"></script>-->
		<script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
		<!-- scripts end here-->

 		<!-- <script type="text/javascript">
   		window.addEventListener('DOMContentLoaded', function() {
       		new QueryLoader2(document.querySelector("body"), {
             barColor: "#efefef",
             backgroundColor: "#111",
             percentage: true,
             barHeight: 1,
             minimumTime: 200,
             fadeOutTime: 1000
         	});
     	});
 		</script> -->

		 <script>
            new WOW().init();
         </script>

		<script type="text/javascript">
			$(document).ready(function() {
				$("#owl-slider").owlCarousel({
					autoPlay: 3000, //Set AutoPlay to 3 seconds
					items : 1
				});
			});
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
	   			 $('.funnytext1').funnyText({
					speed: 200,
					borderColor: 'none',
					activeColor: 'white',
					color: 'white',
					fontSize: '44px',
					direction: 'both'
	    		});
	   			 $('.funnytext2').funnyText({
					speed: 200,
					borderColor: 'none',
					activeColor: 'white',
					color: 'white',
					fontSize: '44px',
					direction: 'both'
	    		});
	   			 $('.funnytext3').funnyText({
					speed: 200,
					borderColor: 'none',
					activeColor: 'white',
					color: 'white',
					fontSize: '44px',
					direction: 'both'
	    		});
	   			 $('.funnytext4').funnyText({
					speed: 200,
					borderColor: 'none',
					activeColor: 'white',
					color: 'white',
					fontSize: '44px',
					direction: 'both'
	    		});
	   			 $('.funnytext5').funnyText({
					speed: 200,
					borderColor: 'none',
					activeColor: 'white',
					color: 'white',
					fontSize: '44px',
					direction: 'both'
	    		});
	   			 $('.funnytext6').funnyText({
					speed: 200,
					borderColor: 'none',
					activeColor: 'white',
					color: 'white',
					fontSize: '44px',
					direction: 'both'
	    		});
			});

		</script>
		@yield('extra_js')

		<!-- <script type="text/javascript">
			$('.img1').on('click',function(){
		      var pic1 = document.querySelector('.img1 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic1.getAttribute('src'));
            })

            $('.img2').on('click',function(){
		      var pic2 = document.querySelector('.img2 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic2.getAttribute('src'));
            })

            $('.img3').on('click',function(){
		      var pic3 = document.querySelector('.img3 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic3.getAttribute('src'));
            })

            $('.img4').on('click',function(){
		      var pic4 = document.querySelector('.img4 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic4.getAttribute('src'));
            })

            $('.img5').on('click',function(){
		      var pic5 = document.querySelector('.img5 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic5.getAttribute('src'));
            })

            $('.img6').on('click',function(){
		      var pic6 = document.querySelector('.img6 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic6.getAttribute('src'));
            })

            $('.img7').on('click',function(){
		      var pic7 = document.querySelector('.img7 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic7.getAttribute('src'));
            })

            $('.img8').on('click',function(){
		      var pic8 = document.querySelector('.img8 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic8.getAttribute('src'));
            })

            $('.img9').on('click',function(){
		      var pic9 = document.querySelector('.img9 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic9.getAttribute('src'));
            })

            $('.img10').on('click',function(){
		      var pic10 = document.querySelector('.img10 img');
		      var modal_image = document.querySelector('.modal_img');
		      modal_image.setAttribute('src','');
		      modal_image.setAttribute('src',pic10.getAttribute('src'));
            })
		</script> -->

	</body>
</html>
