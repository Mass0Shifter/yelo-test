<div class="row footer">
<div class="container">

<div class="pull-left">
<p>&copy; 2020 - <a href="{{Setting::get('copyrights_url') ? Setting::get('copyrights_url') : url('/')}}">{{Setting::get('site_name' , 'StreamHash')}} </a></p>

</div>

<!-- footer area -->
<div class="container-fluid footer-area d-flex justify-content-center align-items-center">

    <div class="container d-flex justify-content-between text-secondary">

      <div class="footer-section-one d-flex flex-column">
        <a href="#"><p>FAQ</p></a>
        <a href="yelofim.com/corporate-page.html"><p>Investor Relations</p></a>
        <a href="#"><p>Privacy</p></a>
        <a href="#"><p>Speed Test</p></a>
      </div>

      <div class="footer-section-two d-flex flex-column">
        <a href="#"><p>Help Center</p></a>
        <a href="#"><p>Jobs</p></a>
        <a href="#"><p>Cookie</p></a>
        <a href="#"><p>Legal Notices</p></a>
      </div>

      <div class="footer-section-three d-flex flex-column">
        <a href="watch.yelofim.com/profile"><p>Account</p></a>
        <a href="#"><p>Ways to Watch</p></a>
        <a href="yelofim.com/corporate-page.html"><p>Corporate Information</p></a>
        <a href="yelofim.com/about.html"><p>About Us</p></a>
      </div>

      <div class="footer-section-four d-flex flex-column">
        <a href="#"><p>Media Center</p></a>
        <a href="#"><p>Terms of Use</p></a>
        <a href="yelofim.com/contact.html"><p>Contact Us</p></a>
        <a href="#"><p>Our Team</p></a>
      </div>

    </div>

  </div>
  <!-- footer area ends here -->

{{-- <div class="pull-right">
<?php//$pages = pages();?>

@if(count($pages) > 0)
<ul>

	@foreach($pages as $page)
	<li><a href="{{route('page', $page->type)}}">{{$page->heading}}</a></li>&nbsp;|&nbsp; 
	@endforeach
</ul>
@endif

</div> --}}

<div class="clearfix"></div>
</div>
</div>