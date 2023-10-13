@include('header')

<link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">

<style type="text/css">
	.df{
		position: absolute;
    top: 0px;
/*    left: calc(50% - 720px);
filter: brightness(80%);*/
    width: 100%;
    height: 100%;
    object-fit: cover;
	}.rg{position: relative;
    background-color: #fff;
    width: 100%;
    height: 300px;
    overflow: hidden;
    text-align: left;
    font-size: 16px;
    color: #000;
    font-family: Inter;
  }.rock{position: absolute;
    top: 19px;
    left: 617px;
    width: 595px;
    height: 80px;
    font-size: 14px;
  }.home a, .about-us a, .gallery a, .obligation a, .contact a{
    color: black;
    text-decoration: none;
    font-weight: bold;
    font-size: 15px;
}.pika {
    position: absolute;
    top: 18px;
    left: 599px;
    background: linear-gradient(180deg, #f8f9fa, rgba(0, 0, 0, 0.15) 0.01%, rgba(0, 0, 0, 0));
    width: 410px;
    height: 80px;
  }.kn{
  	text-align: center;
    position: relative;
    z-index: 1;
    top: -65px;
    color: white;
    font-size: 15px;
  }.kn a {text-decoration: none;color: white;}
.mobile-menu {
    display: none;
  }
  /* Mobile Styles */
  @media only screen and (max-width: 768px) {
    .rock,
    .pika {
      display: none;
    }

    .mobile-menu-button {
      display: block;
      position: absolute;
      top: 18px;
      right: 18px;
      cursor: pointer;
      color: white;
      font-size: 24px;
    }

    .mobile-menu {
      display: none;
      position: absolute;
      top: 60px;
      right: 0;
      background-color: #333;
      width: 100%;
      text-align: center;
    }

    .mobile-menu a {
      display: block;
      padding: 15px;
      color: white;
      text-decoration: none;
    }

    .mobile-menu.active {
      display: block;
    }
  }
</style>

<div class="rg">
	<img class="df" alt="" src="{{url('public/img/sp2.jpg')}}">
<div class="mobile-menu-button">&#9776;</div>
	<div class="pika"></div>
	<div class="rock">
		<div class="group-child">
		</div>
		<div class="contact"><a href="{{url('contact')}}">To Unite empery</a></div>
		<div class="home"><a href="{{url('/')}}">Home</a></div>
		<div class="about-us"><a href="{{url('about')}}">About us</a></div>
		<div class="gallery"><a href="{{url('gallery')}}">Gallery</a></div>
		<div class="obligation"><a href="{{url('obligation')}}">Obligation</a></div>
	</div>
</div>
<h4 class="kn"><a href="{{url('/')}}">Home &nbsp;›&nbsp;</a>Gallery</h4>

<div class="mobile-menu">
  <a href="{{url('/')}}">Home</a>
  <a href="{{url('about')}}">About us</a>
  <a href="{{url('gallery')}}">Gallery</a>
  <a href="{{url('obligation')}}">Obligation</a>
  <a href="{{url('contact')}}">To Unite empery</a>
</div>

<script>
  // JavaScript to toggle the mobile menu
  const mobileMenuButton = document.querySelector('.mobile-menu-button');
  const mobileMenu = document.querySelector('.mobile-menu');

  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".mobile-menu-button").on('click', function() {
      if ($(".mobile-menu").is(":visible")) {
        $(".kn").hide();
      } else {
        $(".kn").show();
      }
    });
  });
</script>
<style type="text/css">
	.gapi{
    width: 100%;
    height: 100%;
    object-fit: contain;
	}.gapid{
    width: 100%;
    height: 100%;
    object-fit: cover;
	}.capi{
		width: 250px;
		height: 300px;
		padding: 20px;
		box-shadow: 5px 5px 20px 10px;

	}.le h2{
		font-family: 'Alex Brush', cursive;
		font-weight: bold;
	}.gac{
		display: flex;
    justify-content: center;
	}
</style>
<section>
	<div class="container le">
		<h2>Gallery</h2>
		<div class="row">
			@foreach($gal as $g)
			<div class="col-md-3 gac">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/upload/' . $g->image)}}"></div>
			</div>
			@endforeach
			<!-- <div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div>
			<div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div>
			<div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div>

			<div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div>
			<div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div>
			<div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div>
			<div class="col-md-3">
				<div class="card capi"><img class="gapi" alt="" src="{{url('public/img/sp2.jpg')}}"></div>
			</div> -->

		</div>
	</div>
</section>


<style type="text/css">
	.vi h2, h3{
		font-family: 'Alex Brush', cursive;
		font-weight: bold;
		text-align: center;
	}.vi h2{
		margin: 50px 0 20px 0;
	}.vipd{
		width: 350px;
		height: 250px;
	}
	@media only screen and (min-width:320px) and (max-width:560px){
		.col-md-4, .col-md-3{
			padding: 9px 0 !important;
		}.vipd {
			width: 100%;
		}

		}
</style>
<section>
	<div class="container vi">
		<h2>Video</h2>
		<h3>Get Aware & educate by youself</h3>
		<div class="row">
			@foreach($vid as $v)
			<div class="col-md-4 col-sm-4 col-lg-4">
				<div class="card vipd"><video class="gapid" controls>
					<source src="{{url('public/upload/' . $v->video)}}" type="video/mp4">
						<source src="{{url('public/upload/' . $v->video)}}" type="video/ogg">
					</video>
				</div>
			</div>
			@endforeach
			<!-- <div class="col-md-4 col-sm-4 col-lg-4">
				<div class="card vipd"><video class="gapi" controls>
					<source src="{{url('public/img/vid1.mp4')}}" type="video/mp4">
						<source src="{{url('public/img/vid1.ogg')}}" type="video/ogg">
					</video>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4">
				<div class="card vipd"><video class="gapi" controls>
					<source src="{{url('public/img/vid.mp4')}}" type="video/mp4">
						<source src="{{url('public/img/vid.ogg')}}" type="video/ogg">
					</video>
				</div>
			</div>

			<div class="col-md-4 col-sm-4 col-lg-4">
				<div class="card vipd"><video class="gapi" controls>
					<source src="{{url('public/img/vid.mp4')}}" type="video/mp4">
						<source src="{{url('public/img/vid.ogg')}}" type="video/ogg">
					</video>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4">
				<div class="card vipd"><video class="gapi" controls>
					<source src="{{url('public/img/vid1.mp4')}}" type="video/mp4">
						<source src="{{url('public/img/vid1.ogg')}}" type="video/ogg">
					</video>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-lg-4">
				<div class="card vipd"><video class="gapi" controls>
					<source src="{{url('public/img/vid.mp4')}}" type="video/mp4">
						<source src="{{url('public/img/vid.ogg')}}" type="video/ogg">
					</video>
				</div>
			</div> -->

		</div>
	</div>
</section>


@include('footer')