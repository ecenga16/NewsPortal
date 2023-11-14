@extends('frontend.home_dashboard')
@section('home') 

<div class="contact-page">
<div class="container">


<div class="row">
	<div class="col-md-4">

		<div class="row">
<div class="col-lg-12 col-md-12">
<div class="contact-wrpp">
 

 <figure class="authorPage-image">
 <img src="{{(!empty($userData->photo)) ? url('upload/admin_images/'.$userData->photo): url('upload/no-image.jpg')}}" class="rounded-circle avatar-lg img-thumbnail" id="image" alt="profile-image">
<h1 class="authorPage-name">
 {{$userData['name']}}
</h1>
<h6 class="authorPage-name">
  {{$userData['email']}} 
</h6>
  
 

<ul>
 <li><a href="{{route('user.dashboard')}}"><b>🟢 Your Profile </b></a> </li>
 <li> <a href="{{route('user.change.password')}}"> <b>🔵 Change Password </b> </a> </li> 
<li> <a href=""> <b>🟠 Read Later List </b> </a> </li> 
<li> <a href="{{route('user.logout')}}"> <b>🟠 Log out </b> </a> </li> 

</ul>

</div>
</div>
</div>

		
	</div>

	<div class="col-md-8">


		<div class="row">
<div class="col-lg-12 col-md-12">
<div class="contact-wrpp">
<h4 class="contactAddess-title text-center">
User Account </h4>
<div role="form" class="wpcf7" id="wpcf7-f437-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="{{route('user.profile.store')}}" method="post" class="wpcf7-form init" enctype="multipart/form-data" novalidate="novalidate" data-status="init">
@csrf
<div style="display: none;">
 
</div>

<div class="main_section">
<div class="row">
 

<div class="col-md-12 col-sm-12">
<div class="contact-title ">
User Name *
</div>
<div class="contact-form">
<span class="wpcf7-form-control-wrap sub_title"><input type="text" name="username" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" ></span>
</div>
</div>
 
 
<div class="row">
<div class="col-md-12">
<div class="contact-btn">
<input type="submit" value="Save Changes" class="wpcf7-form-control has-spinner wpcf7-submit"><span class="wpcf7-spinner"></span>
</div>
</div>
</div>
</div>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div>
</div>
</div>
</div>



		
	</div>
	
</div> <!--  // end row -->

 


</div>
</div>
 
</div>
<script src="assets/regenerator-runtime.min.js" id="regenerator-runtime-js"></script>
<script src="assets/wp-polyfill.min.js" id="wp-polyfill-js"></script>

 
<script src="assets/js/index.js" id="contact-form-7-js"></script>
<script src="assets/js/jquery-3.5.1.min.js" id="newsflash-jquery-js"></script>
<script src="assets/js/bootstrap.min.js" id="newsflash-bootstrap-js"></script>
<script src="assets/js/bootstrap.bundle.min.js" id="newsflash-bootstrapbundle-js"></script>
<script src="assets/js/stellarnav.min.js" id="newsflash-stellarnav-js"></script>
<script src="assets/js/owl.carousel.min.js" id="newsflash-carousel-js"></script>
<script src="assets/js/jquery.magnific-popup.min.js" id="newsflash-magnific-js"></script>
<script src="assets/js/jquery-ui.js" id="newsflash-jqueryui-js"></script>
<script src="assets/js/lazyload.min.js" id="newsflash-lazyload-js"></script>
<script src="assets/js/main.js" id="newsflash-main-js"></script>

<script src="https://kit.fontawesome.com/97ff43f8ef.js" crossorigin="anonymous"></script>

 </body> </html>

 @endsection