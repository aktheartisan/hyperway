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
	<img class="df" alt="" src="{{url('public/img/cit2.jpg')}}">

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
<h4 class="kn"><a href="{{url('/')}}">Home &nbsp;›&nbsp;</a>Contact Us</h4>

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
  .cg{
    display: flex;
    justify-content: center;
    align-items: center;
  }.bn{
    background-color: #3fa897;
    border: none;
    border-radius: 20px;
    padding: 8px;
  }.kila{
    margin: 80px 0 0 0;
  }
</style>
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-1"></div>
      <div class="col-md-10">


        <div class="card kila">
          <div class="row">
            <div class="col-md-6">

              <img alt="" src="{{url('public/img/conn.jpg')}}" style="width:100%;height:100%;border-radius: 0;">
            </div>
            <div class="col-md-6 ceg">
              <h3 style="text-align: center;margin: 10px 0 0 0;">Contact Us</h3>
              <form action="{{url('contact_submit')}}" method="post" style="margin:0 10px 20px 10px;padding: 10px;">
                @csrf
                <label>Name</label>
                <input class="form-control text" type="text" name="name">
                <label>Phone</label>
                <input class="form-control number" minlength="10" maxlength="15" type="text" name="phone">
                <label>Email</label>
                <input class="form-control" type="text" name="email">
                <label>Description</label>
                <textarea class="form-control" type="text" name="des"></textarea><br>
                <button class="bn">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-1"></div>

    </div>
  </div>
</section>

<style type="text/css">
  .nad{
    text-align: center;
  }
</style>
<section>
  <div class="container">
    <div class="row">

      <div class="col-md-4 nad">
        <span>{{$address}}</span><br><br>
        <img alt="" src="{{url('public/img/locc.png')}}" style="width: 40px;height: 40px;">
      </div>
      <div class="col-md-4 nad">
        <span>{{$phone}}</span><br><br>
        <img alt="" src="{{url('public/img/pho.png')}}" style="width: 40px;height: 40px;">
      </div>
      <div class="col-md-4 nad">
        <span>{{$email}}</span><br><br>
        <img alt="" src="{{url('public/img/email.png')}}" style="width: 40px;height: 40px;">
      </div>

    </div>
  </div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124079.74569078007!2d79.3423981963409!3d13.627805720775244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4b0f88620427%3A0xcf4152d1daca0cac!2sTirupati%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1694073541481!5m2!1sen!2sin" style="border:0;width:100%;height:450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
  $(function() {
    $(".number").on('input', function(e) {
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });
    $(".text").on('input', function(e) {
      $(this).val($(this).val().replace(/[^a-z A-Z]/g, ''));
    });
  });
</script>
@include('footer')