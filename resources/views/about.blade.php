@include('header')

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
	<img class="df" alt="" src="{{url('public/img/agri1.jpg')}}">

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
<h4 class="kn"><a href="{{url('/')}}">Home &nbsp;›&nbsp;</a>Know Us</h4>

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
<link href="https://fonts.googleapis.com/css2?family=Nova+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<style type="text/css">
	.plk h1{
		color: black !important;
		font-family: Nova Script,cursive;
		margin: 50px 0;
		font-size: 45px;
	}.plk p{
		color: black !important;
		font-size: 25px;
		word-spacing: 5px;
		line-height: 40px;
		font-weight: 700;
		font-family: Satisfy,cursive;
	}
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 plk">
				<h1>About Us</h1>
				<p>We have created a huge socio-economic plan called “The hyper way project” to resolve all the problems prevailing in the country and to transform India into rich and the world super power.<br><br>
					• A detailed 5 years strategy that rapidly expands the country’s economy by meeting 
					the natural issues of every citizen; thus making The Republic of India, a rich and 
					superpower nation.<br>
					• An inconceivable schedule that transforms all hard working and poverty-stricken to one by one.<br>
					• The great plan that notonlymakeschangesin thestructuralmap of India, but worldwide. <br>
				• The most important and special feature is that this project will earn the government crores of rupees without any single expenditure met.</p>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.back{
		background-image: url("{{url('public/img/gro1.jpg')}}");
		background-attachment: fixed;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		margin: 50px 0;
	}.abca{
		width: 100%;
		height: 100%;
		padding: 50px;
		box-shadow: 5px 5px 30px;
		font-family: 'Black Ops One', cursive;
	}.tg{
		padding: 50px;
	}
</style>
<section class="back">
	<div class="container">
		<div class="row">
			<div class="col-md-6 tg">
				<div class="card abca">
					<img alt="" src="{{url('public/img/ab.jpg')}}" />
				</div>
			</div>

			<div class="col-md-6 tg">
				<div class="card abca">
					All types of pollution will be controlled to the maximum extent and hence a clean and a healthy nation will be developed.
					Apart from providing oxygen for the planet and beauty when they bloom or turn color, trees are very useful. Certain species of hardwood and softwood trees are excellent for timber, making furniture, and paper.
				</div>
			</div>

		</div>
	</div>
</section>
<style type="text/css">
	.whch h1{
		color: black !important;
		margin: 50px 0;
		font-family: Nova Script,cursive;
		font-size: 30px;
	}.whch p{
		color: black !important;
		font-size: 20px;
		font-weight: 500;
		line-height: 40px;
	}.icco img{
		width: 80px;
		height: 80px;
		
	}.icco{
		text-align: center;
		padding: 50px;
		font-family: Lobster, cursive;
	}.baco{
		background-color: #dee2e6;
	}
</style>
<section>
	<div class="container">
		<div class="row">
			<div class="whch">
				<h1>Why Choose us ?</h1>
				<p>To ensure that every citizen has access to high-quality digital infrastructure, including affordable and accessible internet connectivity. This includes the expansion of broadband connectivity in rural and remote areas.  To empower every citizen with digital literacy and access to digital resources and tools. This involves promoting digital literacy and digital skills among citizens, especially in rural areas.</p>
			</div>

			<div class="row baco">
				<div class="col-md-4">
					<div class="icco">
						<img src="{{url('public/img/video.gif')}}" alt="" /><br>
						<span>India will have the highest number of Startups and Social Media Networks</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icco">
						<img src="{{url('public/img/space.gif')}}" alt="" /><br>
						<span>Our country will develop the best in Space, Science and Technology amongst the other nations.</span>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icco">
						<img src="{{url('public/img/growth.gif')}}" alt="" /><br>
						<span>Agriculture will become the most important & profitable business all over the country</span>
					</div>
				</div>
			</div>

		</div>
	</div>	
</section>

<style type="text/css">
	/** {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}*/
.body {
	min-height: 100vh;
	display: grid;
	place-items: center;
	margin: 0;
	padding: 0;
/*	background: linear-gradient(to right, #008000, #00e600, #b3ffb3, #00e600, #008000);*/
font-family: 'Martel Sans', sans-serif;
}

h1 {
	font-size: 5.25vmin;
	text-align: center;
	color: white;
}
p {
	font-size: max(10pt, 2.5vmin);
	line-height: 1.4;
	color: #0e390e;
	margin-bottom: 1.5rem;
}

.wrap {
	display: flex;
	flex-wrap: nowrap;
	justify-content: space-between;
	width: 85vmin;
	height: 25em;
	margin: 2rem auto;
	border: 8px solid;
	border-image: linear-gradient(-50deg, green, #00b300, forestgreen, green, lightgreen, #00e600, green) 1;
	transition: .3s ease-in-out;
	position: relative;
	overflow: hidden;
}
.overlay {
	position: relative;
	display: flex;
	width: 100%;
	height: 100%;
	padding: 1rem .75rem;
	background: #186218;
	transition: .4s ease-in-out;
	z-index: 1;
}
.overlay-content {
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	width: 15vmin;
	height: 100%;
	padding: .5rem 0 0 .5rem;
	border: 3px solid;
	border-image: 
	linear-gradient(
		to bottom, 
		#AEA724 5%,
		forestgreen 35% 65%,
		#AEA724 95%
	) 0 0 0 100%;
	transition: .3s ease-in-out .2s;
	z-index: 1;
}
.image-content {
	position: absolute;
	top: 0;
	right: 0;
	width: 60vmin;
	height: 100%;
	background-image: url("https://assets.codepen.io/4787486/trees.png");
	background-size: cover;
	transition: .3s ease-in-out;
	/* border: 1px solid green; */
}

.inset {
	max-width: 50%;
	margin: 0.25em 1em 1em 0;
	border-radius: 0.25em;
	float: left;
}

.dots {
	position: absolute;
	bottom: 1rem;
	right: 2rem;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	align-items: center;
	width: 55px;
	height: 4vmin;
	transition: .3s ease-in-out .3s;
}
.dot {
	width: 14px;
	height: 14px;
	background: yellow;
	border: 1px solid indigo;
	border-radius: 50%;
	transition: .3s ease-in-out .3s;
}

.text {
	position: absolute;
	top: 0;
	right: 0;
	width: 60vmin;
	height: 100%;
	padding: 3vmin 4vmin;
	background: #fff;
	box-shadow: inset 1px 1px 15px 0 rgba(0 0 0 / .4);
	overflow-y: scroll;
}

.wrap:hover .overlay
{
	transform: translateX(-60vmin);
}
.wrap:hover .image-content {
	width: 30vmin;
}
.wrap:hover .overlay-content {
	border: none;
	transition-delay: .2s;
	transform: translateX(60vmin);
}
.wrap:hover .dots {
	transform: translateX(1rem);
}
.wrap:hover .dots .dot {
	background: white;
}


/* Animations and timing delays */
.animate {
	animation-duration: 0.7s;
	animation-timing-function: cubic-bezier(.26, .53, .74, 1.48);
	animation-fill-mode: backwards;
}
/* Pop In */
.pop { animation-name: pop; }
@keyframes pop {
	0% {
		opacity: 0;
		transform: scale(0.5, 0.5);
	}
	100% {
		opacity: 1;
		transform: scale(1, 1);
	}
}

/* Slide In */
.slide { animation-name: slide; }
@keyframes slide {
	0% {
		opacity: 0;
		transform: translate(4em, 0);
	}
	100% {
		opacity: 1;
		transform: translate(0, 0);
	}
}

/* Slide Left */
.slide-left { animation-name: slide-left; }
@keyframes slide-left {
	0% {
		opacity: 0;
		transform: translate(-40px, 0);
	}
	100% {
		opacity: 1;
		transform: translate(0, 0);
	}
}

.slide-up {animation-name: slide-up;}
@keyframes slide-up {
	0% {
		opacity: 0;
		transform: translateY(3em);
	}
	100% {
		opacity: 1;
		transform: translateY(0);
	}
}

.delay-1 {
	animation-delay: 0.3s;
}
.delay-2 {
	animation-delay: 0.6s;
}
.delay-3 {
	animation-delay: 0.9s;
}
.delay-4 {
	animation-delay: 1.2s;
}
.delay-5 {
	animation-delay: 1.5s;
}
.delay-6 {
	animation-delay: 1.8s;
}
.delay-7 {
	animation-delay: 2.1s;
}
.delay-8 {
	animation-delay: 2.4s;
}
</style>
<section class="body">
	<div class="wrap animate pop">
		<div class="overlay">
			<div class="overlay-content animate slide-left delay-2">
				<h1 class="animate slide-left pop delay-4">Agri</h1>
				<p class="animate slide-left pop delay-5" style="color: white; margin-bottom: 2.5rem;">Kingdom: <em>Plantae</em></p>
			</div>
			<div class="image-content animate slide delay-5"></div>
			<div class="dots animate">
				<div class="dot animate slide-up delay-6"></div>
				<div class="dot animate slide-up delay-7"></div>
				<div class="dot animate slide-up delay-8"></div>
			</div>
		</div>
		<div class="text">
			<p><img class="inset" src="https://assets.codepen.io/4787486/oak_1.jpg" alt="" />Agriculture will become the most important & profitable business all over the country<br><br>Trees are woody perennial plants that are a member of the kingdom <em>Plantae</em>. All species of trees are grouped by their genus, family, and order. This helps make identifying and studying trees easier.</p>
			<p>Apart from providing oxygen for the planet and beauty when they bloom or turn color, trees are very useful. Certain species of hardwood and softwood trees are excellent for timber, making furniture, and paper.</p>
			<p>When managed properly, trees are a good source of renewable energy and construction material.</p>
		</div>
	</div>
</section>
@include('footer')