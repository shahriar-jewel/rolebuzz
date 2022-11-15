<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" style="padding: 10px 0;" href="{{ url('/') }}">
			<img src="{{ asset('frontend/images/logo.png') }}" alt="Logo" width="153px">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
				<li class="nav-item mx-xl-4 mx-2">
					<a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
				</li>
				<li class="nav-item mx-xl-4 mx-2">
					<a class="nav-link" href="{{ url('event-highlight') }}">Event Highlights</a>
				</li>
				<li class="nav-item mx-xl-4 mx-2">
					<a class="nav-link" href="{{ url('learning-center') }}">Learning Center</a>
				</li>
				<li class="nav-item mx-xl-4 mx-2">
					<a class="nav-link" href="{{ url('contact-us') }}" tabindex="-1" aria-disabled="true">Contact Us</a>
				</li>
			</ul>
			<form class="d-flex search">
				<img src="{{ asset('frontend/images/Group26.svg') }}" class="px-3 d-block">
				<input class="form-control rounded-pill" type="search" placeholder=""  aria-label="Search">
				<!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
			</form>
		</div>
	</div>
</nav>