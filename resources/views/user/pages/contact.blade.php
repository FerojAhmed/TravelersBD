@extends('user.layouts.app')

@section('main-content')
<!-- INNER-BANNER -->
<div class="inner-banner style-6">
	<img class="center-image" src="{{ asset('user/img/detail/bg_3.jpg') }}" alt="">
	<div class="vertical-align">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<ul class="banner-breadcrumb color-white clearfix">
						<li><a class="link-blue-2" href="/">home</a> /</li>
						<li><a class="link-blue-2" href="{{ route('contact.home') }}">Contact</a> /</li>
						<li><span>Contact page</span></li>
					</ul>
					<h2 class="color-white">Contact us</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="detail-wrapper">
<div class="main-wraper padd-40">
	<div class="container">
		@include('includes.errors')
		<div class="row">			
			<div class="col-xs-12 col-sm-8">				
				<form novalidate class="contact-form" action="{{ route('contact.store') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
								<input type="text" name="name" required="" placeholder="Enter your name">
							</div>
						</div>
						<div class="col-xs-12 col-sm-6">
							<div class="input-style-1 type-2 color-2">
								<input type="email" name="email" required="" placeholder="Enter your email">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12">
							<div class="input-style-1 type-2 color-2">
								<input type="text" name="tour_title" required="" placeholder="Enter your Tour title (Optional)">
							</div>
						</div>
						<div class="col-xs-12">
							<textarea class="area-style-1 color-1" name="message" required="" placeholder="Enter your comment"></textarea>
							<input type="submit" class="btn btn-sm btn-primary" value="Send Message" />
						</div>
					</div>					
				</form>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="contact-about">
					<h4 class="color-dark-2"><strong>contact info</strong></h4>
					<p class="color-grey-3">for details contact with us</p>					
				</div>
				<div class="contact-info">
					<h4 class="color-dark-2"><strong>contact info</strong></h4>
					<div class="contact-line color-grey-3"><img src="img/phone_icon_2_dark.png" alt="">Phone: <a class="color-dark-2" href="tel:93123456789">01521468423</a></div>					
					<div class="contact-line color-grey-3"><img src="img/mail_icon_b_dark.png" alt="">Email us: <a class="color-dark-2 tt" href="#">travelersbd01@gmail.com</a></div>					
					<div class="contact-line color-grey-3"><img src="img/loc_icon_dark.png" alt="">Address: <span class="color-dark-2 tt">mohammadpur,dhaka</span></div>
				</div>
				<div class="contact-socail">
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-facebook"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-twitter"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-skype"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-instagram"></i></a>
					<a class="color-grey-3 link-dr-blue-2" href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>			
		</div>
	</div>
</div>
</div>




@endsection